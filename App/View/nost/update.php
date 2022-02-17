<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="id" value="<?php echo $note->id?>" >
    <input type="text" name="title" value="<?php echo $note->title?>" >
    <input type="text" name="content"  value="<?php echo $note->content?>">
    <input type="text" name="type_id" value="<?php echo $note->type_id?>" >
    <button type="button" class="btn btn-info">Update</button>
</form>
</body>
</html>

