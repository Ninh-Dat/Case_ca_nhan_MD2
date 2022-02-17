
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
<table class="table table-striped">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">title</th>
        <th scope="col">Content</th>
        <th scope="col">Type_id</th>
    </tr>
    <tr>
        <td><?php echo $note->id?></td>
        <td><?php echo $note->title?></td>
        <td><?php echo $note->content?></td>
        <td><?php echo $note->type_id?></td>
</tr>
</table>
</body>
</html>
