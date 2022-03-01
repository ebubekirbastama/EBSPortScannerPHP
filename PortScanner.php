<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
    <title>EBS Port Scanner</title>
</head>
<body>
    <?php
    ini_set('max_execution_time', 0);
    ini_set('memory_limit', -1);

    $host = '34.209.113.53';
    $ports = array(21, 25, 80, 81, 110, 143, 443, 587, 2525, 3306);

    foreach ($ports as $port) {
        $connection = @fsockopen($host, $port, $errno, $errstr, 2);

        if (is_resource($connection)) {
            echo '<h2>' . $host . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') Açık .</h2>' . "\n";

            fclose($connection);
        } else {
            echo '<h2>' . $host . ':' . $port . ' Kapalı .</h2>' . "\n";
        }
    }
    
    

    ?>
</body>
</html>
