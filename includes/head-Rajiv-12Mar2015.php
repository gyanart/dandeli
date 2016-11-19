
<?php 

// global setup for paths and folders

// mention the forward slash after the folder names



$path="/"; 

$dir_css="{$path}css/";

$dir_scripts="{$path}scripts/";



?>



<link href="<?php echo $dir_css; ?>newstyles.css" rel="stylesheet" type="text/css" />

<link href="<?php echo $dir_css; ?>menu-styles.css" rel="stylesheet" type="text/css" />

<link href="<?php echo $dir_css; ?>menu-styles-ul.css" rel="stylesheet" type="text/css" />

<link href="<?php echo $dir_css; ?>activities.css" rel="stylesheet" type="text/css" />

<link href="<?php echo $dir_css; ?>redmond/jquery-ui-1.9.1.custom.css" rel="stylesheet" type="text/css" />

<script type='text/javascript' src='<?php echo $dir_scripts; ?>gen_validatorv4.js' xml:space="preserve"></script>

<script type='text/javascript' src='<?php echo $dir_scripts; ?>jquery-1.8.2.js'></script>

<script type='text/javascript' src='<?php echo $dir_scripts; ?>jquery-ui-1.9.1.custom.js'></script>

<!-- AddThis Button BEGIN -->

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

var dates = $("#from").datepicker({

    defaultDate: "+1d",

    changeMonth: true,

    numberOfMonths: 2,

    showOn: "button",

    buttonImage: '/images/month.png',

    buttonImageOnly: true,

    minDate: dateToday,

	dateFormat: 'dd/mm/yy', 

	onSelect: function(selectedDate) {



        var mydate = selectedDate.split("/");

        var seldate = new Date(mydate[2], mydate[1]-1, mydate[0]);



        



        var weekday=new Array(7);

        weekday[0]="Sun";

        weekday[1]="Mon";

        weekday[2]="Tue";

        weekday[3]="Wed";

        weekday[4]="Thu";

        weekday[5]="Fri";

        weekday[6]="Sat";

        var selweekday = weekday[seldate.getDay()];



        var month=new Array();

        month[0]="Jan";

        month[1]="Feb";

        month[2]="Mar";

        month[3]="Apr";

        month[4]="May";

        month[5]="Jun";

        month[6]="Jul";

        month[7]="Aug";

        month[8]="Sep";

        month[9]="Oct";

        month[10]="Nov";

        month[11]="Dec";



        var selday = seldate.getDate();

        var selmonth = month[seldate.getMonth()];



        var selyear = seldate.getFullYear();



        selyear += "";

        selyear = selyear.substr(2);



        var arrdispdate = '<span class="arrtop">'+selmonth+'\''+selyear+'</span>   \

                        <span class="arrdate">'+selday+'</span> \

                        <span class="arrbottom">'+selweekday+'</span>';

        

        $("#arrshow").html(arrdispdate);

        var option = this.id == "from" ? "minDate" : "maxDate",

        instance = $(this).data("datepicker"),

        date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);

        dates.not(this).datepicker("option", option, date);

    }

});



var dates = $("#to").datepicker({

    defaultDate: "+1d",

    changeMonth: true,

    numberOfMonths: 2,

    showOn: "button",

    buttonImage: '/images/month.png',

    buttonImageOnly: true,

    minDate: dateToday,

	dateFormat: 'dd/mm/yy',

	onSelect: function(selectedDate) {



        var mydate = selectedDate.split("/");

        var seldate = new Date(mydate[2], mydate[1]-1, mydate[0]);







        var weekday=new Array(7);

        weekday[0]="Sun";

        weekday[1]="Mon";

        weekday[2]="Tue";

        weekday[3]="Wed";

        weekday[4]="Thu";

        weekday[5]="Fri";

        weekday[6]="Sat";

        var selweekday = weekday[seldate.getDay()];



        var month=new Array();

        month[0]="Jan";

        month[1]="Feb";

        month[2]="Mar";

        month[3]="Apr";

        month[4]="May";

        month[5]="Jun";

        month[6]="Jul";

        month[7]="Aug";

        month[8]="Sep";

        month[9]="Oct";

        month[10]="Nov";

        month[11]="Dec";



        var selday = seldate.getDate();

        var selmonth = month[seldate.getMonth()];



        var selyear = seldate.getFullYear();



        selyear += "";

        selyear = selyear.substr(2);



        var deptdispdate = '<span class="arrtop">'+selmonth+'\''+selyear+'</span>   \

                        <span class="arrdate">'+selday+'</span> \

                        <span class="arrbottom">'+selweekday+'</span>';



        $("#deptshow").html(deptdispdate);

        var option = this.id == "from" ? "minDate" : "maxDate",

        instance = $(this).data("datepicker"),

        date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);

        dates.not(this).datepicker("option", option, date);

    }

});

$('#arrshow').click(function() {

      $('#from').datepicker('show');

});

$('#deptshow').click(function() {

      $('#to').datepicker('show');

});

});//]]>  

</script>



<!-- Current/active page highlight for top navigation: 15th Aug 2014: Rajiv -->

<script>

$(document).ready(function(){

	var str=location.href.toLowerCase();



	$('.topmenu li a').each(function() {

		if (str.indexOf(this.href.toLowerCase()) > -1) {

			$("li.highlight").removeClass("highlight");

			$(this).parent().addClass("highlight"); 

			$(this).closest('ul').closest('li').addClass("highlight");

		}

	}); 





})

</script>

<style>

#nav li.highlight > a {

    background: url('../newimages/ru_bg.png') repeat-x scroll center top transparent;

    text-decoration: none;

    padding: 11px 17px;

    border-radius: 5px;

    border-width: 1px;

    border-style: solid;

    border-color: #0B0B0B #242424 #BBB;

	color:#fff;

}

</style>