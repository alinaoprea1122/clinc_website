<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>VetCare</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png">


    <script src="https://kit.fontawesome.com/e8fa2e31b4.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/plata.css">
</head>
<body>
<div class="container">
    <div class="left">
        <p>Medote de plata</p>
        <hr style="border: 1px solid #ccc; margin: 0 15px;">
        <div class="methods">
            <div onclick="doFun()" id="tColorA" style="color: orange;">
                <i class="fa-solid fa-credit-card" style="color:orange; "></i>
                Plata cu Cardul
            </div>
            <div onclick="doFunA()" id="tColorB">
                <i class="fa-solid fa-building-columns"></i>
                Numerar
            </div>
            <div onclick="doFunB()" id="tColorC">
                <i class="fa-solid fa-wallet"></i>
                Apple/Google Pay
            </div>
            <hr style="border: 1px solid #ccc; margin: 0 15px;">
        </div>
        <div class="center">
            <a href="https://www.shift4shop.com/credit-card-logos.html">
                <img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="250" height="auto"/>
            </a>
            <hr style="border: 1px solid #ccc; margin: 0 15px;">
            <div class="card-details">
                <form>
                    <p> Numarul Cardului</p>
                    <div class="c-number" id="c-number">
                        <input id="number" class="cc-number" placeholder="Numar Card" maxlength="19" required>
                        <i class="fa-solid fa-credit-card" style="margin: 0;"></i>
                    </div>

                    <div class="c-details">
                        <div>
                            <p>Data Expirarii</p>
                            <input id="e-date" class="cc-exp" placeholder="MM/YY" required maxlength="5" required>
                        </div>
                        <div>
                            <p>CVV</p>
                            <div class="cvv-box" id="cvv-box">
                                <input id="cvv" class="cc-cvv" placeholder="CVV" required maxlength="3" required>
                                <i class="fa-solid  icofont-question-circle" title="Cele 3 cifre din spatele cardului" style="cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="email">
                        <p> Email</p>
                        <input type="email" placeholder="example@yahoo/gmail.com" id="email" required>
                    </div>
                   <a href="Comanda-Plasata.php"> PLATESTE ACUM !</a>
                </form>
            </div>
        </div>

        <div class="right">
            <p> Informatiile Comenzii</p>
            <hr style="border: 1px solid #ccc; margin: 0 15px;">
            <div class="details">
                <div style="font-weight: bold; padding: 3px 0;">
                    Descrierea Comenzii
                </div>
                <div style="padding: 3px 0;"> Testeaza plata</div>
            </div>
            <hr style="border: 1px solid #ccc; margin: 0 15px;">
            <a href="https://www.shift4shop.com/credit-card-logos.html">
                <img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="250" height="auto"/>
            </a>
        </div>

    </div>

</div>

<script src="assets/js/main.js"></script>
</body>
</html>