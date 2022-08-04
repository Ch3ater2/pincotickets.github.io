
    <?php
    $host = "db4free.net:3306";
    $name = "ticketsdata";
    $user = "ticketsuser";
    $passwort = "pincoteam22";
    try{
        $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
    } catch (PDOException $e){

    }
    ?>
    