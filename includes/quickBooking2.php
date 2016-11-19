<script type="text/javascript">
$('input[type="text"]').focus(function() {
    $(this).addClass("focus");
});
$('input[type="text"]').blur(function() {
    $(this).removeClass("focus");
});
</script>
<script>
function onBlur(el) {
    if (el.value == '') {
        el.value = el.defaultValue;
    }
}
function onFocus(el) {
    if (el.value == el.defaultValue) {
        el.value = '';
    }
}
</script>
<div class="newSection quickbooking">
				 
<form method="post" action="../postBooking/book.php" name="myform" id="myform">
<div class="form-bg"><div style="font-family:'gnuolanefree','bitstream_vera_serifbold', Verdana, Arial, Helvetica, sans-serif; color:#234502; font-size:22px; font-weight:bold; text-align:center; height:35px; margin-bottom:20px; text-transform:uppercase;">Plan Your Trip</div>
<div> 
 
  <input name="name" type="text" class="f-color input-l" id="name" value="Name:" onblur="onBlur(this)" onfocus="onFocus(this)" />
</div>
<div> 
  <input name="email" type="text" class="f-color input-l" id="email" value="Email:" onblur="onBlur(this)" onfocus="onFocus(this)" />
</div>
<div> 
  <input name="phone" type="text" class="f-color input-l" id="phone" value="Phone:" onblur="onBlur(this)" onfocus="onFocus(this)" />
</div>
<div> 
<span> <input name="arrival" type="text" class="f-color input-m" id="from"  value="Arrival:" onblur="onBlur(this)" onfocus="onFocus(this)" /></span>
 <span>  <input name="departure" type="text" class="f-color input-m"  id="to"  value="Departure:" onblur="onBlur(this)" onfocus="onFocus(this)" /></span>
</div>
<div> 
<div>No. of Persons</div>
<span> <input name="adults" type="text" class="f-color input-s1" id="adults"  onblur="onBlur(this)" onfocus="onFocus(this)"  value="Adults" />
</span>
<span>  <input name="children" type="text" class="f-color input-s2" id="children" value="Children"  onblur="onBlur(this)" onfocus="onFocus(this)" />
 </span>
<span>  <input name="foreigners" type="text" class="f-color input-s3" id="foreigners" value="Foreigners"  onblur="onBlur(this)" onfocus="onFocus(this)" /> 
</span>
<span class="sml-txt sml-txtp1">(12+ YR)</span>
<span class="sml-txt sml-txtp">
(5-12 YR)</span>
</div>
 
<div><span class="scode">Security Code </span><span> 
<input name="scode" type="text" class="f-color input-m" id="scode" /></span></div>
<div class="scd"><img src="/CaptchaSecurityImages.php?width=120&amp;height=40&amp;characters=6"  align="absmiddle" /></div>

<div class="inp">
  <input name="aemail" type="hidden" value="N/A" />
	  <input name="phone2" type="hidden" value="N/A" />
	  <input name="flight" type="hidden" value="N/A" />
	  <input name="pickdrop" type="hidden" value="N/A" />
	  <input name="travelplan" type="hidden" value="N/A" />
<input name="submit" type="image" value="Submit" src="../images/submit.png" />
</div>
</div>
</form>
<script language="JavaScript" type="text/javascript" xml:space="preserve">
	//<![CDATA[
	//You should create the validator only after the definition of the HTML form

	var frmvalidator  = new Validator("myform");
	frmvalidator.EnableOnPageErrorDisplaySingleBox();
	frmvalidator.EnableMsgsTogether();
	
	frmvalidator.addValidation("name","req","Please enter your Name");
	frmvalidator.addValidation("email","req", "Please enter your Email Address");
	frmvalidator.addValidation("email","email", "Please enter a valid Email Address");
	frmvalidator.addValidation("phone","req","Please enter your Phone Number");
	frmvalidator.addValidation("arrival","req","Please select an Arrival Date");
	frmvalidator.addValidation("departure","req","Please select an Departure Date");
	frmvalidator.addValidation("adults","req","Please enter the number of Adults");
	frmvalidator.addValidation("adults","numeric", "Adults form field should be numeric");
	frmvalidator.addValidation("scode","req","Please enter the Spam Code");

	//]]>
</script>

			</div>
			