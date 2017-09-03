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

}

 ?>