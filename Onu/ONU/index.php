    <html>
    <head>
        <title> UNODC - Administração </title>
        <meta charset="utf-8">
        <link rel="icon" href="photos/unodc-4.png" type="image/x-icon"/>
        <link href="css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <center>
            <img src="photos/unodc-2-2.png" id="main-logo">
        </center><br>
        <div id="login">
        <h2>Login</h2><hr>
            <form method="POST" action="conexao.php">
                <table id="login-form">
                    <tr>
                        <td align="right">Usuario: </td><td> <input type="text" name="usuario"></td>
                    </tr>
                    <tr>
                        <td align="right">Senha:   </td><td> <input type="password" name="senha">  </td>                
                    </tr><tr><td><br></td></tr>
                    <tr>
                        <td>
                        </td>
                        <td align="right"><input type="submit" value="Entrar"></td>
                    </tr>
                </table>
                <?php                        
                    if(@$_GET['error']=="01"){
                        echo "<p style='color:red; font-size: 0.7em; text-align: center; '>Usuario ou senha incorretos!</p>";
                    }
                ?>
            </form>
        </div><br><br>
        <center>
            <img src="photos/ligue-100.png" id="ligue">
            <img src="photos/disque-180.jpeg" id="ligue">
        </center><br>
    </body>
</html>