<?php
session_start();// Starting Session
require('../sql.php'); // Includes Login Script

// Storing Session
$user = $_SESSION['admin_login_user'];

if(!isset($_SESSION['admin_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from admin where admin_name ='$user'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['admin_id'];
              $para2 = $row4['admin_name'];
			  $para3 = $row4['admin_password'];
			  	  
?>


<!doctype html>
<html lang="en">
<?php require ('aheader.php');  ?>

  <body class="bg-white" id="top">
  
<?php require ('anav.php');  ?>
 	
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
<!-- ======================================================================================================================================== -->


<div class="container-fluid ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">AGRICULTEURS</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-success mb-3">
				  <div class="card-header">
				  <span class=" text-success display-4" >  Liste des Agriculteurs  </span>
					
				  </div>

				  <div class="card-body text-dark">
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
            <th><center>ID</center></th>
					<th><center> Nom Complet</center></th>
					<th><center>Genre</center></th>
					<th><center>E-mail </center></th>
					<th><center>Numéro GSM</center></th>
					<th><center>Date de Naissance</center></th>
					<th><center>Région</center></th>
					<th><center>Ville</center></th>
					<th><center>Adresse</center></th>
					<th><center>Supprimer</center></th>

        </tr>
    </thead>
    <tbody>
  						<?php 
$sql = "SELECT farmer_name, farmer_id, F_gender, email, phone_no, F_birthday, F_State, F_District, F_Location FROM farmerlogin";

								$query = mysqli_query($conn,$sql);

								while($res = mysqli_fetch_array($query)){	
				 ?>		  
						  
		 <tr class="text-center">
							 <td> <?php echo $res['farmer_id'];  ?> </td>
							 <td> <?php echo $res['farmer_name'];  ?> </td>
							 <td> <?php echo $res['F_gender'];  ?> </td>
							 <td> <?php echo $res['email'];  ?> </td>
							 <td> <?php echo $res['phone_no'];  ?> </td>
							 <td> <?php echo $res['F_birthday'];  ?> </td>
							 <td> <?php echo $res['F_State'];  ?> </td>
							 <td> <?php echo $res['F_District'];  ?> </td>
							 <td> <?php echo $res['F_Location'];  ?> </td>
							 	
							<td > <button class="btn btn-sm btn-danger" > <a href="afdelete.php?id=<?php echo $res['farmer_id']; ?>"  class=" nav-link text-white">Supprimer</a> </button> </td>
							</tr>

							 <?php 
							 }
							  ?>
    </tbody>
	</table>
</div>
				</div>				 		  
            </div>
          </div>
        </div>
		 
</section>
	   <?php require("footer.php");?>

	   <script>
				$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</body>
</html>

