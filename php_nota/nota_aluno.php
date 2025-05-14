<?php

$nm_aluno = $_POST ['nm_aluno'];
$nota01 =  $_POST ['nota01'];
$nota02 =  $_POST ['nota02'];
$nota03 =  $_POST ['nota03'];
$nota04 =  $_POST ['nota04'];

$media = ($nota01+$nota02+$nota03+$nota04) / 4;

$resultado = "";


if ($media < 5) {
    $resultado = "Aluno reprovado! ". $media;

} elseif ($media < 6) {
    $resultado = "Aluno de recuperação!  ". $media;
} else {
    $resultado = "Aluno aprovado! ". $media;
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado nota</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container" >
    <aside class="lado_direito"><?php echo  $nm_aluno ?></aside>
    <div class="nota_aluno"><?php echo  $resultado ?></div>
</div>

</body>
</html>