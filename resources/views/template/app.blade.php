<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" crossorigin="anonymous" />

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <img class="logofooter" src="/img/logo-alterego.png" alt="">  
            </div>
        </div>
    </div>

    @yield('content')

<footer class="footer">
    <div class="container-fluid">
        <div class="row listo">
            <div class="col text-center">
                    <img class="logofooter" src="/img/logo-alterego.png" alt="">  
                    <div class="info">
                        <p class="contactosfooter"><i class="fas fa-map-marker-alt"></i> C/Sant Maurici 26 - 17740 Vilafant (Girona) <span class="marginsfooter"><i class="fas fa-envelope"></i>info@alteregoweb.com</span><i class="fas fa-phone"></i> +34 872 98 93 92</p>
                    </div> 
                    <div class="info">
                        <p class="legalesfooter">Aviso legal<span class="marginsfooter">|</span>Politica de privacidad<span class="marginsfooter">|</span>Politica de cookies</p>
                    </div>             
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div>
                    <p class="copyright">Copyright © Alteregoweb - Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="js/app.js"></script>
</body>

</html>