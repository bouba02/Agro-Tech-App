<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <title>Agro tech</title>

  <!--     Fonts and icons     -->
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css "/>
	
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
 
  <link rel="stylesheet" href="assets/css/creativetim.min.css" type="text/css">

</head>

  <body class="bg-white" id="top" onload="myFunction()">
    <!-- Navbar -->
    <nav
      id="navbar-main"
      class="
        navbar navbar-main navbar-expand-lg
        bg-default
        navbar-light
        position-sticky
        top-0
        shadow
        py-0
      "
    >
      <div class="container">
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
        <li class="nav-item dropdown">
    <a href="index.php" class="navbar-brand mr-lg-5 text-white">
        <div style="font-size: 26px; color: #ffffff;">
            AGRO TECH
        </div>
    </a>
        </li>

        </ul>

        <button
          class="navbar-toggler bg-white"
          type="button"
          data-toggle="collapse"
          data-target="#navbar_global"
          aria-controls="navbar_global"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="navbar-collapse collapse bg-default" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-10 collapse-brand">
                <a href="index.html">
                    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                      <li class="nav-item dropdown">
                        <a href="./" class="navbar-brand mr-lg-5 text-white">
                            <div style="font-size: 26px; color: #ffffff;">
                                AGRO TECH
                            </div>
                        </a>
                      </li>
                    </ul>
                 </a>
              </div>
              <div class="col-2 collapse-close bg-danger">
                <button
                  type="button"
                  class="navbar-toggler"
                  data-toggle="collapse"
                  data-target="#navbar_global"
                  aria-controls="navbar_global"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>

          <ul class="navbar-nav align-items-lg-center ml-auto">
		  
		   <li class="nav-item">
              <a href="contact.php" class="nav-link">
                <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-address-card"></i> Contact</span
                >
              </a>
            </li>
			
			
			  <li class="nav-item">
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-user-plus"></i> S'inscrire</span
                >
		  </a>

		  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="farmer/fregister.php">Agriculteurs</a>
			<a class="dropdown-item" href="customer/cregister.php">Clients</a>
		  </div>
		</div>
			</li>
			
		  
				  <li class="nav-item">
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-sign-in-alt"></i>Connexion</span
                >
		  </a>

		  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="farmer/flogin.php">Agriculteurs</a>
			<a class="dropdown-item" href="customer/clogin.php">Clients</a>
			<a class="dropdown-item" href="admin/alogin.php">Admin </a>
		  </div>
		</div>
			</li>
			
          
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

<div class="wrapper" >

    <div class="wrapper">
      <header class="jumbotron bg-gradient-warning">
        <div class="container">
          <div class="row row-header">
            <div class="col-12 col-sm-6">
              <h1 class="text-white">Agro Tech</h1>
              <p class="text-white">
               Le Meilleur Ami des Agriculteurs.
              </p>
              <div class="cg">
                <div class="card card-body bg-gradient-success">
                  <blockquote cite="blockquote">
                    <h6 class="mb-0 text-dark">
                      <em><b  id="quote">L'agriculture est la base et la force de la prospérité du pays.
                         L'industrie est l'aisance, le bonheur de la population.</b ></em>
                    </h6>
                    <br />

                    <footer class="blockquote-footer vg text-dark"  >
                      <span id="author"> Napoléon Bonaparte	</span>	
					<button id="sendButton" class="btn btn-sm btn-outline-secondary pull-right mx-auto mr-auto bg-gradient-danger" onclick="myFunction()">
					  <i class="fa fa-refresh text-white"></i>
					</button>					  
                    </footer>				
                  </blockquote>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-3 offset-sm-2 align-self-center">
              <!-- <img src="assets/img/plant-bulb.png" class="img-fluid" alt="" /> -->
            </div>
          </div>
        </div>
      </header>
<!-- Page Content -->

<!-- ======================================================================================================================================== -->

    <div class="section features-6 text-dark bg-white" id="services">
      <div class="container ">

        <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <span class="badge badge-primary badge-pill mb-3">Fonctionnalités</span>
                    <h3 class="display-3 ">Utilisateurs</h3>
                </div>
            </div>
			<br>
        <div class="row align-items-center">
		
          <div class="col-lg-6">
            <div class="info info-horizontal info-hover-success">
              <div class="description pl-4">
                <h3 class="title" >Agriculteurs</h3>
           <p class=" ">Les agriculteurs peuvent obtenir des recommandations sur les cultures et les engrais, prévoir
                         le temps qu'il fera et obtenir des informations sur l'agriculture.
                            Ainsi les agriculteurs pourriont vendre directement leurs récoltes aux clients.</p>
                        
              </div>
            </div>

          </div>
		  
		  
          <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5  pull-right" src="assets/img/agri.png" width="100%">
          </div>
        </div>
		
		
		        <div class="row align-items-center">
				  <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5" src="assets/img/customers.png" width="80%">
          </div>
     
		
		
          <div class="col-lg-6">
			
            <div class="info info-horizontal info-hover-warning mt-5">
              <div class="description pl-4">
                <h3 class="title">Clients</h3>
                <p class=" ">Les clients peuvent acheter des récoltes directement auprès des agriculteurs, sans passer par des intermédiaires.</p>
              </div>
            </div>
      
          </div>
   </div>
      </div>
    </div>


     
