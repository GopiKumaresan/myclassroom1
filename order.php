<html>
<body>
    <?php
    $db = pg_connect('host=ec2-54-157-88-70.compute-1.amazonaws.com dbname=d2mvggsgdlgfn0 user=jhyqrcvvkcmdxm password=795441b0e992e1c6bbb1e44b6eee26bf82fefcab29078f93b2bb1b186e133b26');

    $firstname = pg_escape_string($_POST['firstname']);
    $surname = pg_escape_string($_POST['surname']);

    $query = "INSERT INTO details VALUES('" . $firstname . "', '" . $surname . "')";
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
