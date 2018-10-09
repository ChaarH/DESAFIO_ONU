<?php
require_once 'Dao/ContatoDao.php';
require_once 'Model/ContatoModel.php';
require_once 'lib/function.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title> UNODC - Administração </title>
    <meta charset="utf-8">
    <link rel="icon" href="photos/unodc-4.png" type="image/x-icon"/>
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>

<h2>Formulário de denúncia</h2><br><hr><br>

<center><form action="menu.php"><input type="submit" value="Voltar"></form></center><br><hr><br><br>
<div id="bloco-cadastros">

	<form action="" method="POST">
		
        <b>Informações da vitima<br><br><br></b>
        
		Nome <img src="photos/info.png" id="info" title="Nome da Vítima."><br>
		<input type="text" name="txtNome" size="100"><br><br>

		Endereço <img src="photos/info.png" id="info" title="Onde ocorreu a violação?"><br>
		<input type="text" name="txtEndereco" size="100"><br><br>

		CPF <img src="photos/info.png" id="info" title="Opcional"><br>
		<input type="text" name="txtCpf" size="100" placeholder="000.000.000-00"><br><br>

		Gênero<br>
		<select name="txtGenero">
			<option value="">Selecionar</option>
			<option value="Masculino">Masculino</option>
			<option value="Feminino">Feminino</option>
			<option value="Outros">Outros</option>
		</select><br><br>

		Telefone<br>
		<input type="text" name="txtTelefone" size="30" placeholder="(00)00000-0000" maxlength="11"><br><br>

		Faixa Etária:<br>
        <select name="txtFaixaEtaria">
            <option>Selecionar</option>
            <option value="0-10">0-10</option>
            <option value="11-20">11-20</option>
            <option value="21-30">21-30</option>
            <option value="31-40">31-40</option>
            <option value="Mais de 40">Mais de 40 anos</option>
        </select><br><br>

		Aparência <img src="photos/info.png" id="info" title="Como a pessoa se parece?"><br>
		<textarea name="txtAparencia" rows="5" cols="100"></textarea><br><br>

		Situação:<br><br>
        <table>
        <td><input type="checkbox" name="txtChk1" value="Carcere Privado"></td><td>Cárcere Privado<br><br></td>
        <td><input type="checkbox" name="txtChk2" value="Exploracao Sexual"></td><td> Exploração Sexual<br><br></td>
        <td><input type="checkbox" name="txtChk3" value="Violencia Domestica"></td><td> Violência Doméstica<br><br></td>
        <td><input type="checkbox" name="txtChk4" value="Trafico de Pessoas"></td><td> Tráfico de Pessoas<br><br></td>
		<td><input type="checkbox" name="txtChk5" value="Trabalho Escravo"></td><td> Trabalho Escravo<br><br></td>
        <td><input type="checkbox" name="txtChk6" value="Documentos Retidos"></td><td> Documentos Retidos<br><br></td>
        <td><input type="checkbox" name="txtChk7" value="Saude Debilitada"></td><td> Saúde Debilitada<br><br></td>
        </table>
        <br>
		Outros <input type="text" name="txtOutros" size="25"><br><br>
        <hr><br>
        <b>Informações do agressor/autor:</b><br><br>
        
        Nome<br>
        <input type="text" name="txtNomeAgressor" size="50"><br><br>
        
        Aparência<br>
        <textarea name="txtAparenciaAgressor" rows="5" cols="100"></textarea><br><br>
        
        Lugar<br>
        <input type="text" name="txtLugarAgressor" placeholder="Endereço ou ponto de referência" size="100"><br><br>
        
        

		<hr>

		<input type="submit" value="Enviar">
	</form><br>
    <form action="menu.php"><input type="submit" value="Voltar"></form>
    
	<?php

	$objDao = new ContatoDao();
	$objModel = new ContatoModel();

	$fn = new Functions();

	$nome = $fn->post('txtNome');
    $endereco = $fn->post('txtEndereco');
    $cpf = $fn->post('txtCpf');
    $genero = $fn->post('txtGenero');
    $telefone = $fn->post('txtTelefone');
    $faixaEtaria = $fn->post('txtFaixaEtaria');
    $aparencia = $fn->post('txtAparencia');
    $chk1 = $fn->post('txtChk1');
    $chk2 = $fn->post('txtChk2');
    $chk3 = $fn->post('txtChk3');
    $chk4 = $fn->post('txtChk4');
    $chk5 = $fn->post('txtChk5');
    $chk6 = $fn->post('txtChk6');
    $chk7 = $fn->post('txtChk7');
    $outros = $fn->post('txtOutros');
    $nomeAgressor = $fn->post('txtNomeAgressor');
    $aparenciaAgressor = $fn->post('txtAparenciaAgressor');
    $lugar = $fn->post('txtLugarAgressor');
    
	$objDao->salvar($nome,$endereco,$cpf,$genero,$telefone,$faixaEtaria,$aparencia,$chk1,$chk2,$chk3,$chk4,$chk5,$chk6,$chk7,$outros,$nomeAgressor,$aparenciaAgressor,$lugar);

	?>
</div>
<br><br><br>    
<center>
    <img src="photos/ligue-100.png" id="ligue">
    <img src="photos/disque-180.jpeg" id="ligue">
</center><br>
<br><br><br>
</body>
</html>