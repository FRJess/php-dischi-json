// VUE
const { createApp } = Vue;

createApp({

  data() {
    return {
      apiUrl: 'server.php',
      albumsList: [],
      albumDetails: [],
      showDetails: false,
    }
  },

  methods: {
    getAlbums() {
      axios.get(this.apiUrl)
        .then(result => {
          this.albumsList = result.data;
          // console.log(this.albumsList);
        })
    },

    getDetails(index) {
      this.showDetails = true;
      axios.get(this.apiUrl, {
        params: {
          details: index
        }
      })
        .then(result => {
          this.albumDetails = result.data;
          // console.log(this.albumDetails)
        })
    }
  },

  mounted() {
    this.getAlbums();
    console.log('APP OK')
  }
}).mount('#app');