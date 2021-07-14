<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/cro7cdq.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
<main>
<h1 class = "title hidden">Vision 21</h1>
<section class = "contact">
<div class = "contact--container">
<div class = "contact--titlesection">
<img class = "lightning" src="/assets/lightning.svg" alt="lightning">
<h2 class = "h3-like contact--title">Vraag of opmerking?</h2>
</div>
<form action="{{ url('/create')}}" method="POST" class="form">
@csrf
<input class="form--input" type="text" placeholder="Naam" name="name" id="name" required /> <br>
<input class="form--input" type="text" placeholder="Telefoon" name="phone" id="phone" required /> <br>
<input class="form--input" type="text" placeholder="E-mail" name="email" id="email" required /> <br>
<input class="form--input" type="text" placeholder="Bericht" name="message" id="message" required /> <br>
<input type="submit" class = "form--button"  value = "verzenden">
</form>
</div>
</section>
<main>
</body>
</html>
