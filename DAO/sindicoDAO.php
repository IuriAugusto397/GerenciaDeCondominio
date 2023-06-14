<?php
include("connection.php");
    
    if(isset($_POST['submit'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = "select * from sindico where login = '$login' and senha = '$senha'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            $_SESSION['user_login'] = $row['login'];
            header("Location:../View/telademenudefuncionalidades.php");
        }
        else{
            echo '<script>
                window.location.href = "../View/loginpage.php";
                alert("Acesso falhou. Login e/ou senha incorretos!")
            </script>';
        }
    }

?>