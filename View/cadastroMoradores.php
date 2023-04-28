<?php
    $action = "inserir";
    include_once '../DAO/moradorDAO.php';
    include_once '../Model/moradorModel.php';

    $nome = "";
    $bloco = "";
    $apartamento = "";
    $email = "";
    $datadenascimento = "";
    $datadeaquisicao = "";
    $telefone = "";
    $cpf = "";

    if(isset($_REQUEST['editar'])){
        $morador = MoradorDAO::buscarPorId($_REQUEST['id']);
        $nome = $morador->getNome();
        $bloco = $morador->getBloco();
        $apartamento = $morador->getApartamento();
        $email = $morador->getEmail();
        $datadenascimento = $morador->getData_nasc();
        $datadeaquisicao = $morador->getData_aqui();
        $telefone = $morador->getTelefone();
        $cpf = $morador->getCpf();
        $action = "editar&id=".$morador->getId();
    }
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, user-scalable = no">
        

        <title>Cadastro de novos moradores</title>
        <style> 
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400&family=Montserrat:wght@200;300&display=swap');

            *{
                margin:0;
                padding:0;
            font-family:'Inter', sans-serif;
            }

            body{
                background-image:url(imagens/imagemcond.jpeg);
                background-size:cover;
                background-attachment: fixed;
            }

            .box{
                display:flex;
                justify-content: center;
                width: 100%;
                margin-top:100px;
            }
            .card{
                background-color: #31322C;
                padding: 50px 30px;
                box-shadow: 4px 4px 1px 0px #00000060;
                position: relative;
                border: 6px solid #000000;
                border-radius: 10px;
            }
            h1{
                text-align: center;
                margin-bottom:20px;
                color:white;
            }
            .label-float input{
                width: 98%;
                padding:5px 5px;
                display:inline-block;
                border:0;
                border-radius: 10px;
                box-shadow: 0px 1px 0px 0px #ffffff;
            }
            .label-float{
                color:rgb(254, 254, 254);
                position:relative;
                padding-top: 13px;
                margin-top: 5%;
                margin-bottom:5%;
            }
            .label-float textarea{
                width: 98%;
                padding:5px 5px;
                display:inline-block;
                border:0;
                border-radius: 10px;
                box-shadow: 0px 1px 0px 0px #ffffff;
            }
            .formbutton{
                background-color: rgb(26, 147, 89);
                padding:7px;
                border-radius: 10px;
                color:black;
                font-weight: bold;
                font-size: 16px;
                position: absolute;
                bottom: 80px;
                border: 2px solid black;
                transition: background-color 0.2s ease-in-out;
                transition: border 0.2s ease-in-out;
            }
            .formbutton:first-child{
                left: 30px;
            }
            .formbutton:last-child{
                right: 30px;
            }
            .formbutton:hover{
                background-color: rgb(0, 255, 115);
                border: 2px solid rgb(193, 251, 193);
                color:rgb(0, 0, 0);
                cursor: pointer;
            }

        </style>
    </head>

    <body>

        <main>

            <div class="box">

                <div class="card">
                    
                    <h1>Cadastro de novos moradores</h1>
                    
                    <form action="../Controller/moradorController.php?<?php echo $action ?>" method="POST">
                        
                        <div class='label-float'>
                            <label for=usuario>Nome Completo: <br></label>
                            <input type='text' value="<?php echo $nome?>" name='nome' id='txtNome' placeholder="seu nome e sobrenome">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>Bloco: <br></label>
                            <input type='text' value="<?php echo $bloco?>" name='bloco' id='txtBloco' placeholder="número do bloco/prédio que mora">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>Apartamento: <br></label>
                            <input type='text' value="<?php echo $apartamento?>" name='apartamento' id='txtApartamento' placeholder="número do apartamento que mora">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>Email: <br></label>
                            <input type='email' value="<?php echo $email?>" name='email' id='txtEmail' placeholder="exemplo@email.com">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>Data de Nascimento: <br></label>
                            <input type='date' value="<?php echo $datadenascimento?>" name='datadenascimento' id='txtDataNascimento' placeholder="dia/mês/ano de nascimento">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>Data de Aquisição do Apartamento: <br></label>
                            <input type='date' value="<?php echo $datadeaquisicao?>" name='datadeaquisicao' id='txtDataAquisicao' placeholder="dia/mês/ano de aquisição do apartamento">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>Telefone/Celular: <br></label>
                            <input type='text' value="<?php echo $telefone?>" name='telefone' id='txtTelefone' placeholder="número de telefone fixo ou de celular">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>CPF: <br></label>
                            <input type='number' value="<?php echo $cpf?>" name='cpf' id='txtCpf' placeholder="número do Cadastro de pessoa física">
                        </div><br><br>            


                        <div class="justify-center">
                            <br><br><button onclick="window.history.back()" class="formbutton">Voltar</button>
                            <button class="formbutton">Cadastrar</button>
                        </div>
                    
                    </form>

                </div>
                
            </div><br>

        <?php

            $lista = moradorDAO::buscar();

        ?>
        <div class="container border">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Bloco</th>
                        <th>Apartamento</th>
                        <th>Email</th>
                        <th>Data de nascimento</th>
                        <th>Data de aquisição</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($lista as $morador){
                            echo '<tr>';
                            echo '<td>'.$morador->getNome().'</td>';
                            echo '<td>'.$morador->getBloco().'</td>';
                            echo '<td>'.$morador->getApartamento().'</td>';
                            echo '<td>'.$morador->getEmail().'</td>';
                            echo '<td>'.$morador->getData_nasc().'</td>';
                            echo '<td>'.$morador->getData_aqui().'</td>';
                            echo '<td>'.$morador->getTelefone().'</td>';
                            echo '<td>'.$morador->getCpf().'</td>';
                            echo '<td><a href="cadastroMoradores.php?editar&id='.$morador->getId().'">
                            <button class="btn btn-warning" > Editar </button></a></td>';
                            echo '<td><a href="../Controller/moradorController.php?excluir&id='.$morador->getId().'">
                            <button class="btn btn-danger"> Excluir </button></a></td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table><br/><br/>
        </div>

        </main>

    </body>

</html>

