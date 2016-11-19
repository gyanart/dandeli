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
	<div class="topmenu1">
	<ul id="" class="dropdown dropdown-linear dropdown-columnar">
	<li id="padding"><a href="./">Home</a></li>
	<li <?php if(basename($_SERVER['PHP_SELF']) == 'kali-adventure-camp.php' || basename($_SERVER['PHP_SELF']) == 'bison-river-resort.php'|| basename($_SERVER['PHP_SELF']) == 'dandeli-jungle-camp.php' || basename($_SERVER['PHP_SELF']) == 'century-resort.php'|| basename($_SERVER['PHP_SELF']) == 'sai-river-resort.php' || basename($_SERVER['PHP_SELF']) == 'devbagh-beach-resort.php' || basename($_SERVER['PHP_SELF']) == 'om-forest-camp.php'){ ?>class="dir" id="padding"<?php }?>>Resorts in Dandeli
		<ul class="lessWidthDropdown">
			<li class="dir title"><span>Resorts in Dandeli</span>
				<ul>
				<li><a href="../resorts/kali-adventure-camp.php">Kali Adventure Camp</a></li>
			    <li><a href="../resorts/bison-river-resort.php">Bison Resort</a></li>
				<li><a href="../resorts/dandeli-jungle-camp.php">Dandeli Jungle Camp</a></li>
				<li><a href="../resorts/century-resort.php">Century Resort</a></li>
                <li><a href="../resorts/om-forest-camp.php">OM Forest Camp</a></li>
				</ul>
			</li>
			<li class="dir title"><span>Resorts Around Dandeli</span>
				<ul>
					<li><a href="">Sai River Resort</a></li>
					<li><a href="">Devbagh Beach Resort</a></li>
				</ul>
			</li>
			<!--
			<li class="dir title"><span>Featured Resorts</span>
				<ul><li><img src="/featured-bison.jpg" border="0" /></li></ul>
			</li>
			-->
		</ul>
	</li>
	<li class="dir" id="padding">Activities in Dandeli
		<ul>
			<li class="dir title"><span>Adventure</span>
				<ul>
					<li><a href="./">Water Rafting</a></li>
					<li><a href="./">Burma Bridge</a></li>
					<li><a href="./">River Crossing</a></li>
					<li><a href="./">Mountain Biking</a></li>
					<li><a href="./">Rappelling</a></li>
                    <li><a href="./">Other Activities</a></li>
				</ul>
			</li>
			<li class="dir title"><span>Nature</span>
				<ul>
					<li><a href="./">Jungle Safari</a></li>
					<li><a href="./">Trekking</a></li>
					<li><a href="./">Nature Walk</a></li>
					<li><a href="./">Bird Watching</a></li>
					<li><a href="./">Overnight Camping</a></li>
				 </ul>
			</li>
			<li class="dir title"><span>Water Based</span>
				<ul>
					<li><a href="./">Kayaking</a></li>
					<li><a href="./">Coracle</a></li>
					<li><a href="./">Jacuzzi</a></li>
					<li><a href="./">River Crossing</a></li>
					<li><a href="./">Zorbing</a></li>
				</ul>
			</li>
			<li class="dir title"><span>Site Seeing</span>
				<ul>
					<li><a href="./">Syntheri</a></li>
					<li><a href="./">Maulangi</a></li>
					<li><a href="./">Kavla Caves</a></li>
					<li><a href="./">Shiroli Peak</a></li>
					<li><a href="./">Yana Rocks</a></li>
				</ul>
			</li>
			<li class="dir title"><span>Water Falls</span>
				<ul>
                    <li><a href="./">Satodi Falls</a></li>
					<li><a href="./">Magod Falls</a></li>
                    <li><a href="./">Vibhuti Falls</a></li>
                    <li><a href="./">Doodh Sagar</a></li>
				</ul>
			</li>
			
		</ul>
	</li>
	<li <?php if(basename($_SERVER['PHP_SELF']) == 'getting.php'){ ?> class="padding" id="padding" <?php }?>><a href="../contact/index.php">How To Reach</a></li>
    <li <?php if(basename($_SERVER['PHP_SELF']) == 'activities.php'){ ?> class="padding" id="padding" <?php }?>><a href="">Testimonials</a></li>
   <li <?php if($var_url[3] == 'contact'){ ?>id="padding"<?php }?>><a href="" >Contact Us</a></li>
</ul>
			<div class="planmytrip" style="width:133px; height:40px; margin-right:20px; float:right;"><a href="../resort-booking/index.php">Plan Your Trip</a></div>
	</div>
	<!-- top menu -->
