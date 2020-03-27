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
            <form class="form-horizontal form-bordered" method="get" id="formulario">
                <div class="form-group col-md-6">
                    <label class="col-md-3 control-label">Codigo</label>
                    <div class="col-md-6">
                        <div class="input-group mb-md">
                            <span class="input-group-addon btn-success">Go!</span>
                            <input type="text" class="form-control" placeholder="Codigo" autofocus id="ciestudiante">
                        </div>
                    </div>
                    <div class="col-md-9 col-xl-6">
                        <section class="panel">
                            <header class="panel-heading bg-tertiary">
                                <div class="panel-heading-profile-picture">
                                    <img src="assets/images/!logged-user.jpg" id="foto">
                                </div>
                            </header>
                            <div class="panel-body">
                                <h4 class="text-semibold mt-sm" id="mensaje"></h4>
                                <p id="verificacion" style="color: red"></p>
                                <hr class="solid short">
                                <p><a href="#" id="credencial"><i class="fa fa-print mr-xs"></i> Imprimir credencial</a></p>
                            </div>
                        </section>
                    </div>

                </div>
            </form>

            <!--form action="<>">
            <div class="form-group col-md-6" >
                <label class="col-sm-4 control-label">Materiales</label>
                <div class='col-sm-8' id="contenedor">
                    <?php
                    $query=$this->db->query("SELECT * FROM material");
                    foreach ($query->result() as $row){

                        echo "<div class='checkbox-custom checkbox-default'>
                                    <input type='checkbox' id='".$row->idmaterial."' name='".$row->idmaterial."'>
                                    <label for='".$row->idmaterial."'>".$row->nombre."</label>
                                </div>";
                    }
                    ?>
                </div>

                <button type="submit" class="btn btn-block btn-warning">Entregar</button>

            </div>
            </form-->
            <form action="<?=base_url()?>Acreditacion/entrega" method="post">
                <div class="col-sm-6">
                <label class="col-sm-4 control-label">Materiales</label>
                    <input type="text"  id="idinscripcion" name="idinscripcion">
                <div class='col-sm-8' id="contenedor">
                    <b>Entrega dia 1</b>
                    <?php
                    $query=$this->db->query("SELECT * FROM material");
                    foreach ($query->result() as $row){
                        if ($row->idmaterial==8){
                        echo "<b>Entrega dia 2</b>";
                        }
                        echo "<div class='checkbox-custom checkbox-default'>
                                    <input type='checkbox' id='".$row->idmaterial."' name='".$row->idmaterial."'>
                                    <label for='".$row->idmaterial."'>".$row->nombre."</label>
                                </div>";
                    }
                    ?>
                </div>
                </div>
                <button type="submit" class="btn btn-warning btn-block" >Acreditar</button>

            </form>



            <table class="table table-bordered table-striped mb-none" id="datatable-details">
                <thead>
                <tr>
                    
                    <th>Monto</th>
                    <th>CI</th>
                    <th>Estudiante</th>
                    <?php
                    $query=$this->db->query("SELECT * FROM material");
                    foreach ($query->result() as $row){
                        echo "<th>".$row->nombre."</th>";
                    }
                    ?>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                /*$query=$this->db->query("SELECT idinscripcion FROM materialinscripcion GROUP BY  idinscripcion");
                
                foreach ($query->result() as $row){
                    //echo $row->idinscripcion."<br>";
                    $ciestudiante=$this->User->consula('ciestudiante','inscripcion','idinscripcion',$row->idinscripcion);
                    $idinscripcion=$row->idinscripcion;

                    
                        echo "<tr class='gradeX'>
                                <td></td>
                                <td></td>    
                                <td>".$this->User->consula('nombre','estudiante','ciestudiante',$ciestudiante)."</td>";
                                $query2=$this->db->query("SELECT * FROM material");
                                foreach ($query2->result() as $row2){
                                    $idmaterial=$row2->idmaterial;
                                    $query3=$this->db->query("SELECT * FROM materialinscripcion WHERE idinscripcion='$idinscripcion' AND idmaterial='$idmaterial'");
                                    if($query3->num_rows()==1)$sw="SI";
                                    else $sw="NO";
                                    echo "<td>$sw</td>";
                                }
                         echo "<td> <a href='".base_url()."Acreditacion/informe/".$row->idinscripcion."'><i class='btn btn-warning fa fa-file-pdf-o'></i> </a></td>
                                </tr>";
                }*/
                $con=0;
                $query=$this->db->query("SELECT * FROM inscritos1 ");
                foreach ($query->result() as $row){
//                    $ciestudiante=$row->ciestudiante;
                    $idinscripcion=$row->id;
//                    //$codigo=$this->User->consula('codigo','estudiante','ciestudiante',$ciestudiante);
//                    $con=$con+1;
//                    $entrega="";
//                    $sede="";
//                    $suma=($row->monto)+($row->monto2);
//                    if($codigo=="A"){
//                        $sede="ORURO";
//                        if($suma<200){
//                            $entrega = "<label class='btn-danger'>entregar NO</label>";
//                        }else{
//                            $entrega="<label class='btn-success'>entregar SI</label>";
//                        }
//                    }
//                    else if ($codigo=="C"){
//                        $sede="HUANUNI";
//                         if($suma<150){
//                            $entrega = "<label class='btn-danger'>entregar NO</label>";
//                        }else{
//                            $entrega="<label class='btn-success'>entregar SI</label>";
//                        }
//                    }else if ($codigo=="B"){
//                        $sede="CHALLAPATA";
//                         if($suma<150){
//                            $entrega = "<label class='btn-danger'>entregar NO</label>";
//                        }else{
//                            $entrega="<label class='btn-success'>entregar SI</label>";
//                        }
//                    }else{
//                        $entrega="<label class='btn-success'>entregar SI</label>";
//                    }
                    //echo $suma;
//                    if($entrega=="<label class='btn-danger'>entregar NO</label>"){
                    echo "<tr class='gradeX'>
                                <td>".$row->monto."</td>
                                <td>$row->cedula</td>
                                <td>$row->nombres $row->apellidos</td>";
                                $query2=$this->db->query("SELECT * FROM material");
                                foreach ($query2->result() as $row2){
                                    $idmaterial=$row2->idmaterial;
                                    $query3=$this->db->query("SELECT * FROM materialinscripcion WHERE idinscripcion='$idinscripcion' AND idmaterial='$idmaterial'");
                                    if($query3->num_rows()==1)$sw="SI";
                                    else $sw="NO";
                                    echo "<td>$sw</td>";
                                }
                         echo "<td> <a target='_blank' href='".base_url()."Acreditacion/informe/".$row->id."'><i class='btn btn-warning fa fa-file-pdf-o'></i> </a></td>
                                </tr>";
//                    }
                }
                ?>
                </tbody>
            </table>

        </div>
    </section>

    <!-- end: page -->
