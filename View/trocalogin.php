<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar login e senha</title>
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

            button {
                background-color: rgb(26, 147, 89);
                padding: 7px;
                border-radius: 10px;
                color: black;
                font-weight: bold;
                font-size: 16px;
                height: 40px;
                bottom: 80px;
                border: 2px solid black;
                transition: background-color 0.2s ease-in-out;
                transition: border 0.2s ease-in-out;
            }

            .formbutton-right {
                float: right;
                margin-top: -70px;
                width: 170px;
            }

            .formbutton-left {
                float: left;
                margin-top: -70px;
                width: 80px;
            }

            .formbutton:hover {
                background-color: rgb(0, 255, 115);
                border: 2px solid rgb(193, 251, 193);
                color: rgb(0, 0, 0);
                cursor: pointer;
            }

            hr {
                border: none;
                border-radius: 10px;
                border-top: 3px solid rgb(255, 255, 255);
                opacity:1;
            }
        </style>
    </head>

    <body>

        <main>

            <div class="box">

                <div class="card">
                
                    <h1>Alterar login e senha</h1>

                    <form>

                        <div class='label-float'>
                            <label for="novologin">Novo login: <br /><br /></label>
                            <input type="text" name="novologin" id="novologin" placeholder="Insira o novo login">
                        </div>

                        <div class='label-float'>
                            <label for="novasenha">Nova senha: <br /><br /></label>
                            <input type="password" nome="novasenha" id="novasenha" placeholder="Insira a nova senha">
                        </div><br><br><br><br>

                        <div class="justify-center">
                            <button class="formbutton formbutton-right" type="submit">Salvar mudanças</button>
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