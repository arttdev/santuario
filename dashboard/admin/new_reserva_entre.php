<?php
require 'db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>EL Santuario</title>
    <link rel="stylesheet" href="../../neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
    <link rel="stylesheet" href="../../neon/css/neon.css"  id="style-resource-5">
	<link rel="stylesheet" href="../../neon/css/custom.css"  id="style-resource-6">


	<!-- jQuery UI -->
	<link rel="stylesheet" href="../../css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="../../css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="../../css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="../../css/plugins/fullcalendar/fullcalendar.print.css" media="print">

	<!-- Tagsinput -->
	<link rel="stylesheet" href="../../css/plugins/tagsinput/jquery.tagsinput.css">
	<!-- chosen -->
	<link rel="stylesheet" href="../../css/plugins/chosen/chosen.css">
	<!-- multi select -->
	<link rel="stylesheet" href="../../css/plugins/multiselect/multi-select.css">
	<!-- timepicker -->
	<link rel="stylesheet" href="../../css/plugins/timepicker/bootstrap-timepicker.min.css">
	<!-- colorpicker -->
	<link rel="stylesheet" href="../../css/plugins/colorpicker/colorpicker.css">
	<!-- Datepicker -->
	<link rel="stylesheet" href="../../css/plugins/datepicker/datepicker.css">
	<!-- Plupload -->
	<link rel="stylesheet" href="../../css/plugins/plupload/jquery.plupload.queue.css">
  <link rel="stylesheet" href="../../css/toastr.min.css">

	<!-- jQuery -->
	<script src="../../js/jquery.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.slider.js"></script>
	<!-- Bootstrap -->
	<script src="../../js/bootstrap.min.js"></script>
	<!-- Datepicker -->
	<script src="../../js/plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- Timepicker -->
	<script src="../../js/plugins/timepicker/bootstrap-timepicker.min.js"></script>

  <script src="../../js/toastr.min.js"></script>

	<!-- Theme framework -->
	<script src="../../js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="../../js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="../../js/demonstration.min.js"></script>
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
					<img src="../../img/htl.jpg" alt="" width="230" height="90" />
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


        <h3>Reserva De Habitacion</h3>


        <h3>Reserva para</h3>
      <div align="center">
<form method="post" action="new_Reserva.php" class="form-horizontal form-groups-bordered">
<div class="form-group">

<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Nombre :</label>
    <div class="col-sm-5">
      <input type="text" name="name" id="textfield3" class="form-control" data-rule-required="true" data-rule-minlength="4" placeholder="Member Name" maxlength="30">
    </div>
</div>

<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Telefono / Celular:</label>
    <div class="col-sm-5">
      <input type="text" name="contactperson"  id="contactperson" class="form-control" data-rule-minlength="5" placeholder="Contact Person" maxlength="10">
    </div>
</div>

<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Fecha de Reservacion :</label>
    <div class="col-sm-5">
      <input type="text" name="day" id="day" class="form-control datepicker" data-format="yyyy-mm-dd">
    </div>
</div>

<div class="form-group">
  <label for="field-1" class="col-sm-3 control-label">Habitacion :</label>
    <div class="col-sm-5">
      <select name="room" id="room" data-rule-required="true" class="form-control">
          <option value="">-- Porfavor seleccione --</option>
          <option value="Habitacion Matrimonial 45.000 aire">Habitacion Matrimonial 45.000 aire</option>
          <option value="Habitacion familiar 3 personas 70.000  aire">Habitacion familiar 3 personas 70.000  aire</option>
          <option value="Habitacion familiar 4 personas 90.000 aire">Habitacion familiar 4 personas 90.000 aire</option>
          <option value="Habitacion familiar 5 personas 130.000 aire">Habitacion familiar 5 personas 130.000 aire</option>
          <option value="Habitacion familiar 6 personas 150.000 aire">Habitacion familiar 6 personas 150.000 aire</option>
          <option value="Habitacion Matrimonial 35.000 ventilador">Habitacion Matrimonial 35.000 ventilador</option>
          <option value="Habitacion familiar 3 personas 55.000  ventilador">Habitacion familiar 3 personas 55.000  ventilador</option>
          <option value="Habitacion familiar 4 personas 70.000 ventilador">Habitacion familiar 4 personas 70.000 ventilador</option>
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
<!-- <?php include('footer.php'); ?> -->


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
<script src="../../neon/js/bootstrap-datepicker.js" id="script-resource-11"></script>

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
