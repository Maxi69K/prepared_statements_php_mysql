<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>

    <form action="insertStudent.php" method="post">
        <input type="text" name="name" placeholder="name">
        <input type="number" name="age" placeholder="age">
        <button type="submit">Save</button>
    </form>

    <?php foreach($result as $student): ?>
        <li><?php echo $student->getInfo(); ?></li>
    <?php endforeach; ?>
</body>

</html>