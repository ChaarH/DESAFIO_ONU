<?php

class ContatoModel {

	private $id;
	private $nome;
	private $endereco;

	private $cpf;
	private $genero;
	private $telefone;

	private $faixaEtaria;
	private $aparencia;
	private $situacao;
	private $observacoes;

	public function setId($id) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}

	public function setNome($nome = null) {
		$this->nome = $nome;
	}
	public function getNome() {
		return $this->nome;
	}

	public function setEndereco($endereco = null) {
		$this->endereco = $endereco;
	}
	public function getEndereco() {
		return $this->endereco;
	}

	public function setTelefone($telefone = null) {
		$this->telefone = $telefone;
	}
	public function getTelefone() {
		return $this->telefone;
	}

	public function setCpf($cpf = null) {
		$this->cpf = $cpf;
	}
	public function getCpf() {
		return $this->cpf;
	}

	public function setGenero($genero = null) {
		$this->genero = $genero;
	}
	public function getGenero() {
		return $this->genero;
	}

	public function setFaixaEtaria($faixaEtaria = null) {
		$this->faixaEtaria = $faixaEtaria;
	}
	public function getFaixaEtaria() {
		return $this->faixaEtaria;
	}

	public function setAparencia($aparencia) {
		$this->aparencia = $aparencia;
	}
	public function getAparencia() {
		return $this->aparencia;
	}

	public function setSituacao($situacao) {
		$this->situacao = $situacao;
	}
	public function getSituacao() {
		return $this->situacao;
	}

	public function setObservacoes($observacoes) {
		$this->observacoes = $observacoes;
	}
	public function getObservacoes() {
		return $this->observacoes;
	}
}