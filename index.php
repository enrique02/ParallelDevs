<html>
<head> 


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chicago</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <div id="map"></div>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script src= "https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src= "https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<header>
     <h1> City of Chicago</h1>
</header>

<body> 
     <div class="container">
         <div class="row">
             <div class="col-lg-12">  

     <input type="submit" value="Datos" class="btn-datos" onclick = "location='/parallelDevs/d3.php'"/>
        

<?php
    function obtenerDatos(){
        $datos= file_get_contents("https://data.cityofchicago.org/resource/cm53-g3up.json");
        $array= json_decode($datos, true);
        return $array;
    }    
?>

<div align= "center" class="table-responsive"></div>
<table id= "movies" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
        <th>Date</th>
        <th>Day</th>
        <th>Location Address</th>
        <th>Location City</th>
        <th>Location State</th>
        <th>Park</th>
        <th>Park Address</th>
        <th>Park Phone</th>
        <th>Rating</th>
        <th>Title</th>
        </tr>
    </thead>
<tbody>

    <?php 
foreach (obtenerDatos() as $row){
?>

<tr>  
    <td> <?php echo $row['date']; ?> </td>
    <td> <?php echo $row['day']; ?> </td>
    <td> <?php echo $row['location_address']; ?> </td>
    <td> <?php echo $row['location_city']; ?> </td>
    <td> <?php echo $row['location_state']; ?> </td>
    <td> <?php echo $row['park']; ?> </td>
    <td> <?php echo $row['park_address']; ?> </td>
    <td> <?php echo $row['park_phone']; ?> </td> </td>
    <td> <?php echo $row['rating']; ?> </td> </td>
    <td> <?php echo $row['title']; ?> </td> </td>
</tr>

    <?php 
         }//cierre de foreach
     ?>
</tbody>
</table>
</div>


<script>
 $(document).ready(function(){
    $('#movies').DataTable();
});
</script>

    </div>
        </div>
            </div>
</body>

<footer>
     <p>Luis Enrique Angulo Araya <br> Teléfono: 8573-1098<br> Correo: luise2890@gmail.com </p>
</footer>

</html>

