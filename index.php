<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload/Download</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>File Upload/Download</h1>

    <h2>Upload File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>

    <h2>Download Files</h2>
    <ul>
        <?php
        $dir = "uploads/";
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != "..") {
                        echo "<li><a href='download.php?file=$file'>$file</a></li>";
                    }
                }
                closedir($dh);
            }
        }
        ?>
    </ul>

    <h2>Import Database</h2>
    <form action="import_db.php" method="post" enctype="multipart/form-data">
        <input type="file" name="dbFile" id="dbFile">
        <input type="submit" value="Import Database" name="submit">
    </form>

    <script src="script.js"></script>
</body>
</html>
