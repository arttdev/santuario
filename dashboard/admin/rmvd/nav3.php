<html>
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Responsive Drop-down Navigation</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600" rel="stylesheet">
</head>

<body>
      


<header>
      <nav>


            <div>
                  <i class="fa fa-bars"></i>
            </div>

            <ul>
            <li class="logo">Hotel El Santuario</li>
                  <li><a href="#">Pagos <i class="fa fa-sort-desc"></i></a>
                        <ul>
                              <li><a href="index.php">Historial de pagos</a></li>
                              <li><a href="new_payment.php">Nuevo Pago</a></li>
                              <li><a href="#">Proximamente</a></li>
                              <li><a href="#">Proximamente</a></li>
                        </ul>
                  </li>
                  <li><a href="#">Clientes <i class="fa fa-sort-desc"></i></a>
                        <ul>
                              <li><a href="#">Historial de Clientes</a></li>
                              <li><a href="customer.php">Registro de Cliente</a></li>

                        </ul>
                  </li>
                  <li><a href="#">Recepcionistas<i class="fa fa-sort-desc"></i></a>
                        <ul>
                              <li><a href="clerks.php">Historial de Recepcionistas</a></li>
                              <li><a href="#">Registro de Recepcionistas</a></li>
                         </ul>
                  </li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">FAQ</a></li>
            </ul>
      </nav>
      </header>
      <script type="text/javascript">

      $("nav div").click(function() {
            $("ul").slideToggle();
            $("ul ul").css("display", "none");
      });

      $("ul li").click(function() {
            $("ul ul").slideUp();
            $(this).find('ul').slideToggle();
      });

      $(window).resize(function() {
            if($(window).width() > 768) {
                  $("ul").removeAttr('style');
            }
      });

      </script>
      </body>
</html>


