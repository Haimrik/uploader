<!DOCTYPE html>
   <html>
   <head>   
      <meta http-equiv="content-type" content="text/html; charset=utf-8">  
      <title>Caronas Méier-Fundão</title>  
      <link rel="stylesheet" href="style.css" type="text/css" media="screen"> 
   </head>
   <body bgcolor="#FFF8DC">
      <div id="cadastro">
	  
         
         <form id="form1" name="form1" method="post" action="enviando.php" enctype="multipart/form-data" align="justify">
		 
			
			<fieldset><legend>Informações Pessoais:</legend>
			Nome:<input type ="text" name="nome" value=""/>
			</br>
			
			Motorista<input type ="radio" name="categoria" id="categoria" value="motorista"/>
			Carona<input type ="radio" name="categoria" id="categoria" value="carona"/>
			</br>
			
			Curso:<input type ="text" name="curso" value=""/>
			DRE:<input type ="text" name="dre" value=""/>
			</br>
			</fieldset>
			
			<fieldset><legend>Endereço:</legend>
			Rua:<input type ="text" name="rua" value=""/>
			Número:<input type ="text" name="numero" value="" size="2"/>
			</br>
			Complemento:<input type ="text" name="complemento" value=""/>
			Bairro:<input type ="text" name="bairro" value=""/>
			</fieldset>
			
			</br>
			
			<table border="1">
			
			<tr>
				<td></td><td>Segunda-Feira</td> <td>Terça-Feira</td> <td>Quarta-Feira</td> <td>Quinta-Feira</td> <td>Sexta-Feira</td>
			</tr>
			
			<tr>
				<td>Entrada</td>
				<td><form action="">
					<select name="segunda">
					<option value="8">8h</option>
					<option value="9">9h</option>
					<option value="10">10h</option>
					<option value="11">11h</option>
					<option value="12">12h</option>
					<option value="13">13h</option>
					<option value="14">14h</option>
					<option value="15">15h</option>
					<option value="16">16h</option>
					<option value="17">17h</option>
					<option value="18">18h</option>
					<option value="19">19h</option>
					<option value="20">20h</option>
					</select>
					</form>
				</td>
				
				<td><form action="">
					<select name="terca">
					<option value="8">8h</option>
					<option value="9">9h</option>
					<option value="10">10h</option>
					<option value="11">11h</option>
					<option value="12">12h</option>
					<option value="13">13h</option>
					<option value="14">14h</option>
					<option value="15">15h</option>
					<option value="16">16h</option>
					<option value="17">17h</option>
					<option value="18">18h</option>
					<option value="19">19h</option>
					<option value="20">20h</option>
					</select>
					</form>
				</td>
				
				<td><form action="">
					<select name="quarta">
					<option value="8">8h</option>
					<option value="9">9h</option>
					<option value="10">10h</option>
					<option value="11">11h</option>
					<option value="12">12h</option>
					<option value="13">13h</option>
					<option value="14">14h</option>
					<option value="15">15h</option>
					<option value="16">16h</option>
					<option value="17">17h</option>
					<option value="18">18h</option>
					<option value="19">19h</option>
					<option value="20">20h</option>
					</select>
					</form>
				</td>
				
				<td><form action="">
					<select name="quinta">
					<option value="8">8h</option>
					<option value="9">9h</option>
					<option value="10">10h</option>
					<option value="11">11h</option>
					<option value="12">12h</option>
					<option value="13">13h</option>
					<option value="14">14h</option>
					<option value="15">15h</option>
					<option value="16">16h</option>
					<option value="17">17h</option>
					<option value="18">18h</option>
					<option value="19">19h</option>
					<option value="20">20h</option>
					</select>
					</form>
				</td>
				
				<td><form action="">
					<select name="sexta">
					<option value="8">8h</option>
					<option value="9">9h</option>
					<option value="10">10h</option>
					<option value="11">11h</option>
					<option value="12">12h</option>
					<option value="13">13h</option>
					<option value="14">14h</option>
					<option value="15">15h</option>
					<option value="16">16h</option>
					<option value="17">17h</option>
					<option value="18">18h</option>
					<option value="19">19h</option>
					<option value="20">20h</option>
					</select>
					</form>
				</td>
			</tr>
				
			<tr>
				<td>Saída</td>
				<td><form action="">
					<select name="segunda">
					<option value="8">8h</option>
					<option value="9">9h</option>
					<option value="10">10h</option>
					<option value="11">11h</option>
					<option value="12">12h</option>
					<option value="13">13h</option>
					<option value="14">14h</option>
					<option value="15">15h</option>
					<option value="16">16h</option>
					<option value="17">17h</option>
					<option value="18">18h</option>
					<option value="19">19h</option>
					<option value="20">20h</option>
					</select>
					</form>
				</td>
				<td><form action="">
					<select name="terca">
					<option value="8">8h</option>
					<option value="9">9h</option>
					<option value="10">10h</option>
					<option value="11">11h</option>
					<option value="12">12h</option>
					<option value="13">13h</option>
					<option value="14">14h</option>
					<option value="15">15h</option>
					<option value="16">16h</option>
					<option value="17">17h</option>
					<option value="18">18h</option>
					<option value="19">19h</option>
					<option value="20">20h</option>
					</select>
					</form>
				</td>
				<td><form action="">
					<select name="quarta">
					<option value="8">8h</option>
					<option value="9">9h</option>
					<option value="10">10h</option>
					<option value="11">11h</option>
					<option value="12">12h</option>
					<option value="13">13h</option>
					<option value="14">14h</option>
					<option value="15">15h</option>
					<option value="16">16h</option>
					<option value="17">17h</option>
					<option value="18">18h</option>
					<option value="19">19h</option>
					<option value="20">20h</option>
					</select>
					</form>
				</td>
				<td><form action="">
					<select name="quinta">
					<option value="8">8h</option>
					<option value="9">9h</option>
					<option value="10">10h</option>
					<option value="11">11h</option>
					<option value="12">12h</option>
					<option value="13">13h</option>
					<option value="14">14h</option>
					<option value="15">15h</option>
					<option value="16">16h</option>
					<option value="17">17h</option>
					<option value="18">18h</option>
					<option value="19">19h</option>
					<option value="20">20h</option>
					</select>
					</form>
				</td>
				<td><form action="">
					<select name="sexta">
					<option value="8">8h</option>
					<option value="9">9h</option>
					<option value="10">10h</option>
					<option value="11">11h</option>
					<option value="12">12h</option>
					<option value="13">13h</option>
					<option value="14">14h</option>
					<option value="15">15h</option>
					<option value="16">16h</option>
					<option value="17">17h</option>
					<option value="18">18h</option>
					<option value="19">19h</option>
					<option value="20">20h</option>
					</select>
					</form>
				</td>
			</tr>
			
			
			</table>
			
			</br>

			<input type="submit" name="button" id="button" value="Cadastrar" />

         </form>

      </div>

    </body>
	</html>