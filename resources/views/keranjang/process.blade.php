<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pesanan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital@0;1&display=swap" rel="stylesheet">

    <style>
        h2{
            font-family: Rubik, sans-serif;
            text-align: center;
        }
        .centered{
            margin-top: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        img{  
            width: 300px;
            height: 300px;
        }
    </style>
</head>
<body>
    <div class="centered">
        <img src="{{ asset ('assets/img/sedang-dibuat.gif') }}" alt="">
    </div>
    <h2>Pesananmu sudah masuk. Makanan sedang dibuat!</h2>
    <a href="/ship" class="btn btn-primary">next</a>
</body>
</html>