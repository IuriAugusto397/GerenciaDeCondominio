<!DOCTYPE html>

<hmtl lang="pt-br">

    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

        <title>Login</title>
    </head>


    <body>

        <main>

            <div class="box">

                <div class="card">
                    
                    <h1>Sistema Gerencial de Condomínios</h1>
                    
                    <form action="../Controller/login.php" method="POST">
                        
                        <div class='label-float'>
                            <label for=usuario>Nome:</label>
                            <input name='login' type='text' id='usuario' placeholder="nome do sindico">
                        </div>

                        <div class='label-float'>
                            <label for=senha>Senha:</label>
                            <input name='senha' type='password' id='senha' placeholder="senha do sindico">
                        </div>

                        <div class="justify-center">
                            <button name="entrar" type="submit">Confirmar</button>
                        </div>

                        <div class="justify-center">
                            <hr>
                        </div>

                        <p>*Login para uso exclusivo do síndico*</p>
                    
                    </form>

                </div>
            
            </div>

        </main>

    </body>

</hmtl>