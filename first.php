<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible">
        <title>PHP Course</title>
    </head>
    <body>
        <?php
            $count = 0;
            $name = array("John","Steve","Mary");
            while($count < count($name)) {
            echo "Name: $name[$count]<br/>";
            $count++;
            }
        ?>
    </body>
</html>

