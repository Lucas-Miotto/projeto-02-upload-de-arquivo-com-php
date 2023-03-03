<?php

$targetDir = "../uploads/";
$tempoName = uniqid("arq");
$targetFile = $targetDir . $tempoName . '-' . basename($_FILES["arquivo"]["name"]);

$result = move_uploaded_file($_FILES["arquivo"]["tmp_name"], $targetFile);

if ($result === true) {
  echo "Upload concluido com sucesso!";
  header("Refresh:4; url=../index.php", true);
} else {
  echo "Falha ao realizar o upload!";
  header("Refresh:4; url=../index.php", true);
}
