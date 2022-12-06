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

    <!-- Inizio Header -->
    <header class="bg-dark">
      <div class="container d-flex align-items-center justify-content-center py-2">
        <div class="row text-white">
          <div class="col">
            <h1>My favorites albums</h1>
          </div>
        </div>
      </div>
    </header>
    <!-- Fine Header -->

    <!-- Inizio Main -->
    <main class="jt-container">

      <div class="container py-5 position-relative">

      <!-- Albums List -->  
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          <div class="col" v-for="(album, index) in albumsList" :key="index">
            <div @click.stop="getDetails(index)" class="card h-100 album-card mb-5 text-center text-light p-5">
              <img :src="album.poster" :alt="album.title">
              <div class="card-body text-center">
                <h3 class="album my-4">{{album.title}}</h3>
                <p class="artist">{{album.author}}</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Over Album details -->
        <div class="details-card text-white" v-if="showDetails">
          <div class="position-relative text-center">
            <img :src="albumDetails.poster" :alt="albumDetails.title">
            <h3 class="py-4">{{albumDetails.title}}</h3>
            <h4 class="fw-light">{{albumDetails.author}}</h4>
            <p>{{albumDetails.year}}</p>
            <p>Genre: {{albumDetails.genre}}</p>
          </div>
          <div class="position-absolute close-button" @click.stop="showDetails = !showDetails">
            <i class="fa-solid fa-xmark"></i>
          </div>
        </div>
  
      </div>

    </main>
    <!-- Fine Main -->

  </div>

  <!-- JS -->
  <script src="js/script.js"></script>
</body>
<!-- Fine Body -->

</html>