<?php
require 'db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="en">
<head>


    <title>El Santuario | Hotel System </title>

    <link rel="stylesheet" href="../../neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
    <link rel="stylesheet" href="../../neon/css/neon.css"  id="style-resource-5">
	<link rel="stylesheet" href="../../neon/css/custom.css"  id="style-resource-6">


    <script src="../../neon/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/jquery-1.11.3.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- TS1387507135: Neon - Responsive Admin Template created by Laborator -->
</head>
    <body class="page-body  page-fade">

    	<div class="page-container">

		<div class="sidebar-menu">

			<header class="logo-env">

			<!-- logo -->
			<div class="logo">
				<a href="index.php">
					<img src="../../img/log.jpg" alt="" width="230" height="150" />
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
							<li class="dropdown language-selector">
		
		Language: &nbsp;
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
			<img src="assets/images/flags/flag-es.png" width="16" height="16" />
		</a>

		<ul class="dropdown-menu pull-right">
			<li>
				<a href="#">
					<img src="assets/images/flags/flag-es.png" width="16" height="16" />
					<span>Español</span>
				</a>
			</li>
		</ul>

	</li>
							<li>
								<a href="logout.php">
									Cerrar Sesión<i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>

					</div>

				</div>

			<h2>Hotel El Santuario</h2>

			<hr>
			<div class="row">
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num" data-start="0" data-end="<?php
							$date  = date('Y-m-d');
							$query = "SELECT COUNT(*) from clerk WHERE  date LIKE '$date%'";

							//echo $query;
							$result = mysqli_query($con, $query);
							$i      = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							
							?>" data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h3>Usuarios del Dia</h3>
					<p>Clientes Registrados hoy</p>
					
				</div>
		
			</div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<div class="num" data-start="0" data-end="<?php
							$date  = date('Y-m');
							$query = "SELECT COUNT(*) from clerk WHERE date = '$date'";

							//echo $query;
							$result = mysqli_query($con, $query);
							$i      = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>" data-postfix="" data-duration="1500" data-delay="600">0</div>
		
					<h3>Clientes Mensuales</h3>
					<p>en Total</p>
				</div>
		
			</div>
			
			<div class="clear visible-xs"></div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-aqua">
					<div class="icon"><i class="entypo-mail"></i></div>
					<div class="num" data-start="0" data-end="<?php
							$date  = date('Y-m');
							$query = "select COUNT(*) from clerk ";

							//echo $query;
							$result = mysqli_query($con, $query);
							$i      = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>" data-postfix="" data-duration="1500" data-delay="1200">0</div>
		
					<h3>Clientes Totales</h3>
					<p>En la Base de Datos</p>
				</div>
		
			</div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-globe"></i></div>
					<div class="num" data-start="0" data-end="<?php
							$date  = date('Y-m');
							$query = "select * from payments WHERE  paid_date LIKE '$date%'";

							//echo $query;
							$result  = mysqli_query($con, $query);
							$revenue = 0;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        $revenue = $row['paid'] + $revenue;
							    }
							}

							echo $revenue;
							
							?>" data-postfix="" data-duration="1500" data-delay="1800">0</div>
		
					<h3>Ingreso del Mes</h3>
					<p>En total</p>
				</div>
		
			</div>
		</div>
		
			
<div>
			<div class="row">
		
		<div class="col-sm-3">
			<div class="tile-block" id="todo_tasks">
	
				<div class="tile-header">
					<i class="entypo-list"></i>
	
					<a href="#">
						Actividades
						<span>Tareas Realizadas Solo Tickear.</span>
					</a>
				</div>
	
				<div class="tile-content">
	
					<input type="text" class="form-control" placeholder="Agregar Actividad" />
	
	
					<ul class="todo-list">
						<li>
							<div class="checkbox checkbox-replace color-white">
								<input type="checkbox" />
								<label>Pagar el Software</label>
							</div>
						</li>
	
						<li>
							<div class="checkbox checkbox-replace color-white">
								<input type="checkbox" id="task-2" checked />
								<label>Retirar La HBT#2</label>
							</div>
						</li>
	
						<li>
							<div class="checkbox checkbox-replace color-white">
								<input type="checkbox" id="task-3" />
								<label>Pagar Facturas</label>
							</div>
						</li>
	
						<li>
							<div class="checkbox checkbox-replace color-white">
								<input type="checkbox" id="task-4" />
								<label>Organizar HBT#tal</label>
							</div>
						</li>
	
						<li>
							<div class="checkbox checkbox-replace color-white">
								<input type="checkbox" id="task-5" checked="" />
								<label>Barrer &amp; Trapear</label>
							</div>
						</li>
					</ul>
	
				</div>
	
				<div class="tile-footer">
					<a href="#">Ver Todas Las Tareas</a>
				</div>
	
			</div>
		</div>
		<br />
		
		<div class="row">
			<div class="col-sm-8">
		
				<div class="panel panel-primary" id="charts_env">
		
					<div class="panel-heading">
						<div class="panel-title">Estadisticas</div>
		
						<div class="panel-options">
							<ul class="nav nav-tabs">
								<li class=""><a href="#area-chart" data-toggle="tab">Diagrama De Area</a></li>
								<li class="active"><a href="#line-chart" data-toggle="tab">Diagrama Linear</a></li>
								<li class=""><a href="#pie-chart" data-toggle="tab">Diagrama Circular</a></li>
							</ul>
						</div>
					</div>
		
					<div class="panel-body">
		
						<div class="tab-content">
		
							<div class="tab-pane" id="area-chart">
								<div id="area-chart-demo" class="morrischart" style="height: 300px"></div>
							</div>
		
							<div class="tab-pane active" id="line-chart">
								<div id="line-chart-demo" class="morrischart" style="height: 300px"></div>
							</div>
		
							<div class="tab-pane" id="pie-chart">
								<div id="donut-chart-demo" class="morrischart" style="height: 300px;"></div>
							</div>
		
						</div>
		
					</div>
		
					<table class="table table-bordered table-responsive">
		
						<thead>
							<tr>
								<th width="50%" class="col-padding-1">
									<div class="pull-left">
										<div class="h4 no-margin">Paginas</div>
										<small>54,127</small>
									</div>
									<span class="pull-right pageviews">4,3,5,4,5,6,5</span>
		
								</th>
								<th width="50%" class="col-padding-1">
									<div class="pull-left">
										<div class="h4 no-margin">Conteo</div>
										<small>25,127</small>
									</div>
									<span class="pull-right uniquevisitors">2,3,5,4,3,4,5</span>
								</th>
							</tr>
						</thead>
		
					</table>
		
				</div>
		
			</div>

			
		</div>
		
		</div>
		
    	<?php include('footer.php'); ?>
		<script type="text/javascript">
			// Code used to add Todo Tasks
			jQuery(document).ready(function($)
			{
				var $todo_tasks = $("#todo_tasks");
		
				$todo_tasks.find('input[type="text"]').on('keydown', function(ev)
				{
					if(ev.keyCode == 13)
					{
						ev.preventDefault();
		
						if($.trim($(this).val()).length)
						{
							var $todo_entry = $('<li><div class="checkbox checkbox-replace color-white"><input type="checkbox" /><label>'+$(this).val()+'</label></div></li>');
							$(this).val('');
		
							$todo_entry.appendTo($todo_tasks.find('.todo-list'));
							$todo_entry.hide().slideDown('fast');
							replaceCheckboxes();
						}
					}
				});
			});
		</script>

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
    </body>
</html>
