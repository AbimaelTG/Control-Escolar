<?php 
    include("header.php");  
?>

	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="block-header">
                <h2>Registro de Grupos</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Registro de Grupo</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" name="frmEnviaAltaGrupo" method="POST" action="guarda_grupo.php" >
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="profesor" id="profesor" required>
                                            <option value="">-- Selecciona un profesor --</option>
                                            <?php 
                                                include("conex.php");
                                                $kuerito = "Select * from profesor";
                                                if($conn){
                                                    $r = mysqli_query($conn, $kuerito);
                                                    if($r->num_rows > 0){
                                                        while($obj = $r->fetch_assoc()){
                                                    echo "<option value='". $obj["id_profesor"] ."'>". $obj["nombre_profe"] ." ". $obj["ap_pater_profe"] ." ". $obj["ap_mater_profe"] ."</option>";
                                                }
                                            }
                                        }
                                             ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="materia" id="materia" required>
                                            <option value="">-- Selecciona una materia --</option>
                                            <?php 
                                                include("conex.php");
                                                $kuerito = "Select * from materia";
                                                if($conn){
                                                    $r = mysqli_query($conn, $kuerito);
                                                    if($r->num_rows > 0){
                                                        while($obj = $r->fetch_assoc()){
                                                    echo "<option value='". $obj["id_materia"] ."'>". $obj["nombre_mat"] ."</option>";
                                                }
                                            }
                                        }
                                             ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                            <select class="form-control show-tick" name="cicloEscolar" id="cicloEscolar" required>
                                                <option value="">-- Selecciona un ciclo escolar --</option>
                                                <option value="2025">2025 - 2026</option>
                                                <option value="2026">2026 - 2027</option>
                                                <option value="2028">2028 - 2029</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                            <select class="form-control show-tick" name="grado" id="grado" required>
                                                <option value="">-- Selecciona un grado --</option>
                                                <option value="1">1°</option>
                                                <option value="2">2°</option>
                                                <option value="3">3°</option>
                                                <option value="4">4°</option>
                                                <option value="5">5°</option>
                                                <option value="6">6°</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                            <select class="form-control show-tick" name="grupo" id="grupo" required>
                                                <option value="">-- Selecciona un grupo --</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                            </select>
                                    </div>
                                </div>
                                

                                <br><br><hr>
                                <button class="btn btn-primary waves-effect" type="submit">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<?php
	include("footer.php");
?>
