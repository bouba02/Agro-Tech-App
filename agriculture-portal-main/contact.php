<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="icon" type="image/png" href="assets/img/logo.png" /> -->
    <title>Agro Tech</title>

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

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css">

  <link rel="stylesheet" href="assets/css/creativetim.min.css" type="text/css">

</head>

  <body class="bg-white" id="top">
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
        <!-- <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="index.php" class="navbar-brand mr-lg-5 text-white">
                               <img src="assets/img/nav.png" />
            </a>
          </li>
        </ul> -->
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
                  <!-- <img src="assets/img/nav.png" /> -->
                  <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                      <li class="nav-item dropdown">
                        <a href="index.php" class="navbar-brand mr-lg-5 text-white">
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
                <span class="text-success nav-link-inner--text"
                  ><i class="text-success fas fa-address-card"></i> Contact</span
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
                  ><i class="text-white fas fa-sign-in-alt"></i> Connexion</span
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
	
	
    <div class="text-gray-100 " >
        <form action="contact-script.php" method="post">
            <div class="max-w-screen-xl px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
                <div class="flex flex-col justify-between">
                    <div class="mt-2">
                        <h2 class="text-4xl lg:text-5xl font-bold leading-tight">Contactez nous !</h2>
                    </div>
                    <div class="mt-2">
                        <span class="uppercase text-sm text-gray-600 font-bold">Nom complet</span>
                        <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" id="user_name" name="user_name" placeholder="Entrez votre nom & prénoms">
                    </div>
                    <div class="mt-2">
                        <span class="uppercase text-sm text-gray-600 font-bold">Numéro </span>
                        <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="phone" id="user_mobile" name="user_mobile" pattern="^0{1}[0-9]{9}$" title="Entre un numéro de telephone valide (Ex. 06435654XX)" placeholder="Entrez votre numéro de telephone">
                    </div>
                    <div class="mt-2">
                        <span class="uppercase text-sm text-gray-600 font-bold">E-mail </span>
                        <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" id="user_email" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Entrez un email valide(Ex. abc@xyz.com)" placeholder="Entrez votre adresse E-mail">
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="mt-2">
                        <span class="uppercase text-sm text-gray-600 font-bold">Adresse</span>
                        <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" id="user_address" name="user_address" title="Entrez votre ville" placeholder="Entre votre ville">
                    </div>
 
                    <div class="mt-2">
                        <span class="uppercase text-sm text-gray-600 font-bold">Votre demande</span>
                        <textarea class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-7 rounded-lg focus:outline-none focus:shadow-outline" rows="8" id="user_message" name="user_message" title="Enter your Issue in Detail" placeholder="Entrez votre message" required="" autofocus=""></textarea>
                    </div>
                    <div class="mt-2">
                        <button class="uppercase text-sm font-bold tracking-wide bg-indigo-500 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Submit">
                            Envoyez votre demande
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="mysuccessModal" data-backdrop="static" style="position: fixed;width: 100%;height: 100%;overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="position: relative;margin: auto;padding: 0;border: 1px solid #888;width: 100%;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #1A4E85;color: white;">
                    <h4 class="modal-title">Message</h4>
                    <button type="button" class="close" onclick="pagesuccessRedirect()">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <h3>Merci de nous avoir contacté.</h3>
                    <h6>Vous êtes très important pour nous, toutes les informations reçues resteront toujours confidentielles. Nous vous contacterons dès que nous aurons pris connaissance de votre message.</h6>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer" style="padding:2px 16px;background-color: #1A4E85;color: white;">
                    <button type="button" class="btn btn-danger" onclick="pagesuccessRedirect()">Fermez</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myunsuccessModal" data-backdrop="static" style="position: fixed;width: 100%;height: 100%;overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="position: relative;margin: auto;padding: 0;border: 1px solid #888;width: 100%;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);">
                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #1A4E85;color: white;">
                    <h4 class="modal-title">Message</h4>
                    <button type="button" class="close" onclick="pageunsuccessRedirect()">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    Erreur, Message Non Envoyé!!! Veuillez ressayer SVP.
                </div>
                <!-- Modal footer -->
                <div class="modal-footer" style="padding:2px 16px;background-color: #1A4E85;color: white;">
                    <button type="button" class="btn btn-danger" onclick="pageunsuccessRedirect()">Fermez</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require("footer.php");?>

</body>

</html>