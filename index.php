<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

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
      <!-- <img src="/img/logo-small.svg" alt="logo Spotify"> -->
      <div class="container d-flex align-items-center justify-content-center">
        <div class="row text-white">
          <div class="col">
            <h1>My favorites albums</h1>
          </div>
        </div>
      </div>
    </header>

    <div class="container py-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col" v-for="(album, index) in albumsList" :key="index">
          <div class="card album-card">
            <img :src="album.poster" :alt="album.title">
            <div class="card-body text-center">
              <h5 class="py-3">{{album.title}}</h5>
              <p class="fw-light">{{album.author}}</p>
              <p>{{album.year}}</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- JS -->
</body>
<!-- Fine Body -->
<script src="js/script.js"></script>

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