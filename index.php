  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br" dir="ltr">
<head>
<link rel="icon" href="imagens/favicon.ico" />
<style type="text/css">
@import url("css/estilo.css");
</style>
	
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gregeo - UnB</title>
<meta name="description" content="Grupo Espeleológico da Geologia da Universidade de Bras&iacute;lia" />
<meta name="keywords" content="bambui, paranoa, espeleologia, caverna, caving, carste, sistema c&aacute;rstico, universidade de bras&iacute;lia, unb, gregeo, geologia, biologia, morcego, subterr&acirc;neo, cavidade subterrânea, buraco, dolina, gruta, lapa, espeleo, speleo" />

	<!-- CSS do validador do email -->
    <link href="css/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="css/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    <link href="css/SpryValidationSelect.css" rel="stylesheet" type="text/css" />

<!-- Css do formulario do email -->
    <link rel="stylesheet" href="css/estilomail.css" type="text/css" />
    
</head>
<body>
<div id="tudo">
<div id="cabeca">
<div id="cabeca1">
</div>
<div id="cabeca2">
<p>Grupo Espeleológico da Geologia da Universidade de Brasília <a href="imagens/logounb.jpg" title="Logotipo da Universidade de Brasília"><img src="imagens/peq/logounb.jpg" title="UnB" alt="logotipo" /></a>   <a href="imagens/logotipo.jpg" title="Logotipo do Gregeo"> <img src="imagens/peq/logotipo.jpg" title="Gregeo" alt="logotipo"/></a></p>
</div>
</div>
<div id="menu">

<ul>
	<li><a href="index.php?pagina=inicial" title="Página Principal">Início</a></li>
	<li><a href="index.php?pagina=gregeo" title="Conheça a história do Gregeo">O Gregeo-UnB</a></li>
	<li><a href="index.php?pagina=atividades" title="O que fazemos">Atividades de campo</a></li>
	<li><a href="index.php?pagina=expedicoesantigas" title="Recordar é viver">Expedições antigas</a></li>
	<li><a href="index.php?pagina=espeleologia" title="O que é essa ciência?">A Espeleologia</a></li>
	<li><a href="index.php?pagina=dicas" title="Primeira vez na caverna?">Dicas para a atividade</a></li>	
	<li><a href="index.php?pagina=legislacao" title="Legislação Brasileira sobre cavernas">Legislação</a></li>
	<li><a href="index.php?pagina=contato" title="Fale com a gente">Contato</a></li>
</ul>
</div>
<div id="conteudo">
<?php include("bancodedados.php"); ?>
</div>
<div id="submenu">
<div class="submenu1">
<h4 class="subh4">Atualizado em:</h4> <p><?php include("atualizadoem.php"); ?></p>
</div>
<div class="submenu1">
<h4 class="subh4">Próxima reunião:</h4>
<p><?php include("reuniao.php"); ?></p>
</div>
<div class="submenu1">
<h4 class="subh4">Espeleo parceiros:</h4>
<ul>
<li><a href="http://www.sbe.com.br" target="_blank"><img src="imagens/logosbe.jpg" title="Sociedade Brasileira de Espeleologia" alt="logotipo"/></a></li>
<li><a href="http://www.redespeleo.org/" target="_blank"><img src="imagens/logoredespeleo.jpg" title="Rede Speleo" alt="logotipo"/></a></li>
<li><a href="#"><img src="imagens/logoegb.jpg" title="Espeleo Grupo de Brasília" alt="logotipo"/></a></li>

</ul>
</div>

</div>
<div id="rodape">
<div class="rodape1">
<p>Copyright© - É permitida a cópia parcial do conteúdo para fins acadêmicos e educacionais desde citada a fonte. Preserve o meio ambiente.
    </p>
</div>
</div>
</div>
</body>
</html>
