<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$idade = $_GET['idade'];
$data = $_GET['data'];
$senha = $_GET['senha'];
$tecnologias = isset($_GET['tecnologias']) ? implode(", ", $_GET['tecnologias']) : '';
$nivel_html = $_GET['nivelHTML'];
$sistema_operacional = $_GET['SO'];

echo "Seu nome é " . $nome;
echo "<br>";
echo "Seu email é " . $email;
echo "<br>";
echo "Sua idade é " . $idade;
echo "<br>";
echo "Sua data de nascimento é " . $data;
echo "<br>";
echo "Sua senha é " . $senha;
echo "<br>";
echo "Tecnologias que você conhece: " . $tecnologias;
echo "<br>";
echo "Nível de experiência em HTML: " . $nivel_html;
echo "<br>";
echo "Sistema operacional principal: " . $sistema_operacional;
echo "<br>";
?>
