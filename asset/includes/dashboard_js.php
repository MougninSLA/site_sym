<?php 

include("./function_graph_day.php");
include("./function_graph_month.php");
include("./function_graph_year.php");
?>
<!--   Core JS Files   -->
<script src="./asset/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="./asset/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./asset/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="./asset/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="./asset/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="./asset/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<!-- <script src="./asset/js/demo.js"></script> -->

<script type="text/javascript">
	 // $(document).ready(function(){

		// Javascript method's body can be found in asset/js/demos.js
    	 // demo.initDashboardPageCharts();

	 // });
type = ['','info','success','warning','danger'];


demo = {
    initPickColor: function(){
        $('.pick-class-label').click(function(){
            var new_class = $(this).attr('new-class');
            var old_class = $('#display-buttons').attr('data-class');
            var display_div = $('#display-buttons');
            if(display_div.length) {
            var display_buttons = display_div.find('.btn');
            display_buttons.removeClass(old_class);
            display_buttons.addClass(new_class);
            display_div.attr('data-class', new_class);
            }
        });
    },

    initFormExtendedDatetimepickers: function(){
        $('.datetimepicker').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
         });
    },

    initDocumentationCharts: function(){
        /* ----------==========     Daily Sales Chart initialization For Documentation    ==========---------- */

        dataDailySalesChart = {
            labels: ['L', 'M', 'M', 'J', 'V', 'S', 'D'],
            series: [
                [<?php echo "8, 10, 5, 14, 18";?>]
            ]
        };

        optionsDailySalesChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0},
        }

        var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

        md.startAnimationForLineChart(dailySalesChart);
    },

    initDashboardPageCharts: function(){

        /* ----------==========     Daily Sales Chart initialization    ==========---------- */

        dataDailySalesChart = {
            labels: [<?php echo "'$date_yesterday_6_d', '$date_yesterday_5_d', '$date_yesterday_4_d', '$date_yesterday_3_d', '$date_yesterday_2_d', '$date_yesterday_1_d', '$date_today_d'"; ?>],
            series: [
                [<?php echo "$graph_yesterday_6[0], $graph_yesterday_5[0], $graph_yesterday_4[0], $graph_yesterday_3[0], $graph_yesterday_2[0], $graph_yesterday_1[0], $graph_today[0]";?>]
            ]
        };

        optionsDailySalesChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0},
        }

        var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

        md.startAnimationForLineChart(dailySalesChart);



        /* ----------==========     Completed Tasks Chart initialization    ==========---------- */

        dataCompletedTasksChart = {
            labels: [<?php echo "'$date_year_1_d', '$date_year_d'"; ?>],
            series: [
                [<?php echo "$graph_year_1[0], $graph_year[0]"; ?>]
            ]
        };

        optionsCompletedTasksChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: <?php echo $max_year; ?>, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0}
        }

        var completedTasksChart = new Chartist.Line('#completedTasksChart', dataCompletedTasksChart, optionsCompletedTasksChart);

        // start animation for the Completed Tasks Chart - Line Chart
        md.startAnimationForLineChart(completedTasksChart);



        /* ----------==========     Emails Subscription Chart initialization    ==========---------- */

        var dataEmailsSubscriptionChart = {
          labels: [<?php echo "'$date_month_2_d', '$date_month_1_d', '$date_month_d'";?>],
          series: [
            [<?php echo "$graph_month_2[0], $graph_month_1[0], $graph_month[0]";?>]

          ]
        };
        var optionsEmailsSubscriptionChart = {
            axisX: {
                showGrid: false
            },
            low: 0,
            high: <?php echo $max_month; ?>,
            chartPadding: { top: 0, right: 5, bottom: 0, left: 0}
        };
        var responsiveOptions = [
          ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
              labelInterpolationFnc: function (value) {
                return value[0];
              }
            }
          }]
        ];
        var emailsSubscriptionChart = Chartist.Bar('#emailsSubscriptionChart', dataEmailsSubscriptionChart, optionsEmailsSubscriptionChart, responsiveOptions);

        //start animation for the Emails Subscription Chart
        md.startAnimationForBarChart(emailsSubscriptionChart);

    },

    initGoogleMaps: function(){
        var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
        var mapOptions = {
          zoom: 13,
          center: myLatlng,
          scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
          styles: [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}]

        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title:"Hello World!"
        });

        // To add the marker to the map, call setMap();
        marker.setMap(map);
    },

	showNotification: function(from, align){
    	color = Math.floor((Math.random() * 4) + 1);

    	$.notify({
        	icon: "notifications",
        	message: "Welcome to <b>Material Dashboard</b> - a beautiful freebie for every web developer."

        },{
            type: type[color],
            timer: 4000,
            placement: {
                from: from,
                align: align
            }
        });
	}



}
	 $(document).ready(function(){

		// Javascript method's body can be found in asset/js/demos.js
    	 demo.initDashboardPageCharts();

	 });
</script>

<script>
  $(".supprimer").click(function(oEvt){
    oEvt.preventDefault();
    var Id=$(this).attr("rel");
    $(".modal-body").fadeIn(1000).html('<div style="text-align:center; margin-right:auto; margin-left:auto">Patientez...</div>');
    $.ajax({
      type:"GET",
      data : "Id="+Id,
      url:"<?php echo INDEX ?>?index=view_supprimer_domain",
      error:function(msg){
      $(".modal-body").addClass("tableau_msg_erreur").fadeOut(800).fadeIn(800).fadeOut(400).fadeIn(400).html('<div style="margin-right:auto; margin-left:auto; text-align:center">Impossible de charger cette page</div>');
    },
    success:function(data){
      $(".modal-body").fadeIn(1000).html(data);
    }
    });
  });
</script>

<script>
  $(".supprimer_whitelist").click(function(oEvt){
    oEvt.preventDefault();
    var Id=$(this).attr("rel");
    $(".modal-body").fadeIn(1000).html('<div style="text-align:center; margin-right:auto; margin-left:auto">Patientez...</div>');
    $.ajax({
      type:"GET",
      data : "Id="+Id,
      url:"<?php echo INDEX ?>?index=view_supprimer_whitelist",
      error:function(msg){
      $(".modal-body").addClass("tableau_msg_erreur").fadeOut(800).fadeIn(800).fadeOut(400).fadeIn(400).html('<div style="margin-right:auto; margin-left:auto; text-align:center">Impossible de charger cette page</div>');
    },
    success:function(data){
      $(".modal-body").fadeIn(1000).html(data);
    }
    });
  });
</script>

<script>
  $(".supprimer_blacklist").click(function(oEvt){
    oEvt.preventDefault();
    var Id=$(this).attr("rel");
    $(".modal-body").fadeIn(1000).html('<div style="text-align:center; margin-right:auto; margin-left:auto">Patientez...</div>');
    $.ajax({
      type:"GET",
      data : "Id="+Id,
      url:"<?php echo INDEX ?>?index=view_supprimer_blacklist",
      error:function(msg){
      $(".modal-body").addClass("tableau_msg_erreur").fadeOut(800).fadeIn(800).fadeOut(400).fadeIn(400).html('<div style="margin-right:auto; margin-left:auto; text-align:center">Impossible de charger cette page</div>');
    },
    success:function(data){
      $(".modal-body").fadeIn(1000).html(data);
    }
    });
  });
</script>