</section>
<script !src="">
window.onload=function(e){
    $( document ).ready(function() {
        $('#formulario').submit(function(event){
            event.preventDefault();
            //add stuff here
        });
        $('#ciestudiante').keyup(function(event){
            var ciestudiante=$('#ciestudiante').val()
            //console.log();
            var datos={
                "mostrar":"nombres",
                "tabla":"inscritos1",
                "where":"cedula",
                "dato":ciestudiante
            };
            $.ajax({
                url:'inscribir/consulta',
                data:datos,
                type:'POST',
                success:function (e) {
                    console.log(e);
                    if (e.length<40){
                        $('#mensaje').html(e);
                        $('#ciestudiante').val('');
                        $('#foto').prop('src','fotos/'+ciestudiante+'.jpg');
                        $('#credencial').prop('href','Acreditacion/credencial/'+ciestudiante);
                        datos.mostrar="id";
                        datos.tabla="inscritos1";
                        datos.where="cedula";
                        datos.dato=ciestudiante;
                        $.ajax({
                            url:'inscribir/consulta',
                            data:datos,
                            type:'POST',
                            success:function (e) {
                                var idinscripcion=e;
                                $('#idinscripcion').val(idinscripcion);
                                datos.mostrar="idinscripcion";
                                datos.tabla="materialinscripcion";
                                datos.where="idinscripcion";
                                datos.dato=idinscripcion;
                                $.ajax({
                                    url:'inscribir/consulta',
                                    data:datos,
                                    type:'POST',
                                    success:function (e) {
                                        if(e.length<4){
                                            $('#verificacion').html('¡¡¡YA ACREDITADO!!!!');
                                        }else{
                                            $('#verificacion').html('');
                                        }
                                    }
                                });
                            }
                        });
                    }else{
                        $('#mensaje').html('NO encontrado');
                        $('#foto').prop('src','assets/images/!logged-user.jpg');
                        $('#verificacion').html('');
                        $('#idinscripcion').val('');
                    }
                }
            });

        });

    });
}
</script>
