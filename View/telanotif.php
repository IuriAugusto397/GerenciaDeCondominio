<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "condominio";
$connection = new mysqli($servername, $username, $password, $db_name);

if($connection->connect_error){
    die("Conexão falhou".$connection->connect_error);
}

if (isset($_POST['submit'])) {
    // Consulta SQL para buscar os emails cadastrados
    $query = "SELECT email FROM moradores";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo "Erro na consulta ao banco de dados: " . mysqli_error($connection);
        exit;
    }

    // Loop para percorrer os resultados da consulta
    while ($row = mysqli_fetch_assoc($result)) {
        $emailpara = $row['email'];
        $to = $emailpara;
        $subject = $_POST['assunto'];
        $message = $_POST['message'];
        $header = "From: testephpxampp@gmail.com";

        // Enviar o email para cada destinatário
        if (mail($to, $subject, $message, $header)) {
            echo "Email enviado para " . $emailpara . "<br>";
        } else {
            echo "Falha no envio para " . $emailpara . "<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notificacoes Gerais</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400&family=Montserrat:wght@200;300&display=swap');

            * {
                margin: 0;
                padding: 0;
                font-family: 'Inter', sans-serif;
            }

            body {
                background-image: url(imagens/imagemcond.jpeg);
                background-size: cover;
                background-attachment: fixed;
                background-color: white;
            }

            .box {
                display: flex;
                justify-content: center;
                width: 100%;
                margin-top: 100px;
            }

            .card {
                background-color: #31322C;
                padding: 50px 30px;
                box-shadow: 4px 4px 1px 0px #00000060;
                position: relative;
                border: 6px solid #000000;
                border-radius: 10px;
            }

            h1 {
                text-align: center;
                margin-bottom: 20px;
                color: white;
            }

            .label-float input {
                width: 98%;
                padding: 5px 5px;
                display: inline-block;
                border: 0;
                border-radius: 10px;
                box-shadow: 0px 1px 0px 0px #ffffff;
            }

            .label-float {
                color: rgb(254, 254, 254);
                position: relative;
                padding-top: 13px;
                margin-top: 5%;
                margin-bottom: 5%;
            }

            .label-float textarea {
                width: 98%;
                padding: 5px 5px;
                display: inline-block;
                border: 0;
                border-radius: 10px;
                box-shadow: 0px 1px 0px 0px #ffffff;
            }

            .formbutton {
                background-color: rgb(26, 147, 89);
                padding: 7px;
                border-radius: 10px;
                color: black;
                font-weight: bold;
                font-size: 16px;
                bottom: 80px;
                border: 2px solid black;
                transition: background-color 0.2s ease-in-out;
                transition: border 0.2s ease-in-out;
            }

            .formbutton-left {
                float: left;
                margin-top: -70px;
            }

            .formbutton-right {
                float: right;
                margin-top: -50px;
            }

            .formbutton:hover {
                background-color: rgb(0, 255, 115);
                border: 2px solid rgb(193, 251, 193);
                color: rgb(0, 0, 0);
                cursor: pointer;
            }

            hr {
                margin-top: 20px;
                border-radius: 10px;
                border-top: 3px solid white;
                opacity:1;
            }
        </style>
    </head>

    <body>
    
        <main>

            <div class="box">

                <div class="card">
                
                    <h1>Notificações Gerais</h1>
                
                    <form method="post">
                
                        <div class='label-float'>
                            <label for="assunto">Assunto: <br></label>
                            <input type="text" name="assunto" id="assunto" placeholder="">
                        </div>

                        <div class='label-float'>
                            <textarea id="message" name="message" cols="70" rows="10" placeholder="Descrição da notificação..."></textarea> 
                        </div><br><br>

                        <div class="justify-center">
                            <button class="formbutton formbutton-right" name="submit" type="submit">Enviar</button>
                        </div>
                
                    </form>

                    <div class="justify-center">
                        <a href="telademenudefuncionalidades.php"><button class="formbutton formbutton-left" onclick="window.history.back()">Voltar</button></a>
                        <hr>
                    </div>

                </div>

            </div>

        </main>

    </body>

</html>