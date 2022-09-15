<center>
    <div id="templatemo_footer">
    	<p>
			 <?php  
				if($_SESSION["logtype"] =="Doctor")
				{
				?>
                 <a href="dochome.php"  >Doctors Home</a>
              	<?php  
				}
				else if($_SESSION["logtype"] =="Administrator")
				{
				?>
                 <a href="adminhome.php" >Admins Home</a>
                  	<?php  
				}
				else if($_SESSION["logtype"] =="Patient")
				{
				?>
                <a href="patienthome.php"  >Patients Home</a>
              	<?php  
				}
				else
				{
				?>
               <a href="index.php"  >Home</a>
                <?php  
				}
				?> | <a href="products.php">Products</a> | <a href="about.html">About</a>| <a href="contact.php">Contact</a>| <a href="doclogin.php">
            Doctor/Admin Login</a>
		</p>

    	Copyright © Eye Clinic - <?php echo date(Y); ?>
</div>
</center>
</body>
</html>