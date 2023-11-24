<?php
$list = [1, 2, 3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<ul>
    <?php foreach ($list as $item) {
        echo "<li>" . $item . "</li >";
    }
    ?>

</ul>
</body>
</html>