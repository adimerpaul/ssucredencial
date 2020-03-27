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
            <table class="table table-bordered table-striped mb-none" id="datatable-details">
                <thead>
                <tr>
                    <th>Nº</th>
                    <th>Estudiante</th>
                    <th>Fecha </th>
                    <th>Monto </th>
                </tr>
                </thead>
                <tbody>
                <?php
                $con=0;
                $sum=0;
                $query=$this->db->query("SELECT * FROM inscritos1 WHERE ci='".$_SESSION['ci']."' ORDER BY fecha DESC ");
                foreach ($query->result() as $row){
                    if(substr( $row->fecha,0,10)==date("Y-m-d") ){
                        $con=$con+1;

                        $sum=$sum+$row->monto;
                        echo "<tr class='gradeX'>
                                <td>$con</td>
                                <td>$row->nombres $row->apellidos</td>
                                <td>".substr($row->fecha,0,10)."</td>
                                <td>".$row->monto."</td>
                            </tr>";
                    }
                }
//                $query=$this->db->query("SELECT * FROM inscripcion WHERE ci2='".$_SESSION['ci']."' ORDER BY fecha DESC ");
//                foreach ($query->result() as $row){
//                    if(substr( $row->fecha2,0,10)==date("Y-m-d")){
//                        $con=$con+1;
//                        $sum=$sum+$row->monto2;
//                        echo "<tr class='gradeX'>
//                                <td>$con</td>
//                                <td>".$this->User->consula('nombre','estudiante','ciestudiante',$row->ciestudiante)."</td>
//                                <td>".substr($row->fecha2,0,10)."</td>
//                                <td>".$row->monto2."</td>
//                            </tr>";
//                    }
//                }
                ?>
                </tbody>
            </table>
            <h3  class="text-right">Total <?=$sum?></h3>
            <a type="button" href="arqueo/boleta" class="btn btn-primary btn-lg btn-block"> <i class="fa fa-print"></i> Imprimir Arqueo del dia</a>

        </div>

    </section>

    <!-- end: page -->
</section>
