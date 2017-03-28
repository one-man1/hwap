<!DOCTYPE html>
<head>
<meta charset="utf-8" >
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<title> Task </title>
<style>
  body{

    font-family: Arial,Helvetica,freesans,sans-serif;
    color: #39C09F;
  }
</style>
<body>
  <ul>
    <li><strong>Title </strong> <?= $task['title']; ?></li>
    <li><strong>Due Date </strong> <?= $task['date']; ?></li>
    <li><strong>Assign to  </strong> <?= $task['by']; ?></li>
    <li><strong>Status </strong> <?= $task['completed'] ? 'complete' : 'Incomleted'; ?></li>
    <li><strong>Status </strong>
    <?php if($task['completed']): ?>
    <span> &#10004;</span>
    <?php else: ?>
     <span>&#10008;</span>
    <?php endif; ?>
  </ul>
</body>
</html>
