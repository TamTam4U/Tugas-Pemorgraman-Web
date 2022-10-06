<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Output</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>
        <div id="grad"></div>
        <div class="container">
          <h1>Data Anda</h1>
          <p> Username anda : <?= $_GET["user"];  ?></p>
          <br>
           <p> Password anda : <?= $_GET["pass"];  ?></p>
        </div>     
    </body>
</html>