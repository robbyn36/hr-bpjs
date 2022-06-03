<?php include "part/nav.php" ?>
    <!-- /. NAV SIDE  -->
		<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?php if($_GET["menu"] == "admin"){ echo "Selamat Datang";}?> <?php if(isset($_SESSION["name"])){
						 echo $_SESSION["name"];
						 }else{
							 //echo "session tidak ada";
						 }
						 ?></h2>   
                        
						<?php include "part/menu.php"?>
						
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
			</div>
    <!-- /. PAGE INNER  -->
<?php include "part/footer.php" ?>           