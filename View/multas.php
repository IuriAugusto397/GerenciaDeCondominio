<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-notif.css" type="text/css" media="screen" />

    <title>Multas</title>
</head>


<body>
    <main>

        <div class="box">

            <div class="card">
                <h1>Aplicação de multas</h1>

                <div class="label-float">
                    <label for="infractions">Categoria da infração<br></label>
                    <select name="infractions" id="infractions">
                        <option value="Ruidos">Ruídos fora do horário permitido</option>
                        <option value="Obras">Obras que comprometam a segurança</option>
                        <option value="Fachada">Alteração indevida da fachada</option>
                    </select>
                </div>

                <div class="label-float">
                    <label>Descrição da infração: <br></label>
                    <textarea id="message" cols="70" rows="10"></textarea> 
                </div>

                <div class="label-float">
                    <label for="">E-mail do morador a ser multado: </label>
                    <input type="text">
                </div>

                <div class="justify-center">
                    <button onclick="window.history.back()">Voltar</button>
                    <button>Enviar</button>
                </div>

                <div class="justify-center">
                    <hr>
                </div>

            </div>


</body>


</html>