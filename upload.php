<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "O ficheiro ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " foi carregado.";
    
} else {
    echo "Aconteceu algum erro ao carregar o ficheiro.";
}
?>
