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
background-image: url('http://www.dandeli.com/images/body_040313.png');
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
background-image: url('http://www.dandeli.com/images/body_040313.png');
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
.newQB {
	background:#a7c738;
	padding:10px 10px 2px 10px;
	border:2px solid #8eb113;

	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	-o-border-radius: 8px; 
	
	box-shadow: 0 1px 4px rgba(0,0,0,.4); 
	-webkit-box-shadow: 0 1px 4px rgba(0,0,0,.4); 
	-moz-box-shadow: 0 1px 4px rgba(0,0,0,.4); 
	-o-box-shadow: 0 1px 4px rgba(0,0,0,.4);

}
.newQB div {
	margin-bottom:10px;
}
</style>

<div class="newSection quickbooking">
<div style="font-family:'gnuolanefree','bitstream_vera_serifbold', Verdana, Arial, Helvetica, sans-serif; color:#234502; font-size:22px; font-weight:bold; text-align:center; height:30px; margin-bottom:0px; text-transform:uppercase;">Plan Your Trip</div>				 
<form method="post" action="../postBooking/book.php" name="myform" id="myform">
<div class="newQB">
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
	<div style="float:left; width:100px;">
    	<span style="margin:5px 0px;">Arrival:</span><br />
        <span id="arrshow" class="departure clearfix">
            <span class="arrtop">&nbsp;</span>
            <span class="arrdate" style="font-weight: normal;">Select</span>
            <span class="arrbottom">Date</span>
		</span>
         <input name="arrival" type="hidden" id="from" size="10" value="" />
        
    </div>
    <div style="float:right; width:100px;">
        <span style="margin:5px 0px;">Departure:</span>
        <span id="deptshow" class="departure clearfix">
            <span class="arrtop">&nbsp;</span>
            <span class="arrdate" style="font-weight: normal;">Select</span>
            <span class="arrbottom">Date</span>
        </span>
        <input name="departure" type="hidden" id="to" size="10" /> 
    </div>
</div>

<div style="clear: both;">
<div>No. of Persons:</div>
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
 
<div>
	Code: <img src="/CaptchaSecurityImages.php?width=100&amp;height=40&amp;characters=5"  align="absmiddle" />
    <input name="scode" type="text" class="f-color" id="scode" style="height:24px;" size="5" maxlength="5" />
	
</div>
<style>
input.newSubmitBtn {
	/*background: url(http://www.dandeli.com/images/submit1.png)  no-repeat; border: none;*/
	display: inline-block;
	padding: 5px 25px;
	font-size: 24px;
	cursor: pointer;
	text-align: center;	
	text-decoration: none;
	outline: none;
	color: #fff;
	background-color: #28911D;
	border: none;
	border-radius: 15px;
	box-shadow: 0 9px #999;
	width: 168px;
	height: 52px;
}

input.newSubmitBtn:hover {
	/*background: url(http://www.dandeli.com/images/submit2.png)  no-repeat; border: none;*/
	background-color: #254C21;
	width: 168px;
	height: 52px;
	cursor:pointer;
}

input.newSubmitBtn:active {
  background-color: #254C21;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>

<div class="inp">
  	   <input name="aemail" type="hidden" value="N/A" />
	  <input name="phone2" type="hidden" value="N/A" />
	  <input name="flight" type="hidden" value="N/A" />
	  <input name="pickdrop" type="hidden" value="N/A" />
	  <input name="travelplan" type="hidden" value="N/A" />
	  <input name="formType" type="hidden" value="QB" />

		
<input type="submit" name="Submit" value="Submit" class="newSubmitBtn">


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
			