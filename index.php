<?php

require_once './class/MoreInfo.php';
require_once './class/Movies.php';

$movie1 = new Movie("Top Gun Maverick", "13+", "Action", new MoreInfo("Tom Cruise-Miles Teller-Jennifer Connelly", "2h 10min", "Dopo trent’anni, Maverick (Tom Cruise) è un eccellente aviatore della marina, ma deve affrontare i fantasmi del suo passato quando conduce i laureati d’élite della TOP GUN in una missione che richiede il sacrificio estremo a chi vi partecipa." ));

$movie2 = new Movie("Fight Club", "18+", "Drama", new MoreInfo("Edward Norton- Joon Kim-Evan Mirand", "2h 19min", "Il protagonista è un rappresentante annoiato e stanco del proprio lavoro, che non dorme più la notte. Per non cadere in depressione frequenta un gruppo di discussione di malati, grazie ai quali si sente finalmente bene. In uno di questi incontri incontra Marla Singer e inizierà una travolgente amicizia con Tyler Durden, con il quale aprirà un 'fight club'."));

var_dump($movie1);
var_dump($movie2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <title>OOP Movies</title>
</head>
<body>
  <header>
    <div class="container h-100 d-flex justify-content-center align-items-center">
      <h1>MOVIES</h1>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="row d-flex flex-wrap">
        <div class="card m-4 p-2 text-center" style="width: 18rem;">
        <div class="card-body">
          
        </div>
      </div>
      </div>
    </div>
  </main>



</body>
</html>