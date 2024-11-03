<!-- <?php
	
    $conex = oci_connect("SYSTEM", "123", "localhost/XE");
    if($conex){
        echo "Se logro yupi :)";
    }
?> -->
<?php 
$c = oci_pconnect("SYSTEM", "1514155", "localhost/XE"); 
$s = oci_parse($c, 'select * from alumno');
oci_execute($s);
oci_fetch_all($s, $res);
echo "<pre>\n"; var_dump($res); echo "</pre>\n"; 
?>
Compare this code to the code in $HOME/public_html/query_nonpooled.php
<?php 
$c = oci_pconnect("SYSTEM", "1514155", "localhost/XE"); $s = oci_parse($c, 'select * from alumno'); oci_execute($s); oci_fetch_all($s, $res); echo "<pre>\n"; var_dump($res); echo "</pre>\n"; 
?>