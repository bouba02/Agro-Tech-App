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
                <a href="../index.html">
                  <!-- <img src="../assets/img/nav.png" /> -->
                  <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                      <li class="nav-item dropdown">
                        <a href="../index.php" class="navbar-brand mr-lg-5 text-white">
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

          <ul class="navbar-nav align-items-lg-center ml-auto topnav">
		  
		  	 
		  
			 <li class="nav-item">
              <a href="afarmers.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-users"></i> Agriculteurs</span
                >
              </a>
            </li>
			
			<li class="nav-item">
              <a href="acustomers.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-users"></i> Clients</span
                >
              </a>
            </li>
		
		
		      
		  
			<li class="nav-item">
              <a href="aproducedcrop.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fad fa-store-alt"></i> Stocks des Cultures</span
                >
              </a>
            </li>
			
	
			 			 		

			
			<li class="nav-item">
              <a href="aviewmsg.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-address-card"></i> Boite de Reception</span
                >
              </a>
            </li>
			
			
		   <li class="nav-item">
              <a href="aprofile.php" class="nav-link">
                <span class="text-white nav-link-inner--text font-weight-bold"
                  ><i class="text-white fas fa-user"></i> <?php echo $para2 ?> </span
                >
              </a>
            </li>
			
			
		  
		   <li class="nav-item">
              <a href="alogout.php" class="nav-link">
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