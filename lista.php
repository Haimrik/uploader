<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
	<title>jQuery treeview</title>

	<link rel="stylesheet" href="jquery.treeview.css" />
	<link rel="stylesheet" href="screen.css" />

	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="lib/jquery.cookie.js" type="text/javascript"></script>
	<script src="jquery.treeview.js" type="text/javascript"></script>

	<script type="text/javascript" src="script.js"></script>

	<script>
	$(document).ready(function() {
		$("#browser").treeview();
	});
	</script>

</head>
<body>
	<?php
	function is_dir_empty($dir) {
		if (!is_readable($dir)) return NULL; 
		$handle = opendir($dir);
		while (false !== ($entry = readdir($handle))) {
			if ($entry != "." && $entry != ".." && $entry != "index.php") {
				return FALSE;
			}
		}
		return TRUE;
	}
	?>

	<ul id="browser" class="filetree">
		<?php
		$categorias = array('criaturas', 'equipamentos','estruturas','exteriores','interiores','pisos','naturezas','personagens','rascunhos','referencias');

		for ($i = 0; $i < count($categorias); $i++) {
			?>
			<li class="closed"><span class="folder">
				<?php echo $categorias[$i]; 
				?>
			</span>
			<ul>
				<?php
				$path = "fotos/".$categorias[$i];
				$diretorio = dir($path);
				?>
				<?php 
				if( !is_dir_empty($path) ) { 
					?>

					<li>
						<?php

						echo "<img src='images/total.png'> <a href = 'fotos/" . $categorias[$i] . "/index.php' style='text-decoration:none';>Exibir todas</a>";
						?>
					</li>

					<?php 
				} 


				while($arquivo = $diretorio -> read()){
					if ( substr($arquivo, 0, 1) != '.') {

						if ($arquivo != "index.php"){
							?>
							<li>

								<span class="file">
									<?php

									echo "<a class='myfiletree' href='".$path . "/" . $arquivo."'>".$arquivo."</a><br />";

									?>
								</span>

							</li>
							<?php
						}

					}
				}
				$diretorio -> close();
				?>
			</ul>
		</li>
		<?php
	}
	?>

</ul>

</body></html>