<?php require 'nav3.php';  ?>

<head>
    <meta charset="UTF-8">
    <title>Tabla</title>
    <link rel="stylesheet" href="css/table.css" >

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
<div id="main-container">
    <table class="table table-sm table-borderless table-hover ">
            <thead  class="thead-dark">
          <tr>
            <th >ID</th>
            <th>Nombre</th>
>

          </tr>
        </thead>
        <tbody id="datos">

                 <?php
               include   ("connection.php");    

               $consult2 = "SELECT  * FROM clerk ";
                 $query =  mysqli_query($con, $consult2);
 
                 $array = mysqli_fetch_array($query);
                 foreach ($query as $row){ ?>
                
                    <tr>
                     <td><?php echo $row['id']; ?> </td>
                     <td><?php echo $row['name']; ?> </td>

          
                    <tr>
                            
                   
                  </tbody>
                  <?php
}
?>
</table>

   