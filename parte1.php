<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="parte1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="background">
        <header id="teste1">
                <div class="center">
                    <img src="wine.jpg" width="50" height="70">
                    <a>WineClub</a>
                </div>
                <div class="derecha">
                    <input type="register" name="register" value="Registre-se" class="register"><br />
                </div>
            </header>

    <div class="container">

        <h1 >Bem-vindo</h1>
        <h4>Entre ou registre-se para ter acesso a nossa carta 
            de vinhos exclusivos </h4>

            <form action="login.php" method= "Post">
                <div class="form-input">
                  <i class="fa fa-user fa-2x cust" aria-hidden="true"></i>
                  <input type="text" name="email" value="<?php if(isset($_COOKIE["login"])){echo $_COOKIE["login"];} else {echo "";} ?>" placeholder="   Usuário"><br />
                  <i class="fa fa-lock fa-2x cust" aria-hidden="true"></i>
                  <input type="password" name="password" value="<?php if(isset($_COOKIE["senha"])){echo $_COOKIE["senha"];} else {echo "";} ?>" placeholder="   Senha"><br />
                  <div class="checkbox">
                      <input type="checkbox" id="check" name="check" <?php if(isset($_COOKIE["manterLogado"])){echo $_COOKIE["manterLogado"];}?>>
                      <label for="check"></label>
                      <a>Lembrar acesso</a><br /><br />
                  </div>
                  <a href="#">Esqueci minha senha</a><br /><br />
                  <input type="submit" name="submit" id="submit" value="Login"><br />
                </div>
            </form>

    </div>
    
</body>

</html>