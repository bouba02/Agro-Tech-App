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
      <div class="container-fluid">
        <!-- <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="../index.php" class="navbar-brand mr-lg-5 text-white">
                               <img src="../assets/img/nav.png" />
            </a>
          </li>
        </ul> -->
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
        <li class="nav-item dropdown">
    <a href="../index.php" class="navbar-brand mr-lg-5 text-white">
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
                <!-- <a href="../index.html">
                  <img src="../assets/img/nav.png" />
                </a> -->
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                      <li class="nav-item dropdown">
                        <a href="../index.php" class="navbar-brand mr-lg-5 text-white">
                            <div style="font-size: 26px; color: #ffffff;">
                                AGRO TECH
                            </div>
                        </a>
                      </li>
                    </ul>
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

          <ul class="navbar-nav align-items-lg-center ml-auto topnav" id="nav">
		  
		  	 
		  
	 <!-- <li class="nav-item" id="prediction">
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-magic"></i> Prediction</span
                >
		  </a>

		   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		   <a class="dropdown-item" href="fcrop_prediction.php">Prédiction des Cultures</a>
		   <a class="dropdown-item" href="fyield_prediction.php">Prédiction du Rendement​</a>
			<a class="dropdown-item" href="frainfall_prediction.php">Prédiction des Pluies</a>
		  </div>
		</div>
			</li> -->
			
			
			
			 <li class="nav-item" id="recommendation">
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-gavel"></i> Recommandation</span
                >
		  </a>

		   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="fcrop_recommendation.php">Recommandation​ de Culture</a>
			<!-- <a class="dropdown-item" href="ffertilizer_recommendation.php">Recommandation d'Engrais</a> -->
		  </div>
		</div>
			</li>
			

		  
			 <li class="nav-item" id="trade">
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-shopping-cart"></i> Boutique</span
                >
		  </a>

		   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="ftradecrops.php">Commerce de Cultures</a>
			<a class="dropdown-item" href="fstock_crop.php"> Stocks​ des Cultures</a>
			<a class="dropdown-item" href="fselling_history.php">Historique des Ventes</a>
		  </div>
		</div>
			</li>
			

			 
			
						 <li class="nav-item " id="tools">
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-gear"></i> Outils</span
                >
		  </a>

		   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		   <a class="dropdown-item" href="fchatgpt.php"> <i class="text-dark fad fa-robot"></i>Chat Bot​</a>
			<a class="dropdown-item" href="fweather_prediction.php"><i class="text-dark fas fa-cloud"></i> Prévision Météorologique</a>
			<!-- <a class="dropdown-item" href="fnewsfeed.php"> <i class="text-dark fas fa-newspaper"></i>Fil d'Actualités</a> -->
		  </div>
		</div>
			</li>
			
		
		
		   <li class="nav-item" id="profile">
              <a href="fprofile.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-user"></i> <?php echo $para2 ?> </span
                >
              </a>
            </li>
			
			
		  
		   <li class="nav-item">
              <a href="flogout.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-danger fas fa-power-off"></i> Déconnexion </span
                >
              </a>
            </li>



          </ul>
        </div>
      </div>
    </nav>
	
	

<style>
.topnav a {
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px solid red;
}

.topnav a.activa {
  border-bottom: 3px solid red;
}

</style>	
	
  <script>
$("#nav li a").each(function() {   
    if (this.href == window.location.href) {
        $(this).addClass("activaa");
    }
});
  </script>