<section role="main" class="content-body">
    <header class="page-header">
        <h2><?=$title?></h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Main</span></li>
                <li><span><?=$title?></span></li>
            </ol>
            <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>
            <h2 class="panel-title"><?=$title?></h2>
        </header>
        <div class="panel-body">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                Realizar cobro
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Realizar cobro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?=base_url()?>inscribir/registro" method="POST" enctype="multipart/form-data">
<!--                                <div class="form-group row">-->
<!--                                    <label for="tipopago" class="col-sm-2 col-form-label">tipopago</label>-->
<!--                                    <div class="col-sm-10">-->
                                        <!--input type="text" class="form-control" id="tipopago" placeholder="tipopago" required name="tipopago"-->
<!--                                        <select name="tipopago" id="tipopago" class="form-control" >-->
<!--                                            <option value="">Selecionar..</option>-->
<!--                                            <option value="ESTUDIANTE INTERNO">ESTUDIANTE INTERNO</option>-->
<!--                                            <option value="EXTERNOS">EXTERNOS</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <script !src="">
                                    // var tipopago = document.getElementById('tipopago');
                                    // tipopago.addEventListener('change',
                                    //     function(){
                                    //         var selectedOption = this.options[tipopago.selectedIndex];
                                    //         if (selectedOption.value==="ESTUDIANTE INTERNO"){
                                    //             document.getElementById('nombre').style.display="none";
                                    //             document.getElementById('estudianteinterno').style.display="inline";
                                    //             document.getElementById('ciestudiante').value="";
                                    //             document.getElementById('nombre').value="";
                                    //             document.getElementById('estudianteinterno').value="";
                                    //             document.getElementById('carrera').value="";
                                    //             document.getElementById('sede').value="";
                                    //         }else{
                                    //             document.getElementById('nombre').style.display="inline";
                                    //             document.getElementById('estudianteinterno').style.display="none";
                                    //             document.getElementById('ciestudiante').value="";
                                    //             document.getElementById('nombre').value="";
                                    //             document.getElementById('estudianteinterno').value="";
                                    //             document.getElementById('carrera').value="";
                                    //             document.getElementById('sede').value="";
                                    //         }
                                    //     });
                                </script>
