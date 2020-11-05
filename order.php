<html>
<body>
    <?php
    $db = pg_connect('host=ec2-34-202-88-122.compute-1.amazonaws.com dbname=d4uo4us2g2dcb5 user=tmrovmkqcygsfb password=873f73d454dae5222e9c3b484b8041460782e2c7947be8176aef5cb5192dd99e');

    $firstname = pg_escape_string($_POST['firstname']);
    $surname = pg_escape_string($_POST['surname']);

    $query = "INSERT INTO detials VALUES('" . $firstname . "', '" . $surname . "')";
    $result = pg_query($query);
    if (!$result) {
        $errormessage = pg_last_error();
        echo "Error with query: " . $errormessage;
        exit();
    }
    printf ("These values were inserted into the database - %s %s", $firstname, $surname);
    pg_close();
    ?>
</body>
</html> 