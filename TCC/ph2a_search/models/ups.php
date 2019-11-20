<?php
	// Arquivo post.php

	class Post{
		private $nome;
		private $cpf;
		private $telefone;
		private $email;
		private $endereco;
		private $area_atuacao;
		private $senha;
		
		public function __construct($nome, 
			$cpf, $telefone, $email, $endereco, $area_atuacao, $senha ){
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->telefone = $telefone;
			$this->email = $email;
			$this->endereco = $endereco;
			$this->area_atuacao = $area_atuacao;
			$this->senha = $senha;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getCpf(){
			return $this->Cpf;
		}
		public function setCpf($Cpf){
			$this->Cpf = $Cpf;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getEndereco($endereco){
			return $this->endereco;
		}
		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}
		public function getArea_atuacao($area_atuacao){
			return $this->area_atuacao;
		}
		public function setArea_atuacao($area_atuacao){
			$this->area_atuacao = $area_atuacao;
		}
		public function getSenha($senha){
			return $this->senha;
		}
		public function setSenha($senha){
			$this->senha = $senha;

		public static function all(){
			$bd = Db::getInstance();
			$list = [];
			$req = $bd->query('SELECT * FROM ups');
			foreach ($req->fetchAll() as $ups) {
				$list[] = new Ups(	$ups['nome'],
									$ups['cpf]'],
									$ups['telefone']
									$ups['email'],
									$ups['endereco'],
									$ups['area_atuacao']
									$ups['senha']); 
			}
			return $list;
		}

		public static function insert($ups){
			$bd = Db::getInstance();
			$req = $bd->prepare("INSERT INTO 
							ups(nome, cpf, telefone, email, endereco, area_atuacao, senha)
							VALUES(:nome, :cpf, :telefone, :email, :endereco, :area_atuacao, :senha)");
			$req->execute(array("nome" => $ups->nome,
							"cpf" => $ups->cpf, "telefone" => $ups->telefone,
							"email" => $ups->email, "endereco" => $ups->endereco,
							"area_atuacao" => $ups->area_atuacao, "senha" => $ups->senha,
							  ));
		}
		public static function delete($cpf){
			$bd = Db::getInstance();
			$cpf = intval($cpf);
			$req = $bd->prepare("DELETE FROM ups
								 WHERE cpf=:cpf");
			$req->execute(array("cpf"=>$cpf));
		}

		public static function update($ups){
			$bd = Db::getInstance();
			$req = $bd->prepare("UPDATE ups SET autor = :autor, conteudo = :conteudo WHERE id= :id");
			$req->execute(array("nome" => $ups->nome, "cpf" => $ups->cpf, "telefone" => $ups->telefone, "email" => $ups->email, "endereco" => $ups->endereco, "area_atuacao" => $ups->area_atuacao, "senha" => $ups->senha));
		}

	}
?>