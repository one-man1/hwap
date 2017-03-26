<!DOCTYPE html>
<head>
<meta charset="utf-8" >
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<title> Anamiles Type </title>
<style>
  body{

    font-family: Arial,Helvetica,freesans,sans-serif;
    color: #39C09F;
  }
  header{
    text-align: left;
  }


</style>
</head>
<body>
  <header>
    <h1>
      Types of anamil
    </h1>
    <?php foreach ($names as $name) : ?>
      <li><?=$name?></li>
    <?php endforeach; ?>
  </header>
</body>
</html>
