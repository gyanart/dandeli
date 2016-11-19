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
<style type="text/css">
<!--
.style1 {
	font-size: 12px;
	font-weight: bold;
	color: #FF0000;
	font-family: Georgia, "Times New Roman", Times, serif;
}
-->
</style>

<style type="text/css">
input.el11 {
	padding:1em;
	font-size: 16px;
	font-weight: bold;
	color: #2D2D2D;
	letter-spacing: 2px;
}
span.departure
{
    width: 52px;
    float: left;
    display: block;
    cursor: pointer;
}
.clearfix:after
{
clear: both;
content: ".";
display: block;
height: 0;
visibility: hidden;
}
span.arrtop {
background-position: 0 -43px;
color: #000000;
height: 17px;
line-height: 18px;
width: 52px;
background-image: url('../images/body_040313.png');
float: left;
display: block;
text-align: center;
}
span.arrdate
{
background: none repeat scroll 0 0 #FFFFFF;
border-left: 1px solid #7F9DB9;
border-right: 1px solid #7F9DB9;
color: #000000;
font-size: 17px;
font-weight: bold;
height: 21px;
line-height: 21px;
margin-top: 0 !important;
text-align: center;
width: 50px;
float: left;
display: block;
text-align: center;
}
span.arrbottom
{
background-position: 0 -63px;
background-image: url('../images/body_040313.png');
height: 17px;
line-height: 14px;
margin-top: 0 !important;
width: 52px;
float: left;
display: block;
text-align: center;
color: #000000;
}
.ui-datepicker-trigger
{
cursor: pointer;
margin: 21px 0 0 5px;
display: block;
float: left;
}
span.mandate
{
    float: left;
    display: block;
    margin: 20px 0 0 5px;
}
</style>

<div class="newSection quickbooking">
<div style="font-family:'gnuolanefree','bitstream_vera_serifbold', Verdana, Arial, Helvetica, sans-serif; color:#234502; font-size:22px; font-weight:bold; text-align:center; height:30px; margin-bottom:0px; text-transform:uppercase;">Plan Your Trip</div>				 
<form method="post" action="../postBooking/book.php" name="myform" id="myform">
<div class="form-bg">
<div> 
 
  <input name="name" type="text" class="f-color input-l" id="name" value="Name:" onblur="onBlur(this)" onfocus="onFocus(this)" />
</div>
<div> 
  <input name="email" type="text" class="f-color input-l" id="email" value="Email:" onblur="onBlur(this)" onfocus="onFocus(this)" />
</div>
<div> 
  <input name="phone" type="text" class="f-color input-l" id="phone" value="Phone:" onblur="onBlur(this)" onfocus="onFocus(this)" />
</div>
<div style="clear: both;">
                    <span style="float: left; margin-top: 21px; display: block; margin-right: 30px; ">Arrival Date:</span>
                    <span id="arrshow" class="departure clearfix">
                        <span class="arrtop">&nbsp;</span>
                        <span class="arrdate" style="font-weight: normal;">Select</span>
                        <span class="arrbottom">Date</span>
                    </span>
                    <input name="arrival" type="hidden" id="from" size="10" value="" />
</div>
 <div style="clear: both;">
                    <span style="float: left; margin-top: 21px; display: block; margin-right: 10px; ">Departure Date:</span>
                    <span id="deptshow" class="departure clearfix">
                        <span class="arrtop">&nbsp;</span>
                        <span class="arrdate" style="font-weight: normal;">Select</span>
                        <span class="arrbottom">Date</span>
                    </span>
                    <input name="departure" type="hidden" id="to" size="10" /> 

</div>
<div style="clear: both;">
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
	  <input name="formType" type="hidden" value="QB" />
<input name="submit" type="image" value="Submit" src="../images/submit.png" class="" />
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
			