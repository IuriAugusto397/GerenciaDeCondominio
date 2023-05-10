<!DOCTYPE html>

<hmtl lang="pt-br">

    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Login</title>
    </head>
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
            color: rgb(255, 255, 255);
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

        .category-select {
            width: 98%;
            padding: 5px;
            display: inline-block;
            border: 0;
            border-radius: 10px;
            box-shadow: 0px 1px 0px 0px #ffffff;
            color: rgb(255, 255, 255);
            background-color: rgba(255, 255, 255, 0.1);
        }

        button {
            background-color: rgb(26, 147, 89);
            padding: 7px;
            border-radius: 10px;
            color: black;
            font-weight: bold;
            font-size: 16px;
            position: absolute;
            bottom: 80px;
            border: 2px solid black;
            transition: background-color 0.2s ease-in-out;
            transition: border 0.2s ease-in-out;
            width: 100px;
            
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: -60px
        }

        button:hover {
            background-color: rgb(0, 255, 115);
            border: 2px solid rgb(193, 251, 193);
            color: rgb(0, 0, 0);
            cursor: pointer;
        }

        p {
            color: rgb(255, 255, 255)
        }

        hr {
            margin-top: 130px;
            margin-bottom: -120px;
            border: none;
            border-radius: 10px;
            border-top: 3px solid rgb(255, 255, 255);
        }
    </style>

    <body>

        <main>

            <div class="box">

                <div class="card">

                    <h1>Sistema Gerencial de Condomínios</h1>

                    <form action="../Controller/login.php" method="POST">

                        <div class='label-float'>
                            <label for=usuario>Nome:</label>
                            <input name='login' type='text' id='usuario' placeholder="Insira o nome">
                        </div>

                        <div class='label-float'>
                            <label for=senha>Senha:</label>
                            <input name='senha' type='password' id='senha' placeholder="Insira a senha">
                        </div>

                        <div class="justify-center button-container">
                            <button name="entrar" type="submit">Confirmar</button>
                        </div>

                        <div class="justify-center">
                            <hr>
                        </div>

                        <p style="margin-top: 130px; margin-bottom: -30px; text-align: center;">*Login para uso exclusivo do síndico*</p>

                    </form>

                </div>

            </div>

        </main>

    </body>

</hmtl>