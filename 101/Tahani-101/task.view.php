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
    </h1>

  <table style="width:100%">
    <?php
      foreach ($task as $Key => $val):  ?>

  <tr>
    <th>
      <?=  $Key ?>
    </th>
  </tr>
  <tr>
    <td><?= $val ?></td>
  </tr>
<?php endforeach; ?>
</table>
  </header>
</body>
</html>
