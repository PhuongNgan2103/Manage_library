<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table{
        border: 1px solid;
        border-collapse: collapse;
    }
</style>
<body>
<a href="index.php?page=add-student">Create</a>
<table>
    <tr>
        <th>Student_number</th>
        <th>Student_name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Image</th>
    </tr>
    <?php if (isset($students)) {
        foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student->getStudentNumber() ?></td>
                <td><?php echo $student->getStudentName() ?></td>
                <td><?php echo $student->getAddress() ?></td>
                <td><?php echo $student->getEmail() ?></td>
                <td><?php echo $student->getImage() ?></td>
                <td>
                    <button><a href="index.php?page=delete&studentNumber=<?php echo $student->getStudentNumber() ?>">Delete</a></button>
                </td>
            </tr>
        <?php endforeach;
    } ?>
</table>
</body>
</html>
<?php
