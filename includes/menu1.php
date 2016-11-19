	<?php
	 function getAddress()
 {
    /*** check for https ***/
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    /*** return the full address ***/
    return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 }

 /*** example usage ***/
  $var_url = explode('/',getAddress());
 // print_r($var_url);
	?>
	<div class="topmenu">
			<ul id="nav">
				<li <?php if($var_url[3] == 'index.php'){ ?> class="active_my" <?php }?> ><a href="../index.php" >Home</a></li>
				<li <?php if(basename($_SERVER['PHP_SELF']) == 'kali-adventure-camp.php' || basename($_SERVER['PHP_SELF']) == 'bison-river-resort.php'|| basename($_SERVER['PHP_SELF']) == 'dandeli-jungle-camp.php' || basename($_SERVER['PHP_SELF']) == 'om-forest-camp.php'|| basename($_SERVER['PHP_SELF']) == 'sai-river-resort.php' || basename($_SERVER['PHP_SELF']) == 'devbagh-beach-resort.php' || basename($_SERVER['PHP_SELF']) == 'wildernest-chorla.php' || basename($_SERVER['PHP_SELF']) == 'century-resort.php'){ ?> class="active_my" <?php }?>><a href="#">Resorts in Dandeli</a> <img src="http://www.dandeli.com/newimages/drop-down.png" style="position:absolute; margin-top:16px; margin-right:10px; margin-left:10px; right:-3px; top:0;   "  />
					<ul>
						<li class="first-item">
                <a href="../resorts/kali-adventure-camp.php">Kali Adventure Camp</a></li>
			    <li><a href="../resorts/bison-river-resort.php">Bison Resort</a></li>
				<li><a href="../resorts/dandeli-jungle-camp.php">Dandeli Jungle Camp</a></li>
				<li><a href="../resorts/om-forest-camp.php">OM Forest Camp</a></li>
				<li><a href="../resorts/sai-river-resort.php">Sai River Resort</a></li>
				<li><a href="../resorts/devbagh-beach-resort.php">Devbagh Beach Resort</a></li>
				<li class="last-item">
                        <a href="../resorts/wildernest-chorla.php">Wildernest Chorla</a></li>
					</ul>
			  </li>
		
				<li <?php if(basename($_SERVER['PHP_SELF']) == 'activities.php'){ ?> class="active_my" <?php }?>><a href="../info/activities.php">Adventure Activities</a></li>
				<li <?php if(basename($_SERVER['PHP_SELF']) == 'getting.php'){ ?> class="active_my" <?php }?> ><a href="../info/getting.php">How To Reach</a></li>
				<!--<li <?php if(basename($_SERVER['PHP_SELF']) == 'payment.php'){ ?> class="active_my" <?php }?> ><a href="../travel/payment.php" >Payment</a></li> -->
				<li <?php if(basename($_SERVER['PHP_SELF']) == 'testimonials.php'){ ?> class="active_my" <?php }?> ><a href="../info/testimonials.php" >Testimonials</a></li>
				<li <?php if($var_url[3] == 'contact'){ ?> class="active_my" <?php }?>><a href="../contact/index.php">Contact Us</a></li>
				<!--<li class="planmytrip" style="margin-left:10px;"><a href="../resort-booking/index.php" ">Plan My Trip</a></li>-->
			</ul>
			<div class="planmytrip" style="width:133px; height:40px; margin-right:20px; float:right;"><a href="../resort-booking/index.php">Plan Your Trip</a></div>
	</div>
	<!-- top menu -->
