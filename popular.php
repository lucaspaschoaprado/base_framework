<?php
include("valida_navegador.php");
include("conecta.php");
include("verifica_login.php");

	$data = date("Y-m-d");
	
	date_default_timezone_set("Brazil/East");
	$hora = date("H:i:s");
	
	$status = "ATIVO";

	$id_usuario_cadastro = $_SESSION["id_usuario"];
	
	$tipo = "DECRETO";
	
	$lei = '<p><strong>O&nbsp; PRESIDENTE&nbsp; DA&nbsp; C&Acirc;MARA&nbsp; DOS&nbsp; DEPUTADOS,</strong>no exerc&iacute;cio do cargo de &nbsp;<strong>PRESIDENTE &nbsp;DA&nbsp; REP&Uacute;BLICA</strong><strong>&nbsp;</strong>Fa&ccedil;o saber que o Congresso Nacional decreta e eu sanciono a seguinte Lei:&nbsp;</p>
<p>Art. 1<span style="text-decoration: underline;"><sup>o</sup></span><strong>&nbsp;&nbsp;</strong>A&nbsp;<a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13255.htm">Lei n</a><a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13255.htm"><span style="text-decoration: underline;"><sup>o</sup></span>&nbsp;13.255, de 14 janeiro de 2016</a>, passa a vigorar com as seguintes altera&ccedil;&otilde;es:&nbsp;&nbsp;</p>
<blockquote>
<p>&ldquo;<a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13255.htm#art4.">Art. 4</a><a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13255.htm#art4."><span style="text-decoration: underline;"><sup>o</sup></span>&nbsp;&nbsp;</a>Fica autorizada a abertura de cr&eacute;ditos suplementares, restritos aos valores constantes desta Lei, exclu&iacute;das as altera&ccedil;&otilde;es decorrentes de cr&eacute;ditos adicionais abertos ou reabertos, desde que as altera&ccedil;&otilde;es promovidas na programa&ccedil;&atilde;o or&ccedil;ament&aacute;ria sejam compat&iacute;veis com a obten&ccedil;&atilde;o da meta de super&aacute;vit prim&aacute;rio estabelecida para o exerc&iacute;cio de 2016 e sejam observados o disposto no par&aacute;grafo &uacute;nico do art. 8<span style="text-decoration: underline;"><sup>o</sup></span>&nbsp;da LRF e os limites e as condi&ccedil;&otilde;es estabelecidos neste artigo, vedado o cancelamento de valores inclu&iacute;dos ou acrescidos em decorr&ecirc;ncia da aprova&ccedil;&atilde;o de emendas individuais e das emendas coletivas constantes da Se&ccedil;&atilde;o I do Anexo III &agrave; Lei n<span style="text-decoration: underline;"><sup>o</sup></span>&nbsp;13.242, de 30 de dezembro de 2015, para o atendimento de despesas:&nbsp;</p>
<p><a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13255.htm#art4i.">I -&nbsp;</a>em cada subt&iacute;tulo, at&eacute; o limite de 20% (vinte por cento) do respectivo valor, mediante a utiliza&ccedil;&atilde;o de recursos provenientes de:&nbsp;&nbsp;</p>
<p><a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13255.htm#art4ia.">a</a>) anula&ccedil;&atilde;o parcial de dota&ccedil;&otilde;es, limitada a 20% (vinte por cento) do valor do subt&iacute;tulo objeto da anula&ccedil;&atilde;o;</p>
<p>...........................................................................................&nbsp;</p>
<p><a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13255.htm#art4xvii.">XVII&nbsp;</a>- das programa&ccedil;&otilde;es contempladas no Programa de Acelera&ccedil;&atilde;o do Crescimento - PAC, classificadas com o identificador de resultado prim&aacute;rio &ldquo;3&rdquo;, mediante o remanejamento de at&eacute; 20% (vinte por cento) do montante das dota&ccedil;&otilde;es or&ccedil;ament&aacute;rias desse Programa constantes desta Lei;</p>
<p>...........................................................................................&nbsp;</p>
<p><a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13255.htm#art4xxv.">XXV</a>&nbsp;- relativas &agrave; remunera&ccedil;&atilde;o de agentes financeiros, no &acirc;mbito da Unidade Or&ccedil;ament&aacute;ria &ldquo;71.104 - Remunera&ccedil;&atilde;o de Agentes Financeiros - Recursos sob Supervis&atilde;o do Minist&eacute;rio da Fazenda&rdquo;, limitada a 30% (trinta por cento) do subt&iacute;tulo, mediante a utiliza&ccedil;&atilde;o de recursos provenientes de:</p>
<p>...........................................................................................&nbsp;</p>
<p><a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13255.htm#art4xxxii.">XXXII&nbsp;</a>- para recomposi&ccedil;&atilde;o das dota&ccedil;&otilde;es integrantes desta Lei at&eacute; o limite dos valores que constaram do respectivo projeto, mediante a anula&ccedil;&atilde;o de dota&ccedil;&otilde;es or&ccedil;ament&aacute;rias, exclusive oriundas das emendas de que trata o&nbsp;<strong>caput</strong>, e a utiliza&ccedil;&atilde;o do excesso de arrecada&ccedil;&atilde;o de receitas pr&oacute;prias e de receitas vinculadas e do super&aacute;vit financeiro apurado no balan&ccedil;o patrimonial do exerc&iacute;cio de 2015; e&nbsp;&nbsp;</p>
<p><a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13255.htm#art4xxxiii">XXXIII</a>&nbsp;- com ajuda de custo para moradia ou aux&iacute;lio-moradia, mediante a utiliza&ccedil;&atilde;o de recursos provenientes de anula&ccedil;&atilde;o de dota&ccedil;&otilde;es or&ccedil;ament&aacute;rias.</p>
<p>...........................................................................................&nbsp;</p>
<p><a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13255.htm#art4&sect;6.">&sect; 6&ordm;&nbsp;</a>&nbsp;N&atilde;o se aplica a veda&ccedil;&atilde;o de cancelamento, por ato pr&oacute;prio no &acirc;mbito de cada Poder, do Minist&eacute;rio P&uacute;blico da Uni&atilde;o e da Defensoria P&uacute;blica da Uni&atilde;o, de valores inclu&iacute;dos ou acrescidos em decorr&ecirc;ncia da aprova&ccedil;&atilde;o das emendas individuais mencionadas no&nbsp;<strong>caput</strong>, nem os limites percentuais fixados neste artigo, quando cumulativamente:</p>
<p>.................................................................................&rdquo; (NR)&nbsp;<strong>&nbsp;</strong></p>
</blockquote>
<p>Art. 2<span style="text-decoration: underline;"><sup>o</sup></span>&nbsp;&nbsp;O item&nbsp;<a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13255.htm#anexo">I.2.4.1. do Anexo V &agrave; Lei n&ordm; 13.255, de 2016</a>, passa a vigorar com as altera&ccedil;&otilde;es constantes do&nbsp;<a href="http://www.planalto.gov.br/CCIVIL_03/_Ato2015-2018/2016/Lei/L13332.htm#anexo">Anexo a esta Lei</a>.&nbsp;&nbsp;</p>
<p>Par&aacute;grafo &uacute;nico.&nbsp;&nbsp;Com rela&ccedil;&atilde;o &agrave;s altera&ccedil;&otilde;es de que trata o&nbsp;<strong>caput</strong>, os recursos para atender ao exerc&iacute;cio de 2016 ser&atilde;o provenientes de dota&ccedil;&atilde;o or&ccedil;ament&aacute;ria alocada na a&ccedil;&atilde;o or&ccedil;ament&aacute;ria &ldquo;4269 - Pleitos Eleitorais&rdquo;, Grupo de Natureza de Despesa - GND &ldquo;1 - Pessoal e Encargos Sociais&rdquo; da Unidade Or&ccedil;ament&aacute;ria &ldquo;14101 - Tribunal Superior Eleitoral&rdquo;, constante da Lei n<span style="text-decoration: underline;"><sup>o</sup></span>&nbsp;13.255, de 2016.&nbsp;<strong>&nbsp;</strong></p>
<p>Art. 3<span style="text-decoration: underline;"><sup>o</sup></span>&nbsp;&nbsp;Esta Lei entra em vigor na data de sua publica&ccedil;&atilde;o.&nbsp;</p>
<p>Bras&iacute;lia, 1<span style="text-decoration: underline;"><sup>o</sup></span>&nbsp;de setembro de 2016; 195<span style="text-decoration: underline;"><sup>o</sup></span>&nbsp;da Independ&ecirc;ncia e 128<span style="text-decoration: underline;"><sup>o</sup></span>&nbsp;da Rep&uacute;blica.&nbsp;</p>
<p>RODRIGO MAIA<br /><em>Dyogo Henrique de Oliveira</em>&nbsp;</p>
<p><span style="color: #ff0000;">Este texto n&atilde;o substitui o publicado no DOU de 2.9.2016</span></p>';
	
	$i = 500;
	while($i < 800){
		$i = $i + 1;

	$ementa = $i . " - Dispõe sobre a substituição de Ministros de Estado, do Advogado-Geral da União e do Presidente do Banco Central do Brasil.";
	
	$numero = $i . ".00" . $i;
	
	$id_usuario = $_SESSION["id_usuario"];
			
	$lsql = "INSERT INTO leis (tipo, numero, data, ementa, lei, id_usuario_cadastro, data_cadastro, hora_cadastro) VALUES ('$tipo', '$numero', '$data', '$ementa', '$lei', '$id_usuario_cadastro', '$data', '$hora')";
	$lquery = mysql_query($lsql);
	
	}

	if( $lquery ){
		echo("<script language='JavaScript'>alert('TESTE REALIZADO COM SUCESSO!'); location='leis.php';</script>");
	} else {
		echo mysql_error();
	}
?>