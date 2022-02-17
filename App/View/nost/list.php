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
<a href="index.php?page=note-create" type="button" class="btn btn-success mb-2"> Create Note</a>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Type_id</th>
        <th scope="coi-3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($notes as $nost):?>
        <tr>
            <td><?php echo $nost->id?></td>
            <td><?php echo $nost->title?></td>
            <td><?php echo $nost->content?></td>
            <td><?php echo $nost->typeName?></td>
            <td>
                <a href="index.php?page=note-detail&id=<?php echo $nost->id?>" type="button" class="btn btn-info">Detail</a>
                <a onclick="return confirm('Bạn có muốn xóa bài viết không ')" href="index.php?page=note-delete&id=<?php echo $nost->id?>" type="button" class="btn btn-success">Delete</a>
                <a href="index.php?page=note-update&id=<?php echo $nost->id?>" type="button" class="btn btn-danger">Update</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
