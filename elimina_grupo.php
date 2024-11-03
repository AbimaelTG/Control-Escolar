<?php 
	include("conex.php");

	$id = $_GET['id'];

	
    $sql  = "DELETE FROM grupo WHERE id_grupo =".$id;
    if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
			echo 'alert("El Grupo se ha ELIMINADO con éxito.");';
			echo 'window.location="ver_grupos.php";';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
			echo 'alert("Error al eliminar el grupo.");';
			echo 'window.history.back();';
		echo '</script>';
	}	
?>
