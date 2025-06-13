<?php
$numero = $_POST['numero'];

switch ($numero) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "Sábado";
        break;
        default:
        echo "Número inválido. Digite um número de 1 a 7.";
}
?>



<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7e0fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
 
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
 
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            width: 80px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
 
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #9150af;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
        }
 
        .resultado {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
            font-size: 20px;
        }
</style>