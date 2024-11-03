<?php 
	include("conex.php");
	$usuario_empleado = $_POST['usuario_empleado'];
	$password_empleado = $_POST['password_empleado'];
	$i = 0;

	$sql = "SELECT * FROM ADMINISTRATIVO WHERE USUARIO = '".$usuario_empleado."' AND CONTRASENA = '".$password_empleado."'";
	$stid = oci_parse($conn, $sql);
    $r = oci_execute($stid);
	while( ($obj = oci_fetch_object($stid)) != false ){
		$i=1;
		session_start();
		$_SESSION['id_acceso']= $obj->ID_ADMIN;
		$_SESSION['nom_acceso']= $obj->NOMBRE_ADMIN;
		$_SESSION['ape_pat_acceso']= $obj->AP_PATER_ADMIN;
		$_SESSION['ape_mat_acceso']= $obj->AP_MATER_ADMIN;
		if($obj->ID_ADMIN == NULL){
		echo '<script language="javascript">';
			echo 'alert("Usuario o contraseña incorrectos");';
			//echo 'window.history.back();';
		echo '</script>';
	}
		else{
		header("Location: index.php");
		}
	}
 ?>