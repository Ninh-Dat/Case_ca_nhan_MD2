<?php include_once "App/View/layout/nav.php"?>
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
<a href="index.php?page=type_note-create" type="button" class="btn btn-success mb-2">Create Note_Type</a>
<table  class="table table-striped">
    <thead>
    <tr>
        <th scope="col" >ID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col" style="text-align: center" >Action</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($note_types as $typenote):?>
        <tr>
            <td><?php echo $typenote->id?></td>
            <td><?php echo $typenote->name?></td>
            <td><?php echo $typenote->description?></td>
            <td>
                <a href="index.php?page=type_note-detail&id=<?php echo $typenote->id?>" type="button" class="btn btn-info">Detail</a>
                <a onclick="return confirm('Bạn có muốn xóa bài viết không ')" href="index.php?page=type_note-delete&id=<?php echo $typenote->id?>" ype="button" class="btn btn-success">Delete</a>
                <a href="index.php?page=type_note-update&id=<?php echo $typenote->id?>" type="button" class="btn btn-danger">Create</a>
            </td>

        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
