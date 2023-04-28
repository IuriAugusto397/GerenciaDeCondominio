<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-notif.css" type="text/css" media="screen"/>

    <title>Alterar login e senha</title>
</head>

<body>
    
    <main>

        <div class="box">

            <div class="card">
                <h1>Alterar login e senha</h1>

                <form>

                    <div class='label-float'>
                        <label for=usuario>Novo login: <br/><br/></label>
                        <input nome='novologin' type='text' id='novousuario' placeholder="insira o novo login">
                    </div>

                    <div class='label-float'>
                        <label for=usuario>Nova senha: <br/><br/></label>
                        <input nome='novasenha' type='password' id='novasenha' placeholder="insira a nova senha">
                    </div><br/><br/>

                    <br><br><div class="justify-center">
                        <button onclick="window.history.back()">Voltar</button>
                        <button name="salvar" type="submit">Salvar mudanças</button>
                    </div>
                
                </form>
            
            </div>
        
        </div>

    </main>

</body>