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
        <section class = "info">
        <div class = "info--container">
        <img class = "sportsclub" src="assets/sportsclub.svg" alt="sportsclub">
        <div class = "info--wrapper">
        <p class = "contact--tag tag h3-like">Contact</p>
        <h2 class = "info--title"> Neem contact op met Vision 21</h2>
        <div class = "adres--wrapper">
        <div class = "adres--container">
        <h3 class = "info--title p-like">Vision 21</h3>
        <p class = "adres--text"> Vierwegstraat 194, </p>
        <p class = "adres--text"> 8800 Roeselare </p>
        </br>
        </br>
        <p class = "adres--text"> 051 20 20 30 </p>
        <p class = "adres--text">roeselare@vision21.be</p>
        </div>
        <div class = "adres--container">
        <h3 class = "info--title p-like">Openingsuren</h3>
        <p class = "adres--text"> Ma-vr: 08.00u - 22.30u </p>
        <p class = "adres--text"> Za: 08.30u - 18.00u </p>
        <p class = "adres--text"> Zo: 08.30u - 13.00u </p>
        </br>
        </div>
        </div>
        <div class = "adres--wrapper shortwrapper">
        <div class = "adres--container">
        <h3 class = "tag adres--tag">Route</h3>
        <div class = "icons">
        <img src="assets/waze.svg" alt="">
        <img src="assets/route.svg" alt="">
        </div>
        </div>
        <div class = "adres--container adres--container-special">
        <h3 class = "tag adres--tag">Volg ons</h3>
        <div class = "icons">
        <img src="assets/instagram.svg" alt="">
        <img src="assets/facebook.svg" alt="">
        <img src="assets/twitter.svg" alt="">
</div>
        </div>
        </div>
        </div>
        </div>
        <div class = "info--map">
        </div>
        </section>
        <section class = "contact">
            <div class = "contact--container">
                <div class = "contact--titlesection">
                    <img class = "lightning" src="/assets/lightning.svg" alt="lightning">
                    <h2 class = "h3-like">Vraag of opmerking?</h2>
                </div>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <form action="{{ url('/create')}}" method="POST" class="form">
                    @csrf
                    <input class="form--input" type="text" placeholder="Naam" name="name" id="name" required /> <br>
                    <input class="form--input" type="text"  placeholder="Telefoon" name="phone" id="phone" required /> <br>
                    <input class="form--input" type="email" placeholder="E-mail" name="email" id="email" required /> <br>
                    <input class="form--input" type="text" placeholder="Bericht" name="message" id="message" required /> <br>
                    <input type="submit" class = "form--button"  value = "verzenden">
                    <div class = "form--wrapper">
                        <div class="form--checkbox">
                            <input type="checkbox" id="checkbox" required/>
                            <label for="checkbox"></label>
                        </div>
                        <p class = "contact--data"> IK VIND HET GOED DAT MIJN GEGEVENS
                            WORDEN OPGESLAGEN OM MIJ TE BENADEREN
                            VOOR DE (START)INFORMATIE
                        </p>
                    </div>
                </form>
            </div>
        </section>
        <main>
    </body>
</html>
