<?php 

class Alertas{

	//Método para exibir alertas "modal" ao fim de cada operação.
	public static function usuarioCadastroAlert(){

		echo "<script>$('#usuarioCadastroAlert').modal('show')</script>";
	
	}

	public static function usuarioUpdateAlert(){

		echo "<script>$('#usuarioUpdateAlert').modal('show')</script>";
	
	}

	public static function usuarioDeleteAlert(){

		echo "<script>$('#usuarioDeleteAlert').modal('show');</script>";
	
	}

	public static function usuarioErroAlert(){

		echo "<script>$('#usuarioErroAlert').modal('show');</script>";
	
	}

	public static function loginFailAlert(){

		echo "<script>$('#loginFailAlert').modal('show');</script>";

		//Exibe o alerta e interrompe a execução do restante da página.
		exit;	
	}

	public static function acessoNegadoAlert(){

		echo "<script>$('#acessoNegadoAlert').modal('show');</script>";
		
		//Exibe o alerta e interrompe a execução do restante da página.
		exit;
	}

	public static function permissaoAlert(){

		echo "<script>$('#permissaoAlert').modal('show');</script>";
		
	}

}

 ?>