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
	 <table width="980" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div style="margin:auto; width:980px; padding-top:13px;">
        <div id="topNav">
				<ul id="mainNav">
			<li class="garden">
				<a href="#" accesskey="w"><span class="access">home</span></a>
				
			</li>
			<li class="rooms">
				<a href="http://www.diy.com/nav/rooms" accesskey="w"><span class="access">Resorts in Dandeli</span></a>
				<div class="subnav">
					<div class="subnavTop">
						<ul class="subnavContent">
							<li>
								<dl>
									<dt><a href="../resorts/kali-adventure-camp.php">Kali Adventure Camp</a></dt>
									<dd><a href="../resorts/bison-river-resort.php">Bison Resort</a></dd>
									<dd><a href="../resorts/dandeli-jungle-camp.php">Dandeli Jungle Camp</a></dd>
									<dd><a href="../resorts/century-resort.php">Century Resort</a></dd>
									<dd><a href="../resorts/om-forest-camp.php">OM Forest Camp</a></dd>
									<dd><a href="../resorts/sai-river-resort.php">Sai River Resort</a></dd>
									<dd><a href="../resorts/devbagh-beach-resort.php">Devbagh Beach Resort</a></dd>
                                   <dd> <a href="../resorts/wildernest-chorla.php">Wildernest Chorla</a></dd>
								</dl>
								
								
								
							</li>
							
							
						</ul>
					</div>
				 
				</div>
			</li>
			<li class="decor">
				<a href="#" accesskey="w"><span class="access">Activities in Dandeli</span></a>
				<div class="subnav">
					<div class="subnavTop">
						<ul class="subnavContent">
							<li>
								<dl>
									<dt><a href="#">Adventure</a></dt>
														<dd><a href="./">Water Rafting</a></dd>
                                                        <dd><a href="./">Burma Bridge</a></dd>
                                                        <dd><a href="./">River Crossing</a></dd>
                                                        <dd><a href="./">Mountain Biking</a></dd>
                                                        <dd><a href="./">Rappelling</a></dd>
                                                        <dd><a href="./">Other Activities</a></dd>
								</dl>
								<dl>
									<dt><a href="#">Nature</a></dt>
									<dd><a href="./">Jungle Safari</a></dd>
                                    <dd><a href="./">Trekking</a></dd>
                                    <dd><a href="./">Nature Walk</a></dd>
                                    <dd><a href="./">Bird Watching</a></dd>
                                    <dd><a href="./">Overnight Camping</a></dd>
								</dl>
								<dl>
									<dt><a href="#">Water Based</a></dt>
                                    <dd><a href="./">Kayaking</a></dd>
                                    <dd><a href="./">Coracle</a></dd>
                                    <dd><a href="./">Jacuzzi</a></dd>
                                    <dd><a href="./">River Crossing</a></dd>
                                    <dd><a href="./">Zorbing</a></dd>
								</dl>
								<dl>
									    <dt><a href="#">Site Seeing</a></dt>
                                        <dd><a href="./">Syntheri</a></dd>
                                        <dd><a href="./">Maulangi</a></dd>
                                        <dd><a href="./">Kavla Caves</a></dd>
                                        <dd><a href="./">Shiroli Peak</a></dd>
                                        <dd><a href="./">Yana Rocks</a></dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><a href="#">Water Falls</a></dt>
                                    <dd><a href="./">Satodi Falls</a></dd>
                                    <dd><a href="./">Magod Falls</a></dd>
                                    <dd><a href="./">Vibhuti Falls</a></dd>
                                    <dd><a href="./">Doodh Sagar</a></dd>
								</dl>
								
								
								
							</li>
							
						</ul>
					</div>
					<!--[if lte IE 6]>
						<iframe src="/diy/jsp/blank.html"></iframe>
					<![endif]-->
				</div>
			</li>
			<li class="fix">
				<a href="#" accesskey="w"><span class="access">How to Reach</span></a>
				
			</li>
			<li class="build">
				<a href="http://www.diy.com/nav/build" accesskey="w"><span class="access">Testimonials</span></a>
				
			</li>
			<!-- eco START -->
			
			<!-- eco END -->
				<!-- Christmas start -->
					</ul>
				
			</div>
            </div></td>
     <td><div class="planmytrip" style="width:133px; height:40px; margin-right:20px; float:right;"><a href="../resort-booking/index.php">Plan Your Trip</a></div>
	</td>
  </tr>
</table>

			
	<!-- top menu -->
