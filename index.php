<!DOCTYPE html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $cars = array(
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Audi",20,2),
        ); 
        for($row = 0; $row <3; $row++){
            echo '<ul>';
            for($col = 0; $col < 3; $col++){
                echo '<li>' . $cars[$row][$col] . '</li>';
            }
        }
    
    ?>
</body>
</html>