<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
$nivel_necessario = 2;
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
  // Destrói a sessão por segurança
  session_destroy();
  // Redireciona o visitante de volta pro login
  header("Location: index.php"); exit;
}
?>

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
            <h2>Menu</h2><hr><br>
            <center>
                <a href="sistema.php"><div id="btn-menu">Registrar denuncia</div></a>
                <a href="listar.php"><div id="btn-menu">Consultar denuncias</div></a><br>
                <?php
                    if($_SESSION['UsuarioNivel'] == 3){
                        echo "<a href='#'><div id='btn-menu'>Adicionar usuarios</div></a>";      
                    }
                ?>
                <a href="#"><div id="btn-menu">Alterar perfil</div></a>
                <a href="logout.php"><div id="btn-menu">Sair</div></a><br>
            </center>
            <br>
        </div><br><br>
        <center>
            <img src="photos/ligue-100.png" id="ligue">
            <img src="photos/disque-180.jpeg" id="ligue">
        </center><br>
    </body>
</html>