<?php 
	include("conex.php");

	$idProfesor = $_GET['id'];

	
    $sql  = "DELETE FROM profesor WHERE id_profesor =".$idProfesor;
    if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
			echo 'alert("El Profesor se ha ELIMINADO con éxito.");';
			echo 'window.location="ver_profesores.php";';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
			echo 'alert("Error al eliminar al profesor.");';
			echo 'window.history.back();';
		echo '</script>';
	}	
?>
