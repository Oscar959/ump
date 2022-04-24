<?php
if(isset($_GET['file'])){
	$fileName=basename($_GET['file']);
	$filePath="../doc/".$fileName;
		header("Content-Description:File Transfer");
	    header("Content-Type:application/pdf");
		header("Content-Disposition:attachment; filename=$fileName");
		header("Content-Transfer-Encoding:binary");
		header("Cache-Control:private");
		readfile($filePath);
		exit;
}else if(isset($_GET['files'])){
	$fileName=basename($_GET['files']);
	$filePath="../lettres/".$fileName;
		header("Content-Description:File Transfer");
	    header("Content-Type:application/pdf");
		header("Content-Disposition:attachment; filename=$fileName");
		header("Content-Transfer-Encoding:binary");
		header("Cache-Control:private");
		readfile($filePath);
		exit;
}else{
	echo "le fichier n'existe pas ";
}

?>