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

<div class="container-fluid ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">Recommandation</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-success mb-3">
				<form role="form" action="#" method="post" >  
				  <div class="card-header">
				  <span class=" text-info display-4" > Recommandation d'Engrais  </span>	
						<span class="pull-right">
							<button type="submit" value="Recommend" name="Fert_Recommend" class="btn btn-warning btn-submit">Prédire</button>
						</span>		
				  
				  </div>

				  <div class="card-body text-dark">
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center>Azote</center></th>
					<th><center>Phosphore</center></th>
					<th><center>Potasium</center></th>
					<th><center>Température</center></th>
					<th><center>Humidité</center></th>
					<th><center>Humidité du Sol</center></th>
					<th><center>Type de Sol</center></th>
					<th><center>Culture</center></th>
        </tr>
    </thead>
 <tbody>
                                 <tr class="text-center">
                                    <td>
                                    	<div class="form-group">
											<input type = 'number' name = 'n' placeholder="Azote Ex:37" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'p' placeholder="Phosphore Ex:0" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'k' placeholder="Potasium Ex:0" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 't'  placeholder="Température E:26" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'h'  placeholder="Humidité Ex:52" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name='soilMoisture' placeholder="Humidité du sol Ex:38" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
										<div class="form-group ">
													<select name="soil" class="form-control">
													<option  value="">Selectionne le Type de Sol</option>
													<option value="Sandy">Sableux</option>
													<option value="Loamy">Limoneux</option>
													<option value="Black">Argileux noir</option>
													<option value="Red">Argileux rouge</option>
													<option value="Clayey">Argileux</option>
										
													</select>
										</div>
									</td>
									
									<td>
										<div class="form-group ">
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
                                </tr>
                            </tbody>
							
					
	</table>
	</div>
	</form>

</div>



<div class="card text-white bg-gradient-success mb-3">
				  <div class="card-header">
				  <span class=" text-success display-4" > Result  </span>					
				  </div>

					<h4>
					<?php 
					if(isset($_POST['Fert_Recommend'])){
					$n=trim($_POST['n']);
					$p=trim($_POST['p']);
					$k=trim($_POST['k']);
					$t=trim($_POST['t']);
					$h=trim($_POST['h']);
					$sm=trim($_POST['soilMoisture']);
					$soil=trim($_POST['soil']);
					$crop=trim($_POST['crop']);


					echo "L'Engrais Recommandé est : ";

					$Jsonn=json_encode($n);
					$Jsonp=json_encode($p);
					$Jsonk=json_encode($k);
					$Jsont=json_encode($t);
					$Jsonh=json_encode($h);
					$Jsonsm=json_encode($sm);
					$Jsonsoil=json_encode($soil);
					$Jsoncrop=json_encode($crop);

					$command = escapeshellcmd("ML/fertilizer_recommendation/fertilizer_recommendation.py $Jsonn $Jsonp $Jsonk $Jsont $Jsonh $Jsonsm $Jsonsoil $Jsoncrop ");
                    $output = passthru($command);
					echo $output;					
					}
                    ?>
					</h4>
            </div>
 
	
	
            </div>
          </div>  
       </div>
		 
</section>

    <?php require("footer.php");?>

</body>
</html>

