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
        <legend>Create student</legend>
        Id: <input type="number" name="studentNumber" required>
        Name: <input type="text" name="studentName" required>
        Address: <input type="text" name="address">
        Email: <input type="text" name="email">
        Image: <input type="text" name="image">
        <button>Create Student</button>
    </fieldset>
</form>
</body>
</html>
<?php
use App\Model\Students;
use App\Model\StudentsManager;
