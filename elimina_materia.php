<?php 
	include("conex.php");

	$id = $_GET['id'];

	
    $sql  = "DELETE FROM materia WHERE id_materia =".$id;
    if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
			echo 'alert("La Materia se ha ELIMINADO con éxito.");';
			echo 'window.location="ver_materias.php";';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
			echo 'alert("Error al eliminar la Materia.");';
			echo 'window.history.back();';
		echo '</script>';
	}
?>
