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
    <link rel="stylesheet" href="css/payments.css">

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
				<a href="img">
					<img src="../../img/htl.jpg" alt="" width="230" height="80" />
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
<div class="main-content">
							<ol class="breadcrumb bc-2 hidden-print" >
								<li>
						<a href="index.php"><i class="fa-home"></i>Dashboard</a>
					</li>
							<li>
		
									<a href="payments.php">Pagos</a>
							</li>
						<li class="active">
		
									<strong>Invoice</strong>
							</li>
							</ol>
					<br class="hidden-print" />
		
		<div class="invoice">
		
			<div class="row">
			
				<div class="col-sm-6 invoice-left">
				
					<a href="#">
						<img src="assets/images/laborator@2x.png" width="135" alt="" />
					</a>
					
				</div>
				
				<div class="col-sm-6 invoice-right">
				
						<h4>Factura NO. #5652256</h4>
						<span>31 October 2013</span>
				</div>
				
			</div>
			
			
			<hr class="margin" />
			
		
			<div class="row">
			
				<div class="col-sm-3 invoice-left">
				
					<h4>Cliente</h4>
					John Doe
					<br />
					Mr Nilson Otto
					<br />
					FoodMaster Ltd
					
				</div>
			
				<div class="col-sm-3 invoice-left">
					 
					<h4>&nbsp;</h4>
					1982 OOP
					<br />
					Madrid, Spain
					<br />
					+1 (151) 225-4183
				</div>
				
				<div class="col-md-6 invoice-right">
				
					<h4>Detalles de Pago:</h4>
					<strong>V.A.T Reg #:</strong> 542554(DEMO)78
					<br />
					<strong>Nombre de Cuenta:</strong> FoodMaster Ltd
					<br />
					<strong>SWIFT code:</strong> 45454DEMO545DEMO
					
				</div>
				
			</div>
			
			<div class="margin"></div>
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th width="60%">Producto</th>
						<th>Cantidad</th>
						<th>Precio</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td class="text-center">1</td>
						<td>On am we offices expense thought</td>
						<td>1</td>
						<td class="text-right">$1,290</td>
					</tr>
					
					<tr>
						<td class="text-center">2</td>
						<td>Up do view time they shot</td>
						<td>1</td>
						<td class="text-right">$400</td>
					</tr>
					
					<tr>
						<td class="text-center">3</td>
						<td>Way ham unwilling not breakfast</td>
						<td>1</td>
						<td class="text-right">$550</td>
					</tr>
					
					<tr>
						<td class="text-center">4</td>
						<td>Songs to an blush woman be sorry</td>
						<td>1</td>
						<td class="text-right">$4020</td>
					</tr>
					
					<tr>
						<td class="text-center">5</td>
						<td>Luckily offered article led lasting</td>
						<td>1</td>
						<td class="text-right">$87</td>
					</tr>
					
					<tr>
						<td class="text-center">6</td>
						<td>Of as by belonging therefore suspicion</td>
						<td>1</td>
						<td class="text-right">$140</td>
					</tr>
				</tbody>
			</table>
			
			<div class="margin"></div>
		
			<div class="row">
			
				<div class="col-sm-6">
				
					<div class="invoice-left">
			
						795 Park Ave, Suite 120
						<br />
						San Francisco, CA 94107
						<br />
						P: (234) 145-1810
						<br />
						Full Name
						<br />
						first.last@email.com
					</div>
				
				</div>
				
				<div class="col-sm-6">
					
					<div class="invoice-right">
						
						<ul class="list-unstyled">
							<li>
								Sub - Total amount: 
								<strong>$6,487</strong>
							</li>
							<li>
								VAT: 
								<strong>12.9%</strong>
							</li>
							<li>
								Discount: 
								-----
							</li>
							<li>
								Grand Total:
								<strong>$7,304</strong>
							</li>
						</ul>
						
						<br />
						
						<a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
							Print Invoice
							<i class="entypo-doc-text"></i>
						</a>
						
						&nbsp;
						
						<a href="mailbox-compose.html" class="btn btn-success btn-icon icon-left hidden-print">
							Send Invoice
							<i class="entypo-mail"></i>
						</a>
					</div>
					
				</div>
				
			</div>
		
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
    </body>
    </html>