<!-- ======================================================================================================================================== -->

      <div class="section features-2 text-dark bg-white" id="features"> 
        <div class="container"> 
          <div class="row align-items-center"> 
            <div class="col-lg-5 col-md-8 mr-auto text-left"> 
              <div class="pr-md-5"> 
                <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle mb-5"> <i class="ni ni-favourite-28"> </i></div>
                <h3 class="display-3 text-justify">Caractéristiques</h3>
                <p>C'est le moment de passer à la prochaine étape de l'agriculture. Nous vous présentons l'avenir
                   de l'agriculture ainsi que de formidables outils pour aider  les agriculteurs à augmenter leurs rendements..</p>
                <ul class="list-unstyled mt-5"> 
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-settings-gear-65"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0">Hautement fiable et précis.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-html5"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0">Site web plus rapide et réactif.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-settings-gear-65"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0">Prévisions météorologiques en temps réel.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-satisfied"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0">Récommendation de Culture.</h6>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
			

		  
            <div class="col-lg-7 col-md-12 pl-md-0"> 
 <img class="img-fluid ml-lg-5" src="assets/img/features.png" width="100%">
 </div>
			
			
          </div>
        </div>
        <span > </span>
      </div>
     
	<!-- ======================================================================================================================================== -->
 
	 

 <div class="section features-6 text-dark bg-white" id="tech">
        <div class="container-fluid shado">

        

            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <span class="badge badge-primary badge-pill mb-3">Outils</span>
                    <h3 class="display-3 ">Technologies utilisées</h3>
                    <p class="" >Notre plate-forme de développement</p>
                </div>
            </div>
            <div class="row text-center ">            

<div class="col-md-4 d-none d-md-block">
   <div class="info">
   <img class=" img-fluid" src="assets/img/python.png" alt="Python">                       
       <h6 class="info-title text-uppercase text-primary">PYTHON</h6>
   </div>
</div>

<div class="col-md-4 d-none d-md-block">
   <div class="info">
   <img class=" img-fluid" src="assets/img/jupyter.png" alt="Jupyter">                       
       <h6 class="info-title text-uppercase text-primary">JUPYTER NOTEBOOK</h6>
   </div>
</div>

<div class="col-md-4 d-none d-md-block">
   <div class="info">
   <img class=" img-fluid" src="assets/img/vsc.svg" alt="VSC">                       
       <h6 class="info-title text-uppercase text-primary">VISUAL STUDIO CODE</h6>
   </div>
</div>


</div>
            
            <div class="row text-lg-center align-self-center">

                  <div class="col-md-4">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/html.png" alt="HTML5">                       
                        <h6 class="info-title text-uppercase text-primary">HTML5</h6>
                    </div>
                </div>

               <div class="col-md-4">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/css3.png" alt="CSS3">                       
                        <h6 class="info-title text-uppercase text-primary">CSS3</h6>
                    </div>
                </div>

               <div class="col-md-4">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/js.png" alt="JavaScript">                       
                        <h6 class="info-title text-uppercase text-primary">JavaScript</h6>
                    </div>
                </div>



</div>

<div class="row text-center ">            

                 <div class="col-md-4 d-none d-md-block">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/bootstrap.png" alt="BootStrap4">                       
                        <h6 class="info-title text-uppercase text-primary">BootStrap4</h6>
                    </div>
                </div>

                 <div class="col-md-4 d-none d-md-block">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/apache.png" alt="Apache">                       
                        <h6 class="info-title text-uppercase text-primary">Apache</h6>
                    </div>
                </div>
                
                 <div class="col-md-4 d-none d-md-block">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/mysql.png" alt="MySQL">                       
                        <h6 class="info-title text-uppercase text-primary">MySQL</h6>
                    </div>
                </div>

                
            </div>
			
			
<div class="row text-center ">            

                 <div class="col-md-4 d-none d-md-block">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/jquery.png" alt="BootStrap4">                       
                        <h6 class="info-title text-uppercase text-primary">JQUERY</h6>
                    </div>
                </div>

                 <div class="col-md-4 d-none d-md-block">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/openai2.png" alt="Apache">                       
                        <h6 class="info-title text-uppercase text-primary">OPEN AI</h6>
                    </div>
                </div>
                
                 <div class="col-md-4 d-none d-md-block">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/php2.png" alt="MySQL">                       
                        <h6 class="info-title text-uppercase text-primary">PHP</h6>
                    </div>
                </div>

                
            </div>


        </div>
    </div>

<?php require("footer.php");?>

<script>

const apiKey = "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";   // Enter your apikey here
const chatbox = document.getElementById("quote");
const authorN = document.getElementById("author");

let messages = [];

function myFunction(){
	const msg = "Donnez-moi une citation relatif à l'agriculture et à l'élevage.";
    if (msg) {
        messages.push({
            "role": "user",
            "content": msg
        });
        fetchMessages();
    }
};

function fetchMessages() {
    try {
        var settings = {
            url: "https://api.openai.com/v1/chat/completions",
            method: "POST",
            timeout: 0,
            headers: {
                Authorization: "Bearer " + apiKey,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                model: "gpt-3.5-turbo",
                messages: messages
            })
        };
        $.ajax(settings).done(function(response) {
			chatbox.innerHTML = '';  
			authorN.innerHTML = ''; 

			const message = response.choices[0].message;
            messages.push({
                "role": message.role,
                "content": message.content
            });					
            Rquote=message.content;	

			parts = Rquote.split(" - ")
			QuoteR = parts[0]
			authorName = parts[1]

			chatbox.append(QuoteR);
			authorN.append(authorName);
			
        }).fail(function(jqXHR, textStatus, errorThrown) {
			chatbox.innerHTML = '';  
			let errorMessage = 'L\'agriculture est la base et la force de la prospérité du pays. L\'industrie est l\'aisance, le bonheur de la population.';
			chatbox.append(errorMessage);
        });
    } catch (error) {
		chatbox.innerHTML = '';  
		let errorMessage2 = "L'agriculture est la base et la force de la prospérité du pays. L'industrie est l\'aisance, le bonheur de la population.";
		chatbox.append(errorMessage2);
    }
}
 </script>

</body>

</html>