<!--                                <div class="form-group row">-->
<!--                                    <label for="nombre" class="col-sm-2 col-form-label">nombre</label>-->
<!--                                    <div class="col-sm-10">-->
<!--                                        <input type="text" class="form-control" id="nombre" placeholder="nombre"  name="nombre">-->
<!--                                        <select name="estudianteinterno" id="estudianteinterno" class="form-control" style="display: none">-->
<!--                                            <option value="">Seleccionar...</option>-->
<!--                                            --><?php
//                                                $query=$this->db->query("SELECT * FROM estudiante  ORDER BY nombre");
//                                                foreach ($query->result() as $row){
//                                                    echo "<option value='".$row->ciestudiante."'>".$row->nombre."</option>";
//                                                }
//                                            ?>
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group row">-->
<!--                                    <label for="ciestudiante" class="col-sm-2 col-form-label">ciestudiante</label>-->
<!--                                    <div class="col-sm-10">-->
<!--                                        <input type="text" class="form-control" id="ciestudiante" placeholder="ciestudiante" required name="ciestudiante">-->
<!--                                        <small id="mensaje" style="color: red"></small>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="form-group row">
                                    <label for="nombres" class="col-sm-2 col-form-label">nombres</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nombres" placeholder="nombres" required name="nombres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="apellidos" class="col-sm-2 col-form-label">apellidos</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="apellidos" placeholder="apellidos" required name="apellidos">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ci" class="col-sm-1 col-form-label">ci</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="ci" placeholder="ci" required name="ci">
                                    </div>
                                    <label for="celular" class="col-sm-1 col-form-label">celular</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="celular" placeholder="celular" required name="celular">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="correo" class="col-sm-1 col-form-label">correo</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="correo" placeholder="correo"  name="correo">
                                    </div>
                                    <label for="cargo" class="col-sm-1 col-form-label">cargo</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="cargo" placeholder="cargo"  name="cargo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ocupacion" class="col-sm-1 col-form-label">ocupacion</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="ocupacion" placeholder="ocupacion"  name="ocupacion">
                                    </div>
                                    <label for="ciudad" class="col-sm-1 col-form-label">ciudad</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="ciudad" placeholder="ciudad"  name="ciudad">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="facultad" class="col-sm-1 col-form-label">facultad</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="facultad" placeholder="facultad"  name="facultad">
                                    </div>
                                    <label for="carrera" class="col-sm-1 col-form-label">carrera</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="carrera" placeholder="carrera"  name="carrera">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mension" class="col-sm-1 col-form-label">mension</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="mension" placeholder="mension"  name="mension">
                                    </div>
                                    <label for="fechanac" class="col-sm-1 col-form-label">fechanac</label>
                                    <div class="col-sm-5">
                                        <input type="date" value="<?=date("Y-m-d")?>" class="form-control" id="fechanac" placeholder="fechanac"  name="fechanac">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="monto" class="col-sm-1 col-form-label">monto</label>
                                    <div class="col-sm-5">
                                        <select  class="form-control" id="monto" placeholder="monto" name="monto">
                                            <option value="">Seleccionar..</option>
                                            <option value="250">250</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="450">450</option>
                                        </select>
                                    </div>
                                    <label for="recibo" class="col-sm-1 col-form-label">recibo</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="recibo" placeholder="recibo"  name="recibo">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Registrar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped mb-none" id="datatable-details">
                <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                    <th>Cedula</th>
                    <th>Codigo</th>
                    <th>Credencial</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $query=$this->db->query("SELECT * FROM inscritos1 ORDER BY fecha DESC ");
                foreach ($query->result() as $row){

                    if(substr( $row->fecha,0,10)==date("Y-m-d"))
                    echo "<tr class='gradeX'>
                                <td>$row->nombres $row->apellidos</td>
                                <td>".$row->fechai."</td>
                                <td>$row->monto</td>
                                <td>".$row->cedula."</td>
                                <td>$row->qr</td>
                                <td>
                                    <a target='_blank' href='".base_url()."inscribir/credencial/".$row->id."' ><li class='btn btn-sm btn-success fa fa-print'> Credencial</li></a>
                                    <a target='_blank' href='".base_url()."inscribir/boleta/".$row->id."' ><li class='btn btn-sm btn-warning fa fa-file'> Boleta</li></a>
                                    <!--li class='btn btn-sm btn-warning fa fa-edit' data-toggle='modal' data-target='#modificar'
                                    
                                    ></li-->
                                 </td>
                            </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- end: page -->
</section>
<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Realizar cobro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url()?>inscribir/modificar" method="POST" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="monto1m" class="col-sm-2 col-form-label">monto1m</label>
                        <input type="text" name="ciestudiante"  id="ciestudiantem" hidden>
                        <div class="col-sm-10">
                            <input type="number" min="0" max="250" class="form-control" id="monto1m" placeholder="monto1m" required name="monto1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="monto2m" class="col-sm-2 col-form-label">monto2m</label>
                        <div class="col-sm-10">
                            <label id="faltante" hidden></label>
                            <input type="number" min="0" max="250" class="form-control " id="monto2m" placeholder="monto2m"  name="monto2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <a href="fotos/user.jpg" id="contenedorfotom"><img  src="fotos/user.jpg" id="fotom"  alt="foto" width="200"></a>
                        </div>
                    </div>
                    <div class="form-group row" >
                        <label for="codigoboleta" class="col-sm-2 col-form-label">Fotografia</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control"  name="foto">
                        </div>
                    </div>
                    <div class="form-group row" hidden>
                        <label for="material" class="col-sm-2 col-form-label">material</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="material" placeholder="material" required name="material" value="no">
                        </div>
                    </div>
                    <div class="form-group row" hidden>
                        <label for="certificado" class="col-sm-2 col-form-label">certificado</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="certificado" placeholder="certificado" required name="certificado" value="no">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Modificar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
