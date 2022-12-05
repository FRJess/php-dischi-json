// VUE
const { createApp } = Vue;

createApp({

  data() {
    return {
      apiUrl: 'server.php',
      albumsList: [],
    }
  },

  methods: {
    getAlbums() {
      axios.get(this.apiUrl)
        .then(result => {
          this.albumsList = result.data;
          console.log(this.albumsList);
        })
    }
  },

  mounted() {
    this.getAlbums();
    console.log('APP OK')
  }
}).mount('#app');