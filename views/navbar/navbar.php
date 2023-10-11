<div id="hostName" style="display: none;"><?php echo $_SERVER["SERVER_NAME"];?></div>
<script src="js/helperFunctions.js"></script>
<script src="js/globals.js"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" id="navbar_brand"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> 
      <span class="navbar-toggler-icon"></span>
    </button>
	      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
	        <ul class="navbar-nav ms-auto ">
	          <li class="nav-item">
	            <a class="nav-link mx-2" aria-current="page" id="navbar_buttonOne"></a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link mx-2" id="navbar_buttonTwo"></a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link mx-2" id="navbar_buttonThree"></a>
	          </li>
	         <li class="nav-item">
                    <a class="nav-link mx-2" id="navbar_buttonFour"></a>
                  </li>
	        </ul>
			
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#535353" class="bi bi-basket3-fill" viewBox="0 0 16 16">
			<path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z"/>			
			</svg>
			<span style="color:#535353"> &nbsp;
			<?php
				$navbar_total = $cart->getTotal();
				if($navbar_total == 0){
					echo " 0.00 ".$cfg->file->currencySymbol;
				}else{
					echo " " . zeroPadPrice($navbar_total).$cfg->file->currencySymbol;
				}

			?>
			<button class="btn btn-outline-danger">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#dc3545" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
			</svg>
			</button>
			</span>
	      </div>
	    </div>
	    </nav>

<script src="views/navbar/navbar.js"></script>
