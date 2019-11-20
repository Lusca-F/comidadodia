<?php
	//Arquivo: posts_controller.php
	
	class UPSController{

		public function show(){
			$ups = Usp::all();
			require_once("views/ups/insert.php");
			require_once("views/ups/show.php");
		}
		public function insert(){
			ups::insert(new Ups(0,
						$_POST["nome"],
						$_POST["cpf"],
						$_POST["telefone"],
						$_POST["email"],
						$_POST["endereco"],
						$_POST["area_atuacao"],
						$_POST["senha"],
						));
			$ups = Ups::all();
			require_once("views/ups/insert.php");
			require_once("views/ups/show.php");
		}
		public function delete(){
			ups::delete($_GET["cpf"]);
			$ups = Ups::all();
			require_once("views/ups/insert.php");
			require_once("views/ups/show.php");
		}

		public function update(){
			if(isset($_POST["cpf"])){
				Ups::update(new Ups($_POST["nome"], $_POST["cpf"], $_POST["telefone"], $_POST["email"], $_POST["endereco"], $_POST["area_atuacao"], $_POST["senha"]));

				$ups = Ups::all();
				require_once("views/ups/insert.php");
				require_once("views/ups/show.php");
			} else{
				$ups=new Ups($_GET["cpf"], "", "");
				require_once("views/ups/update.php");
			}
		}

	}
?>