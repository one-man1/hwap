<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Tahani WebPage </title>
  <style>
    header{
      background: #e3e3e3;
      padding: 2em;
      text-align: center;
    }
  </style>
</head>

<body>
  <header>
    <h1>
          <?php
          $color=$_GET['color'];
           echo "Your favourite color is $color";

           ?>
    </h1>
  
  </header>

</body>
</html>
