<?php
include ('fsession.php');

ini_set('memory_limit', '-1');

if(!isset($_SESSION['farmer_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from farmerlogin where email='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['farmer_id'];
              $para2 = $row4['farmer_name'];
			  
?>

<!DOCTYPE html>
<html>
<?php include ('fheader.php');  ?>

  <body class="bg-white" id="top">
  
<?php include ('fnav.php');  ?>
 	
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

<div class="container ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">Commerce</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-success mb-3">
				  <div class="card-header">
				  <span class=" text-success display-4" > Mettre à jour le stock de récolte</span>					
				  </div>

				  <div class="card-body text-dark">
				  
				<form role="form" onsubmit="return tradecrops()" id="sellcrops" action="ftradecropsScript.php" method="POST" >   


			<div class="alert alert-info alert-dismissible fade show text-center" style="display: none;" id="popup" role="alert">
			<strong class="text-center text-dark ">Le Prix moyen actuel sur le marché pour<span id="crop"></span> est: <span id="price"></span></strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			
			
			<div class="alert alert-info alert-dismissible fade show text-center" style="display: none;" id="details" role="alert">
			<strong class="text-center text-dark ">Détails de la culture ajoutés avec succès.</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			
			
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center>Nom de la culture</center></th>
					<th><center>Quantité (en KG)</center></th>
					<th><center>Coût supporté par l'agriculteur par KG (en DHS)</center></th>
					<th><center>Télécharger les détails de la culture</center></th>
					
        </tr>
    </thead>
	

                    <tbody>
                                 <tr class="text-center">
                        <td>
                        <div class="form-group" >
						<select id="crops" name="crops" class="form-control">
							<option value="">Sélectionnez la culture</option>
							<option value="rice">Riz</option>
							<option value="maize">Maïs</option>
							<option value="jute">Jute</option>
							<option value="cotton">Coton</option>
							<option value="coconut">Noix de coco</option>
							<option value="papaya">Papaye</option>
							<option value="orange">Orange</option>
							<option value="apple">Pomme</option>
							<option value="muskmelon">Melon</option>
							<option value="watermelon">Pastèque</option>
							<option value="grapes">Raisins</option>
							<option value="mango">Mangue</option>
							<option value="banana">Banane</option>
							<option value="pomegranate">Grenade</option>
							<option value="lentil">Lentille</option>
							<option value="blackgram">Gram noir</option>
							<option value="mungbean">Haricot mungo</option>
							<option value="mothbeans">Haricot papillon</option>
							<option value="pigeonpeas">Pois d'Angole</option>
							<option value="kidneybeans">Haricot rouge</option>
							<option value="chickpea">Pois chiche</option>
							<option value="coffee">Café</option>
						</select>
										
						</div>					
						</td>
						
                        <td>
                        <div class="form-group" >
                        <input type="number" name="trade_farmer_cropquantity"  required class="form-control required">
                        </div>
						</td>

						<td>
						<div class="form-group" >
                        <input type="number" name="trade_farmer_cost" id="trade_farmer_cost" required class="form-control required">
                        </div>
						</td>
						
                        <td>
                        <center>
                        <button type="submit" name="Crop_submit" value="Crop_submit" class="btn btn-success">Soumettre</button>
                        </center>
                        </td>
                    </tr>
                    
                    </tbody>

                    </table> 
                </form>
</div>
</div>



	
            </div>
          </div>  
       </div>
		 
</section>

    <?php require("footer.php");?>

<script>
document.getElementById("crops").addEventListener("change", function() {
	var crops=jQuery('#crops').val();
	document.getElementById("crop").innerHTML = crops;
	
	jQuery.ajax({
		url:'fcheck_price.php',
		type:'post',
		data:'crops='+crops,
		success:function(response){
			$('#price').text(response); // set the response to the HTML element
			$("#popup").css({'display':'block'});
		}
	});
})
</script>
</body>
</html>

 