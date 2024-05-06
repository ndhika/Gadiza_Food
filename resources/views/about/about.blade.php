<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gadiza Food</title>

        <!-- Fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <style>
          @import url('https://fonts.googleapis.com/css2?family=Fontdiner+Swanky&display=swap');
          @import url('https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Fontdiner+Swanky&display=swap');
          @import url('https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Fontdiner+Swanky&display=swap');
          @import url('https://fonts.googleapis.com/css2?family=Belgrano&family=Cardo:ital,wght@0,400;0,700;1,400&family=Fontdiner+Swanky&display=swap');
          *{
            margin: 0%;
            padding: 0px

          }
          body{
            background: #D9CFC1;
            
          }

          .nav{
            padding-top: 20px;
            margin: 20px;
            justify-content: between;
            
          }

          .gadiza-food{
            font-family: "Lobster", sans-serif;
            font-size: 35px;
            margin-right: 40%;
          }

          .beranda{
            height: 31px;
            font-family: "Cardo", serif;
            font-size: 24px;
            color: #000000;
          }

          .menu{
            font-family: "Cardo", serif;
            font-size: 24px;
            color: #000000;
          }
          
          .tentang{
            font-family: "Cardo", serif;
            font-size: 24px;
            color: #000000;
          }

          .gadiza{
            margin: 0.115px 19px 115px;
            margin-left: 115px;
            margin-bottom: 20px;
            font-family: "Fontdiner Swanky", serif;
            font-size: 48px;
            color: #555555;

          }
          .about{
            margin-left: 115px;
            margin-bottom: 50%;
            font-family: "Cardo", serif;
            font-size: 40px;
            color: #555555
          }

          .find{
            font-family: "Belgrano", serif;
            color: #555555;
          }
        </style>

        
        

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar justify-content-center" style="background: white;">
    <img src="assets/img/logo.png" alt="logo" margin-left: 25%; style="width: 90px;" margin-left: 50%;>
    <div class="gadiza-food">
        @include('layouts.navbar')
    <div>
  <div>
    <div>
      <div>
      </div>
      <div>
        Gadiza Food
    </div>
    <div class="nav justify-content-center">
    <li class="nav-item">
      <a class="beranda nav-link" href="#">BERANDA</a>
    </li>
    <li class="nav-item">
      <a class="menu nav-link" href="#">MENU</a>
    </li>
    <li class="nav-item">
      <a class="tentang nav-link" href="#">TENTANG</a>
    </li>
    
    </div>
    </nav>
    <div class="gadiza">
      Gadiza Food's Website
    </div>
    <div class="about">
      Merupakan platform Website yang digunakan untuk memesan makanan dan minuman secara online. Ini membantu pengalaman berbelanja Anda menjadi lebih mudah dan praktis.
    </div>
    <div class="find">FIND US ON</div>
    
   
    </body>
</html>
