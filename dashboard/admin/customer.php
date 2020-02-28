
<html>





</head>
    <body class="page-body  page-fade">

    	<div class="page-container">

		<div class="sidebar-menu">

			<header class="logo-env">



					<!-- logo collapse icon -->
					<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>


			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>

			</header>
    		<?php include('nav3.php'); ?>
    	</div>

    		<div class="main-content">

				<div class="row">

					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">

					</div>



		<h3>Nueva Entrada</h3>

        <hr />
        <div align="center">
<form method="post" action="new_submit.php" class="form-horizontal form-groups-bordered">
<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">ID Membresia :</label>
    <div class="col-sm-5">
      <input type="text" name="p_id" value="<?php echo time(); ?>" class="form-control" readonly/>
    </div>
</div>

<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Nombre :</label>
    <div class="col-sm-5">
      <input type="text" name="p_name" id="textfield3" class="form-control" data-rule-required="true" data-rule-minlength="4" placeholder="Member Name" maxlength="30">
    </div>
</div>
<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Identificacion:</label>
    <div class="col-sm-5">
      <select name="proof" id="bbb" data-rule-required="true" class="form-control">
            <option value="">-- Porfavor seleccione --</option>
            <option value="GSIS Card">Cedula</option>
            <option value="Voter Card">Tarjeta de Votacion</option>
          <option value="Licencia de Conducir">Licencia de Conducir</option>
          <option value="Passport">Pasaporte</option>
          <option value="College/School ID">Universidad /Escuela ID</option>
          <option value="Others">Otros</option>
      </select>

    </div>
</div>
<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Numero de Documento:</label>
    <div class="col-sm-5">
      <input type="text" name="idcard"  id="idcard" class="form-control" data-rule-minlength="5" placeholder="Numero de Documento" maxlength="10">
    </div>
</div>
<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Direccion :</label>
    <div class="col-sm-5">
      <input type="text" name="add" id="textfield5" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Address">
    </div>
</div>

<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Fecha de Nacimiento :</label>
    <div class="col-sm-5">
      <input type="text" name="birthdate" id="birthdate" class="form-control datepicker" data-format="yyyy-mm-dd">
    </div>
</div>

<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Edad :</label>
    <div class="col-sm-5">
      <input type="text" name="age" id="textfield4" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Age" onKeyPress="return checkIt(event)" maxlength="3">
    </div>
</div>

<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Sexo :</label>
    <div class="col-sm-5">
      <select name="sex" id="bbb" data-rule-required="true" class="form-control">
          <option value="">-- Porfavor seleccione --</option>
          <option value="Male">Masculino</option>
          <option value="Female">Femenino</option>
      </select>
    </div>
</div>



<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Telefono / Celular:</label>
    <div class="col-sm-5">
      <input type="text" name="contactperson"  id="contactperson" class="form-control" data-rule-minlength="5" placeholder="Contact Person" maxlength="10">
    </div>
</div>

<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Correo Electronico:</label>
    <div class="col-sm-5">
      <input type="text" name="email"  id="emailfield" class="form-control" data-rule-minlength="5" placeholder="E-Mail" maxlength="60">
    </div>
</div>


<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Inscripcion Fecha :</label>
    <div class="col-sm-5">
      <input type="text" name="date" id="textfield22" value="<?php echo date('Y-m-d'); ?>">
    </div>
</div>


<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Tipo Membresia :</label>
    <div class="col-sm-5">
       <select name="mem_type" id="id" data-rule-required="true" class="country">
        <option value="">-- Porfavor seleccione --</option>
        <?php
include("connexion.php");
          $query = "select * from mem_types";

          //echo $query;
          $result = mysqli_query($con, $query);

          if (mysqli_affected_rows($con) != 0) {
              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                  echo "<option value=" . $row['mem_type_id'] . ">" . $row['name'] . "</option>";

              }
          }

        ?>
      </select>

      <span class="selectRequiredMsg">Porfavor seleccione un articulo</span>
    </div>
</div>



<div class="form-group">
    <div class="col-sm-offset-3 col-sm-5">
      <div class="city"></div>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-5">
      <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </div>
</div>




</form>

</div>




</html>