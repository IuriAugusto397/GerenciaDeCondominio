<?php
    $action = "inserir";
    include_once '../DAO/moradorDAO.php';
    include_once '../Model/moradorModel.php';

    $nome = "";
    $bloco = "";
    $aparatamento = "";
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
        <link rel="stylesheet" href="style-notif.css" type="text/css" media="screen" />
        <title>Cadastro de novos moradores</title>
    </head>

    <body>

        <main>

            <div class="box">

                <div class="card">
                    
                    <h1>Cadastro de novos moradores</h1>
                    
                    <form action="../Controller/moradorController.php?<?php echo $action ?>" method="POST">
                        
                        <div class='label-float'>
                            <label for=usuario>Nome Completo: <br></label>
                            <input type='text' name='nome' id='txtNome' placeholder="seu nome e sobrenome">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>Bloco: <br></label>
                            <input type='text' name='bloco' id='txtBloco' placeholder="número do bloco/prédio que mora">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>Apartamento: <br></label>
                            <input type='text' name='apartamento' id='txtApartamento' placeholder="número do apartamento que mora">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>Email: <br></label>
                            <input type='email' name='email' id='txtEmail' placeholder="exemplo@email.com">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>Data de Nascimento: <br></label>
                            <input type='date' name='datadenascimento' id='txtDataNascimento' placeholder="dia/mês/ano de nascimento">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>Data de Aquisição do Apartamento: <br></label>
                            <input type='date' name='datadeaquisicao' id='txtDataAquisicao' placeholder="dia/mês/ano de aquisição do apartamento">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>Telefone/Celular: <br></label>
                            <input type='text' name='telefone' id='txtTelefone' placeholder="número de telefone fixo ou de celular">
                        </div>

                        <div class='label-float'>
                            <label for=usuario>CPF: <br></label>
                            <input type='number' name='cpf' id='txtCpf' placeholder="número do Cadastro de pessoa física">
                        </div><br/><br/>               


                        <div class="justify-center">
                            <button onclick="window.history.back()">Voltar</button>
                            <button>Cadastrar</button>
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

