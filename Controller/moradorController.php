<?php 
include_once '../Model/moradorModel.php';
include_once '../DAO/moradorDAO.php';

    if(isset($_REQUEST['inserir'])){   
        
        $nome = $_POST['nome'];
        $bloco = $_POST['bloco'];
        $apartamento = $_POST['apatamento'];
        $email = $_POST['email'];
        $datadenasc = $_POST['datadenascimento'];
        $datadeaqui = $_POST['datadeaquisicao'];
        $telefone = $_POST['telefone'];
        $cpf = $_POST['cpf'];

        $morador = new Morador($nome, $bloco, $apartamento, $email, $datadenasc, $datadeaqui, $telefone, $cpf);

        echo $morador->getNome().'    '.$morador->getBloco().'     '.$morador->getApartamento().'   '.$morador->getEmail()
        .'   '.$morador->getData_nasc().'   '.$morador->getData_aqui().'   '.$morador->getTelefone().'   '.$morador->getCpf();

        MoradorDAO::inserir($morador);

        header("Location: ../View/cadastroMoradores.php");
        
    }

    if(isset($_REQUEST['editar'])){
        $morador = new Morador();
        $morador->setNome($_POST['nome']);
        $morador->setBloco($_POST['bloco']);
        $morador->setApartamento($_POST['apartamento']);
        $morador->setEmail($_POST['email']);
        $morador->setData_nasc($_POST['datadenascimento']);
        $morador->setData_aqui($_POST['datadeaquisicao']);
        $morador->setTelefone($_POST['telefone']);
        $morador->setCpf($_POST['cpf']);
        $morador->setId($_GET['id']);
        MoradorDAO::editar($morador);

        header("Location: ../View/cadastroMoradores.php");
    
    }

    if(isset($_REQUEST['excluir'])){

        $id = $_GET['id'];
        $morador = MoradorDAO::buscarPorId($id);
        echo '<br><br><hr>'
            .'<h3> Quer mesmo excluir o Morador '.$morador->getNome(). '?</h3>';
        echo '<a href="?ConfirmaExcluir&id='.$id.'">'
            .'<button> Sim </button></a>';
        echo '<a href="../view/cadastroMoradores.php"><button> Não </button></a>'
            .'<br><br><hr>';
    
    }

    if(isset($_REQUEST['ConfirmaExcluir'])){

        $id = $_GET['id'];
        MoradorDAO::excluir($id);

        header("Location: ../View/cadastroMoradores.php");
    }


?>