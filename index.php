<?php

require_once './class/MoreInfo.php';
require_once './class/Movie.php';

$movie1 = new Movie("Top Gun Maverick", "13+", "Action","https://www.girodivite.it/IMG/jpg/Top_Gun_Maverick.jpg", new MoreInfo("Tom Cruise-Miles Teller-Jennifer Connelly", "2h 10min", "Dopo trent’anni, Maverick (Tom Cruise) è un eccellente aviatore della marina, ma deve affrontare i fantasmi del suo passato quando conduce i laureati d’élite della TOP GUN in una missione che richiede il sacrificio estremo a chi vi partecipa." ));

$movie2 = new Movie("Fight Club", "18+", "Drama","https://m.media-amazon.com/images/I/71YFxhhSRPL._SY445_.jpg", new MoreInfo("Edward Norton- Joon Kim-Evan Mirand", "2h 19min", "Il protagonista è un rappresentante annoiato e stanco del proprio lavoro, che non dorme più la notte. Per non cadere in depressione frequenta un gruppo di discussione di malati, grazie ai quali si sente finalmente bene. In uno di questi incontri incontra Marla Singer e inizierà una travolgente amicizia con Tyler Durden, con il quale aprirà un 'fight club'."));

$movie3 = new Movie("John Wick", "13+", "Action", "https://pad.mymovies.it/filmclub/2014/08/105/locandina.jpg", new MoreInfo("KEANU REEVES, ADRIANNE PALICKI, WILLEM DAFOE","1h 41min", "Un giovane e sadico criminale della mafia russa di New York fa irruzione in casa di un uomo che ha appena perso la moglie, per picchiarlo e rubare la sua Boss Mustang del '69. La bravata del mafioso avrà delle conseguenze inimmaginabili: l'uomo che ha picchiato è John Wick, il più spietato serial killer che la malavita abbia mai conosciuto. E il suo unico obiettivo adesso è vendicarsi."));

$movie4 = new Movie("Avatar", "13+", "Fantasy", null, new MoreInfo("Sam Worthington, Zoe Saldana, Stephen Lang", "2h 42min", "Un eroe dubbioso. Un viaggio epico. La scelta tra una vita lasciata alle spalle e l’incredibile nuovo mondo che sarà presto la sua casa. Rivivete Avatar di James Cameron – la più grande avventura di tutti i tempi."));

$moviesList = [$movie1, $movie2, $movie3, $movie4];
var_dump($moviesList);
//var_dump($movie1);
//var_dump($movie2);

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
  <header class="h-25">
    <div class="container h-100 d-flex justify-content-center align-items-center">
      <h1>MOVIES</h1>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="row d-flex flex-wrap">
        <?php foreach($moviesList as $movie) :?>
        <div class="card m-3" style="width: 18rem;">
          <img src="<?php echo $movie->getImg() ?>" class="card-img-top" alt="<?php $movie->title ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $movie->title ?></h5>
          <p class="card-text">Genere: <?php echo $movie->type ?></p>
          <p class="card-text"><?php echo $movie->moreInfo->plot ?></p>
          <p class="card-text"><?php echo $movie->target ?></p>
        </div>
        </div>
        <?php endforeach; ?>
      </div>
      
    </div>
  </main>



</body>
</html>