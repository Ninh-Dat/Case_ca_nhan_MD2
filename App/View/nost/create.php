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
<!--<form action="" method="post">-->
<!--    <input type="text" name="title">-->
<!--    <input type="text" name="content">-->
<!--    <select name="type_id" id="">-->
<!--        --><?php //foreach ($type_id as $type) :?>
<!--        <option value="--><?php //echo $type->id?><!--">--><?php //echo $type->name?><!--</option>-->
<!--        --><?php //endforeach;?>
<!--    </select>-->
<!--    <button type="button" class="btn btn-info">Create</button>-->
<!--</form>-->
<div class="card-body">
<form method="post">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="title" id="inputPassword3">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Content</label>
        <div class="col-sm-10">
            <input type="type" class="form-control" name="content" id="inputPassword3">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Type_id</label>
        <div class="col-sm-10">
            <select name="type_id" id="inputPassword3">
                <?php foreach ($type_id as $type) :?>
                    <option value="<?php echo $type->id?>"><?php echo $type->name?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Create_note</button>
        </div>
    </div>

</form>
</div>
</body>
</html>
