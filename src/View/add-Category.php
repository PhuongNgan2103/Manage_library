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
<form method="post">
    <fieldset>
        <legend>Create Category</legend>
        ID: <input type="text" name="category_code" disabled>
        Name: <input type="text" name="category_name" disabled>
        Description: <input type="text" name="description">
        <button>create Category</button>
    </fieldset>
</form>
</body>
</html>
<?php
use App\Model\Category;
use App\Model\CategoryManager;
