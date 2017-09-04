<?php
class Permissoes{

	//Método para exibir alertas "modal" na checagem dos níveis de permissão.
	public static function nivelPermissaoAdministrador(){
		
		$session_nivel_permissao_usuario = $_SESSION["session_nivel_permissao_usuario"];
		
		if ($session_nivel_permissao_usuario > 1) {
			
			$alerta = Alertas::permissaoAlert();

			//Exibe o alerta e interrompe a execução do restante da página.
			exit;

		}
	
	}

	//Método para exibir alertas "modal" na checagem dos níveis de permissão.
	public static function nivelPermissaoIntermediario(){
		
		$session_nivel_permissao_usuario = $_SESSION["session_nivel_permissao_usuario"];
		
		if ($session_nivel_permissao_usuario > 2) {
			
			$alerta = Alertas::permissaoAlert();

			//Exibe o alerta e interrompe a execução do restante da página.
			exit;

		}
	
	}

	//Método para exibir alertas "modal" na checagem dos níveis de permissão.
	public static function nivelPermissaoBasico(){
		
		$session_nivel_permissao_usuario = $_SESSION["session_nivel_permissao_usuario"];
		
		if ($session_nivel_permissao_usuario > 3) {
			
			$alerta = Alertas::permissaoAlert();

			//Exibe o alerta e interrompe a execução do restante da página.
			exit;

		}
	
	}

}

 ?>