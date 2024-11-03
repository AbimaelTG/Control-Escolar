<?php 
	include("conex.php");

	$id = $_GET['id'];

	
    $sql  = "DELETE FROM ins_alumno_grupo WHERE ins_alumno_grupo =".$id;
    if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
			echo 'alert("El alumno en el grupo se ha ELIMINADO con éxito.");';
			echo 'window.location="ver_alumno_grupo.php";';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
			echo 'alert("Error al eliminar el alumno inscrito.");';
			echo 'window.history.back();';
		echo '</script>';
	}
?>
