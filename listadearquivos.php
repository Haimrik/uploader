<?php
function fs($pasta="fotos",$i=0) {
	$diretorio=opendir($pasta);
	while ($arquivo=readdir($diretorio)) {
		if ($arquivo!="."&&$arquivo!=".."&&$arquivo!="guloide.png") {
			$path=$pasta."/".$arquivo;
			for ($c=0; $c<$i; $c++) {
				echo "&nbsp;&nbsp;&nbsp;";
			}
			if (is_dir($path)) {
				echo "<b>• ".$arquivo."</b><br>\n";
				fs($path,$i+1);
			} else {
				echo "&nbsp;- <a href='".$path."'>".$arquivo."</a><br />";
			}
		}
	}
	closedir($diretorio);
}

//Para utilizar
fs("fotos");
?>