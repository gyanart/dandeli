<?php 
// global setup for paths and folders
// mention the forward slash after the folder names

$path="/"; 
$dir_css="{$path}css/";
$dir_scripts="{$path}scripts/";

?>

<link href="<?php echo $dir_css; ?>newstyles.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $dir_css; ?>redmond/jquery-ui-1.9.1.custom.css" rel="stylesheet" type="text/css" />




<script type='text/javascript' src='<?php echo $dir_scripts; ?>gen_validatorv4.js' xml:space="preserve"></script>
<script type='text/javascript' src='<?php echo $dir_scripts; ?>jquery-1.8.2.js'></script>
<script type='text/javascript' src='<?php echo $dir_scripts; ?>jquery-ui-1.9.1.custom.js'></script>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_floating_style addthis_32x32_style" style="left:5px;top:140px;">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_google_plusone_share"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_pinterest_share"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51e7da7e5883afcc"></script>
<!-- AddThis Button END -->
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
var dateToday = new Date();
var dates = $("#from, #to").datepicker({
    defaultDate: "+1d",
    changeMonth: true,
    numberOfMonths: 2,
    minDate: dateToday,
	dateFormat: 'dd/mm/yy', 
	onSelect: function(selectedDate) {
        var option = this.id == "from" ? "minDate" : "maxDate",
        instance = $(this).data("datepicker"),
        date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
    }
});
});//]]>  

</script>

