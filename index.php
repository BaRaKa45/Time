<?php
require_once 'src/TimeTravel.php';
use App\TimeTravel;
    
//    $start = new \DateTime("1985-12-31");
    $timeTravel = new App\TimeTravel();
    $timeTravel->findDate('1000000000');
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo date_format($timeTravel->getStart(), 'Y-m-d');;
        ?>
    </body>
</html>
