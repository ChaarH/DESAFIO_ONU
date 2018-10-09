<?php
require_once 'cfg/cfg.php';
require_once 'lib/function.php';

$bd = new Banco();
$pdo = $bd->abreConexao();

$sql = $pdo->prepare("SELECT * FROM bd_ctrl_contato");
$sql->execute();

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
    <h2>Consultar denuncias</h2>
	<center><br><br><div class="bloco-search">
		<form action="" method="POST">
			<input type="text" name="txtSearch" placeholder="Procurar...">
			<input type="submit">	<br><br><br>
		</form>
	</div></center>
	<?php
	$fn = new Functions();

	$keyWord = strtoupper($fn->post('txtSearch'));

	$param = "SELECT * FROM bd_ctrl_contato WHERE ";

	$arr = array("TXT_NOME","TXT_ENDERECO","INT_CPF","TXT_GENERO","INT_TELEFONE","FAIXA_ETARIA","TXT_APARENCIA","TXT_CHK_01","TXT_CHK_02","TXT_CHK_03","TXT_CHK_04","TXT_CHK_05","TXT_CHK_06","TXT_CHK_07","TXT_NOME_AGRESSOR","TXT_APARENCIA_AGRESSOR","TXT_LUGAR");
	$count = count($arr)-1;

	for ($i=0; $i <= $count ; $i++) { 

		if($arr[$i] == "TXT_LUGAR") {
			$param .= $arr[$i] . " LIKE '%".$keyWord."%' ";
		} else {
			$param .= $arr[$i] . " LIKE '%".$keyWord."%' OR ";
		}

	}

	$sql = $pdo->prepare($param);
	$sql->bindValue(':keyWord', $keyWord);
	$sql->execute();

	if($sql->rowCount() > 0) {
	?>
	<table style="width:100%">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Endereço</th>
			<th>Cpf</th>
			<th>Gênero</th>
			<th>Telefone</th>
			<th>Faixa Etária</th>
			<th>Aparência</th>
			<th>Situações</th>
			<th>Nome Agressor</th>
			<th>Aparência Agressor</th>
			<th>Lugar Agressor</th>
		</tr>
		<?php

		foreach ($sql as $dados) {
		?>

		<tr>
			<td><?php echo $dados['ID'] ?></td>
			<td><?php echo $dados['TXT_NOME'] ?></td>
			<td><?php echo $dados['TXT_ENDERECO'] ?></td>
			<td><?php echo $dados['INT_CPF'] ?></td>
			<td><?php echo $dados['TXT_GENERO'] ?></td>
			<td><?php echo $dados['INT_TELEFONE'] ?></td>
			<td><?php echo $dados['FAIXA_ETARIA'] ?></td>
			<td><?php echo $dados['TXT_APARENCIA'] ?></td>
			<td><?php echo $dados['TXT_CHK_01'] .','. $dados['TXT_CHK_02'].','.$dados['TXT_CHK_03'].','.$dados['TXT_CHK_04'].','.$dados['TXT_CHK_05'].','.$dados['TXT_CHK_06'].','.$dados['TXT_CHK_07'].','.$dados['TXT_OUTROS'] ?></td>
			<td><?php echo $dados['TXT_NOME_AGRESSOR'] ?></td>
			<td><?php echo $dados['TXT_APARENCIA_AGRESSOR'] ?></td>
			<td><?php echo $dados['TXT_LUGAR'] ?></td>
		</tr>

		<?php
		}

	} else {
		echo '<h2>Digite a informação a ser pesquisada.</h2>';
	}
	?>
	</table>

	<style type="text/css">

        th{
            background: #5b92e5;
        }    
        
	th,tr,td {
        font-size: 0.9em;
		border: 1px solid #000;
	}

	.bloco-search {
		margin: 10px;
	}

	</style>
    <br><br><br>
<center>
    <form action="menu.php">
        <input type="submit" value="Voltar">
    </form>
</center>
</body>
</html>




