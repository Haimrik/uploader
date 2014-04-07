<?php

	include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
	protegePagina(); // Chama a função que protege a página

?>

   <!DOCTYPE html>
   <html>
   <head>   
      <meta http-equiv="content-type" content="text/html; charset=utf-8">  
      <title>Guloide Uploader</title>  
      <link rel="stylesheet" href="style.css" type="text/css" media="screen"> 
   </head>
   <body bgcolor="#FFF8DC">
      <div id="uploader">
         <img src="fotos/guloide.png" alt="Guloide Uploader">
         <form id="form1" name="form1" method="post" action="enviando.php" enctype="multipart/form-data" align="justify">

            <input name="arquivo" type="file" id="arquivo" size="50" />

            <input type="submit" name="button" id="button" value="Enviar" />

            <input type ="radio" name="categoria" id="categoria" value="rascunhos"/>Rascunhos 

            <input type ="radio" name="categoria" id="categoria" value="criaturas"/>Criaturas

            <input type ="radio" name="categoria" id="categoria" value="equipamentos"/>Equipamentos <br>

            <input type ="radio" name="categoria" id="categoria" value="estruturas"/>Estruturas 

            <input type ="radio" name="categoria" id="categoria" value="exteriores"/>Exteriores 

            <input type ="radio" name="categoria" id="categoria" value="interiores"/>Interiores <br>

            <input type ="radio" name="categoria" id="categoria" value="pisos"/>Pisos 

            <input type ="radio" name="categoria" id="categoria" value="naturezas"/>Naturezas

            <input type ="radio" name="categoria" id="categoria" value="personagens"/>Personagens

            <input type ="radio" name="categoria" id="categoria" value="referencias"/>Referencias

         </form>

      </div>

      <div style="height:600px;width:150px;border:0px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;" id="lista">
         <?php include('lista.php') ?>
      </div>


   </body>
   </html>