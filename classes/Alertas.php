<?php 

class Alertas{

	//Método para exibir alertas "modal" ao fim de cada operação.
	public static function usuarioCadastroAlert(){

		//echo("<script language='JavaScript'>alert('Informações carregadas com sucesso!'); location='index.php';</script>");
		echo "<script>$('#usuarioCadastroAlert').modal('show')</script>";
	
	}

	public static function usuarioUpdateAlert(){

		//echo("<script language='JavaScript'>alert('Informações carregadas com sucesso!'); location='index.php';</script>");
		echo "<script>$('#usuarioUpdateAlert').modal('show')</script>";
	
	}

	public static function usuarioDeleteAlert(){

		//echo("<script language='JavaScript'>alert('Informações carregadas com sucesso!'); location='index.php';</script>");
		echo "<script>$('#usuarioDeleteAlert').modal('show');</script>";
	
	}

}

 ?>