<?php
include('session.php');
include('declaracionFechas.php');
include('funciones.php');
if(isset($_SESSION['login'])){
    include('header.php');
    if($_SESSION['userType'] == 1){
        include('navbarRecepcion.php');
    }else{
        include('navbarAdmin.php');
    }

    if (isset($_POST['addTarifa'])){

        $query = mysqli_query($link,"INSERT INTO Tarifa(idTipoHabitacion,idEmpresa,descripcion,valor,moneda) VALUES ('{$_POST['tipoHabitacion']}',NULL,'{$_POST['descripcion']}','{$_POST['valor']}','{$_POST['moneda']}')");

        $queryPerformed = "INSERT INTO Tarifa(idTipoHabitacion,idEmpresa,descripcion,valor,moneda) VALUES ({$_POST['tipoHabitacion']},NULL,{$_POST['descripcion']},{$_POST['valor']},{$_POST['moneda']})";

        $databaseLog = mysqli_query($link, "INSERT INTO DatabaseLog (idColaborador,fechaHora,evento,tipo,consulta) VALUES ('{$_SESSION['user']}','{$dateTime}','INSERT','Tarifa','{$queryPerformed}')");

    }

    if (isset($_POST['editar'])){

        $query = mysqli_query($link,"UPDATE Tarifa SET idTipoHabitacion = '{$_POST['tipoHabitacion']}', descripcion = '{$_POST['descripcion']}', valor = '{$_POST['valor']}', moneda = '{$_POST['moneda']}' WHERE idTarifa = '{$_POST['idTarifa']}'");

        $queryPerformed = "UPDATE Tarifa SET idTipoHabitacion = {$_POST['tipoHabitacion']}, descripcion = {$_POST['descripcion']}, valor = {$_POST['valor']}, moneda = {$_POST['moneda']} WHERE idTarifa = {$_POST['idTarifa']}";

        $databaseLog = mysqli_query($link, "INSERT INTO DatabaseLog (idColaborador,fechaHora,evento,tipo,consulta) VALUES ('{$_SESSION['user']}','{$dateTime}','INSERT','Tarifa','{$queryPerformed}')");

    }

    ?>

    <script>
        function myFunction() {
            // Declare variables
            var input, input2, input3, filter, filter2, filter3, table, tr, td, td2, td3, i;
            input = document.getElementById("tarifa");
            input2 = document.getElementById("tipo");
            filter = input.value.toUpperCase();
            filter2 = input2.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                td2 = tr[i].getElementsByTagName("td")[1];
                if ((td)&&(td2)) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        if(td2.innerHTML.toUpperCase().indexOf(filter2) > -1){
                            tr[i].style.display = "";
                        }else{
                            tr[i].style.display = "none";
                        }
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

    <section class="container">
        <div class="card">
            <div class="card-header gestion card-inverse card-info">
                <i class="fa fa-list"></i>
                Gestión de Tarifas
                <div class="float-right">
                    <div class="dropdown">
                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Acciones
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <form method="post">
                                <a class="dropdown-item" href="nuevaTarifa.php" style="font-size: 14px;">Registrar Nueva Tarifa</a>
                            </form>
                        </div>
                    </div>
                </div>
                <span class="float-right">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class="float-right">
                    <button href="#collapsed" class="btn btn-light btn-sm" data-toggle="collapse">Mostrar Filtros</button>
                </span>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-12">
                        <div id="collapsed" class="collapse">
                            <form class="form-inline justify-content-center" method="post" action="#">
                                <label class="sr-only" for="tarifa">Tarifa</label>
                                <input type="number" class="form-control mt-2 mb-2 mr-2" id="tarifa" placeholder="Descripción" onkeyup="myFunction()">
                                <label class="sr-only" for="tipo">Tipo Habitación</label>
                                <input type="text" class="form-control mt-2 mb-2 mr-2" id="tipo" placeholder="Tipo Habitación" onkeyup="myFunction()">
                                <input type="submit" class="btn btn-primary" value="Limpiar" style="padding-left:28px; padding-right: 28px;">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="spacer10"></div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered text-center" id="myTable">
                            <thead class="thead-default">
                            <tr>
                                <th class="text-center">Desc. Tarifa</th>
                                <th class="text-center">Tipo Habitación</th>
                                <th class="text-center">Valor</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($link,"SELECT * FROM Tarifa");
                            while ($fila =  mysqli_fetch_array($result)){
                                $result1 = mysqli_query($link,"SELECT * FROM TipoHabitacion WHERE idTipoHabitacion = '{$fila['idTipoHabitacion']}'");
                                while ($fila1 = mysqli_fetch_array($result1)){
                                    $tipoHabitacion = $fila1['descripcion'];
                                }
                                echo "<tr>";
                                echo "<td>{$fila['descripcion']}</td>";
                                echo "<td>{$tipoHabitacion}</td>";
                                echo "<td>{$fila['moneda']} {$fila['valor']}</td>";
                                echo "
                                    <td>
                                        <form method='post'>
                                            <div class='dropdown'>
                                                <button class='btn btn-outline-primary btn-sm dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                    Acciones
                                                </button>
                                                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                                                    <input type='hidden' value='{$fila['idTarifa']}' name='idTarifa'>
                                                    <button name='editar' class='dropdown-item' type='submit' formaction='editarTarifa.php'>Editar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                ";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include('footer.php');
}
?>
