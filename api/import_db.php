<?php
if (isset($_FILES["dbFile"])) {
    $file = $_FILES["dbFile"]["tmp_name"];
    $db_host = "your_host";
    $db_port = "5432";
    $db_name = "your_db";
    $db_user = "your_user";
    $db_pass = "your_password";

    $command = "psql --host=$db_host --port=$db_port --username=$db_user --dbname=$db_name < $file";
    
    $output = shell_exec($command);

    if ($output === null) {
        echo "Database imported successfully.";
    } else {
        echo "Error importing database.";
    }
}
?>
