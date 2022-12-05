<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
  integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- AXIOS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js" integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- VUE -->
  <script src="https://unpkg.com/vue@3"></script>

  <title>Dischi</title>
</head>

<!-- Inizio Body -->

<body>
  <div id="app">
    <header class="bg-dark">
      <div class="container d-flex align-items-center justify-content-center py-2">
        <div class="row text-white">
          <div class="col">
            <h1>My favorites albums</h1>
          </div>
        </div>
      </div>
    </header>

    <main class="jt-container">

      <div class="container py-5 position-relative">

        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col" v-for="(album, index) in albumsList" :key="index">
            <div @click.stop="getDetails(index)" class="card h-100 album-card mb-5 text-center text-light p-5">
              <img :src="album.poster" :alt="album.title">
              <div class="card-body text-center">
                <h5 class="album my-4">{{album.title}}</h5>
                <p class="artist">{{album.author}}</p>
                <p class="publication-year">{{album.year}}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="details-box text-white" v-if="showDetails">
          <div class="position-relative text-center">
            <img :src="albumDetails.poster" :alt="albumDetails.title">
            <h5 class="py-4">{{albumDetails.title}}</h5>
            <p class="fw-light">{{albumDetails.author}}</p>
            <p>{{albumDetails.year}}</p>
            <p class="fw-light">Genre: {{albumDetails.genre}}</p>
          </div>
          <div class="position-absolute close-button" @click.stop="showDetails = !showDetails">
            <i class="fa-solid fa-xmark"></i>
          </div>
        </div>
  
      </div>


    </main>
  </div>

  <!-- JS -->
  <script src="js/script.js"></script>
</body>
<!-- Fine Body -->

</html>


<!-- Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.

Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
BONUS
Scegliete uno o più fra queste funzionalità
- Al click su un disco, recuperare e mostrare i dati del disco selezionato
- Creare una selezione (sempre tramite API) per genere musicale
- Aggiungere/rimuovere un disco (per l’immagine utilizzare una URL remota) -->