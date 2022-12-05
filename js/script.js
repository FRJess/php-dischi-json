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
    //get all albums in json
    getAlbums() {
      axios.get(this.apiUrl)
        .then(result => {
          this.albumsList = result.data;
        })
    },

    //get album clicked details
    getDetails(index) {
      this.showDetails = true;
      axios.get(this.apiUrl, {
        params: {
          details: index
        }
      })
        .then(result => {
          //new array with results
          this.albumDetails = result.data;
        })
    }
  },

  mounted() {
    this.getAlbums();
    console.log('APP OK')
  }
}).mount('#app');