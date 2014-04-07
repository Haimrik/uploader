<?php

if(is_file($_FILES['arquivo']['tmp_name']) && !empty($_POST['categoria'])) {

	$foto = $_FILES['arquivo']['name'];

	if(!eregi("^image\/(jpeg|png|gif|pjpeg|jpg|zip)$", $_FILES['arquivo']['type'])){

		echo "
		<META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
		<script type=\"text/javascript\">
		alert(\"Formato inválido\");
		</script>
		";

	}else{

		if(file_exists("fotos/". $_POST["categoria"] . "/" . $foto)){
			$a = 1;
			while(file_exists("fotos/". $_POST["categoria"] . "/" . $a.$foto)){
				$a++;
			}

			$foto = $a.$foto;

		}

		if(!move_uploaded_file($_FILES['arquivo']['tmp_name'], "fotos/". $_POST["categoria"] . "/" . $foto)){

			echo "
			<META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
			<script type=\"text/javascript\">
			alert(\"Erro ao enviar o arquivo.\");
			</script>
			";

		}

	}

	header("Location: fotos/". $_POST["categoria"] . "/" . $foto);

}else{
	header("Location: index.php");
}

?>