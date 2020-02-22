<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MirFox</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap&subset=cyrillic" rel="stylesheet">
    <!-- <bootstrap> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- </bootstrap> -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/media.css">
</head>
<body>



<div class="bg_opacity"></div>
<div class="container cards_content">
  <h2>Угадай карту</h2>
  <p>Переверните карту за 10 монет</p>
  <div class="cards_wrap">
    <div class="row">
      <div class="card c1">
        <div class="front_card"></div>
        <div class="back_card"></div>
      </div>
      <div class="card c2">
        <div class="front_card"></div>
        <div class="back_card"></div>
      </div>
      <div class="card c3">
        <div class="front_card"></div>
        <div class="back_card"></div>
      </div>
    </div>
    <div class="row">
      <div class="card c4">
        <div class="front_card"></div>
        <div class="back_card"></div>
      </div>
      <div class="card card_play c5 card_hover" onclick="play_cards()">
        <img src="./assets/img/play_butt.png" alt="">
      </div>
      <div class="card c6">
        <div class="front_card"></div>
        <div class="back_card"></div>
      </div>
    </div>
    <div class="row">
      <div class="card c7">
        <div class="front_card"></div>
        <div class="back_card"></div>
      </div>
      <div class="card c8">
        <div class="front_card"></div>
        <div class="back_card"></div>
      </div>
      <div class="card c9">
        <div class="front_card"></div>
        <div class="back_card"></div>
      </div>
    </div>
  </div>
</div>



<!-- js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./assets/js/script.js"></script>
<script type="text/javascript" src="./assets/js/cards.js"></script>
</body>

</html>
