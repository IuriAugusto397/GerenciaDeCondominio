<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Menu de funcionalidades</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400&family=Montserrat:wght@200;300&display=swap');
        *{
            margin:0;
            padding:0;
            font-family:'Inter', sans-serif;
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
        h1,h3{
            color: white;
            text-align: center;
        }
        .label-float button{
            width: 98%;
            padding:5px 5px;
            display:inline-block;
            
        }
        .label-float{
            color:rgb(254, 254, 254);
            position:relative;
            padding-top: 13px;
            margin-top: 5%;
            margin-bottom:5%;
        }
        button{
            background-color: rgb(26, 147, 89);
            padding:7px;
            border-radius: 10px;
            color:black;
            font-weight: bold;
            font-size: 16px;
            border: 2px solid black;
            transition: background-color 0.2s ease-in-out;
            transition: border 0.2s ease-in-out;
        }
        button:hover{
            background-color: rgb(0, 255, 115);
            border: 2px solid rgb(193, 251, 193);
            color:rgb(0, 0, 0);
            cursor: pointer;
        }
        .absolute {
            font-size: 14px;
            background-color: red;
            height: 40px;
            width: 80px;
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
    
    <main>

        <div class="box">

            <div class="card">
                <br/><h1>Menu de funcionalidades</h1>
                <h3>Bem-vindo senhor(a) síndico(a)</h3><br><br>
                <div class='label-float'>
                    <a href="cadastroMoradores.php"><button>Cadastrar novo morador</button></a><br/><br/><br/><br/>
                </div>
                <div class='label-float'>
                    <a href="multas.php"><button>Aplicar/Notificar multa</button></a><br/><br/><br/><br/>
                </div>
                <div class='label-float'>
                    <a href="telanotif.php"><button>Fazer notificações gerais</button></a><br/><br/><br/><br/>
                </div>
                <div class='label-float'>
                    <a href="trocalogin.php"><button>Alterar login e senha</button></a>
                </div>
                <button class="absolute" id="logout">Logout</button>
            </div>

        </div>

    </main>
    
</body>
</html>