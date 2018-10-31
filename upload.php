<?php
$target_diretorio = "uploads/";
$target_arquivo = $target_diretorio . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_arquivo,PATHINFO_EXTENSION));

// Verifica se o arquivo é de fato uma imagem
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


if ($uploadOk == 0) {
    echo "Erro! Esse arquivo não é suportado";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_arquivo)) {
        echo "O arquivo ". basename( $_FILES["fileToUpload"]["name"]). " foi adicionado com sucesso .";
    } else {
        echo "Erro no upload do arquivo.";
    }
}
// Verifica se o arquivo já fi adicionado antes
if (file_exists($target_arquivo)) {
	echo "Erro! este arquivo já existe";
	$uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = 0;
}


// Verifica o tamanho do arquivo que o usuario adicionou
if ($_FILES["fileToUpload"]["size"] > 2048000) {
	echo "Erro! este arquivo é muito grande. O tamanho máximo é 2MB";
	$uploadOk = 0;
}
// Verificando os formatos da imagem 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = 0;
}

?>
