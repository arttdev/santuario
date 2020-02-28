






<?php
require 'db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Hotel Santuario</title>
    <link rel="stylesheet" href="../../neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
    <link rel="stylesheet" href="../../neon/css/neon.css"  id="style-resource-5">
	<link rel="stylesheet" href="../../neon/css/custom.css"  id="style-resource-6">


    	<!-- Theme framework -->
	<script src="../../js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="../../js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="../../js/demonstration.min.js"></script>

    <script src="../../neon/js/jquery-1.10.2.min.js"></script>

	<script src="../../js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.slider.js"></script>


    <script type="text/javascript">
		$(document).ready(function()
		{
		$(".country").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_city.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".city").html(html);
		}
		});

		});
		});
		    </script>
		<script type="text/javascript">
		$(document).ready(function()
		{
		$(".country1").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_city1.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".city1").html(html);
		}
		});

		});
		});
    </script>


    <SCRIPT LANGUAGE="JavaScript">
		function checkIt(evt) {
		    evt = (evt) ? evt : window.event
		    var charCode = (evt.which) ? evt.which : evt.keyCode
		    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		        status = "This field accepts numbers only."
		        return false
		    }
		    status = ""
		    return true
		}
	</SCRIPT>

	<script type="text/javascript" src="webcam.js"></script>

</head>
    <body class="page-body  page-fade">

    	<div class="page-container">

		<div class="sidebar-menu">

			<header class="logo-env">

			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../img/logo.png" alt="" width="192" height="80" />
				</a>
			</div>

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
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">

				<div class="row">

					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">

					</div>


					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">

						<ul class="list-inline links-list pull-right">

							<li>Bienvenido <?php echo $_SESSION['full_name']; ?>
							</li>

							<li>
								<a href="logout.php">
									Cerrar Sesión<i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>

					</div>

				</div>

		<h3>Hotel El Santuario</h3>

		<hr />


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
      <input type="text" name="name" id="textfield3" class="form-control" data-rule-required="true" data-rule-minlength="4" placeholder="Member Name" maxlength="30">
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
  <label for="field-1" class="col-sm-3 control-label">Telefono / Celular:</label>
    <div class="col-sm-5">
      <input type="text" name="contactperson"  id="contactperson" class="form-control" data-rule-minlength="5" placeholder="Numero de Celular" maxlength="10" required>
    </div>
</div>

<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Numero de Documento:</label>
    <div class="col-sm-5">
      <input type="text" name="idcard"  id="idcard" class="form-control" data-rule-minlength="5" placeholder="Numero de Documento" maxlength="10">
    </div>
</div>
<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Origen :</label>
    <div class="col-sm-5">
      <input type="text" name="origin" id="textfield5" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Ciudad de Procedencia">
    </div>
</div>
<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Destino :</label>
    <div class="col-sm-5">
      <input type="text" name="fate" id="textfield5" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Ciudad de destino">
    </div>
</div>
<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Ocupacion :</label>
    <div class="col-sm-5">
      <input type="text" name="pro" id="textfield5" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Ocupacion">
    </div>
</div>
<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Nacionalidad :</label>
    <div class="col-sm-5">
      <input type="text" name="country" id="textfield5" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Pais de Procedencia">
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
  <label for="field-1" class="col-sm-3 control-label">Inscripcion Fecha :</label>
    <div class="col-sm-5">
      <input type="text" name="date" id="textfield22" value="<?php echo date('Y-m-d'); ?>">
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




<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$("#table-1").dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"bStateSave": true
		});

		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
</script>

			<?php include('footer.php'); ?>
    	</div>

     <script src="../../neon/js/gsap/main-gsap.js" id="script-resource-1"></script>
    <script src="../../neon/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="../../neon/js/bootstrap.min.js" id="script-resource-3"></script>
    <script src="../../neon/js/joinable.js" id="script-resource-4"></script>
    <script src="../../neon/js/resizeable.js" id="script-resource-5"></script>
    <script src="../../neon/js/neon-api.js" id="script-resource-6"></script>
    <script src="../../neon/js/jquery.validate.min.js" id="script-resource-7"></script>
    <script src="../../neon/js/neon-login.js" id="script-resource-8"></script>
    <script src="../../neon/js/neon-custom.js" id="script-resource-9"></script>
    <script src="../../neon/js/neon-demo.js" id="script-resource-10"></script>

	<link rel="stylesheet" href="../../neon/js/select2/select2-bootstrap.css"  id="style-resource-1">
	<link rel="stylesheet" href="../../neon/js/select2/select2.css"  id="style-resource-2">

	<script src="../../neon/js/jquery.dataTables.min.js" id="script-resource-7"></script>
	<script src="../../neon/js/dataTables.bootstrap.js" id="script-resource-8"></script>
	<script src="../../neon/js/select2/select2.min.js" id="script-resource-9"></script>

        <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
    </script>
    </body>
</html>
