<?php 
	include("conex.php");

	$id = $_GET['id'];

	
    $sql  = "DELETE FROM alumno WHERE id_alumno =".$id;
    if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
			echo 'alert("El Alumno se ha ELIMINADO con éxito.");';
			echo 'window.location="ver_alumnos.php";';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
			echo 'alert("Error al eliminar al alumno.");';
			echo 'window.history.back();';
		echo '</script>';
	}
?>
