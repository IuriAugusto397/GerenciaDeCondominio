<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de funcionalidades</title>
    <style>
        div{
            background-color: rgb(50, 50, 40);
            text-align: center;
            position: absolute;
            width: 800px;
            height: 500px;
            top: 50%;
            left: 50%;
            margin-left: -400px;
            margin-top: -250px;
        }
        h1,h3{
            color: white;
            text-align: center;
        }
        button{
            background-color: green;
            padding:7px;
            border-radius: 10px;
            color:black;
            font-weight: bold;
            font-size: 16px;
            margin-top: 8px;
            margin-bottom: 20px;
        }
        button:hover{
            background-color: chartreuse;
            cursor: pointer;
        }
        .absolute {
            font-size: 10px;
            background-color: red;
            height: 30px;
            width: 60px;
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .absolute:hover{
            background-color: purple;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <br/><h1>Menu de funcionalidades</h1>
        <h3>Bem-vindo senhor(a) síndico(a)</h3>
        <a href="cadastroMoradores.php"><button>Cadastrar novo morador</button></a><br/><br/>
        <a href="multas.php"><button>Aplicar/Notificar multa</button></a><br/><br/>
        <a href="telanotif.php"><button>Fazer notificações gerais</button></a><br/><br/>
        <a href="trocalogin.php"><button>Alterar login e senha</button></a><button class="absolute" id="logout">Logout</button>
    </div>
</body>
</html>