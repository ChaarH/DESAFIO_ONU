<?php
require_once 'cfg/cfg.php';
require_once 'Model/ContatoModel.php';
require_once 'lib/function.php';
	
class ContatoDao {

	public function salvar($nome,$endereco,$cpf,$genero,$telefone,$faixaEtaria,$aparencia,$chk1,$chk2,$chk3,$chk4,$chk5,$chk6,$chk7,$outros,$nomeAgressor,$aparenciaAgressor,$lugar) {

		$bd = new Banco();
		$pdo = $bd->abreConexao();

		$fn = new Functions();

		$sql = $pdo->prepare("INSERT INTO bd_ctrl_contato (TXT_NOME,TXT_ENDERECO,INT_CPF,TXT_GENERO,INT_TELEFONE,FAIXA_ETARIA,TXT_APARENCIA,TXT_CHK_01,TXT_CHK_02,TXT_CHK_03,TXT_CHK_04,TXT_CHK_05,TXT_CHK_06,TXT_CHK_07,TXT_OUTROS,TXT_NOME_AGRESSOR,TXT_APARENCIA_AGRESSOR,TXT_LUGAR) VALUES (:nome,:endereco,:cpf,:genero,:telefone,:faixaEtaria,:aparencia,:chk1,:chk2,:chk3,:chk4,:chk5,:chk6,:chk7,:outros,:nomeAgressor,:aparenciaAgressor,:lugar)");

		$sql->bindValue(':nome', $fn->toUpper($nome));
		$sql->bindValue(':endereco', $fn->toUpper($endereco));
		$sql->bindValue(':cpf', $cpf);
		$sql->bindValue(':genero', $fn->toUpper($genero));
		$sql->bindValue(':telefone', $telefone);
		$sql->bindValue(':faixaEtaria', $fn->toUpper($faixaEtaria));
		$sql->bindValue(':aparencia', $fn->toUpper($aparencia));
		$sql->bindValue(':chk1', $fn->toUpper($chk1));
		$sql->bindValue(':chk2', $fn->toUpper($chk2));
		$sql->bindValue(':chk3', $fn->toUpper($chk3));
		$sql->bindValue(':chk4', $fn->toUpper($chk4));
		$sql->bindValue(':chk5', $fn->toUpper($chk5));
		$sql->bindValue(':chk6', $fn->toUpper($chk6));
		$sql->bindValue(':chk7', $fn->toUpper($chk7));
		$sql->bindValue(':outros', $fn->toUpper($outros));
		$sql->bindValue(':nomeAgressor', $fn->toUpper($nomeAgressor));
		$sql->bindValue(':aparenciaAgressor', $fn->toUpper($aparenciaAgressor));
        $sql->bindValue(':lugar', $fn->toUpper($lugar));

		$sql->execute();
	}

	public function listar() {}
}