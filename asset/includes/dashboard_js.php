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
<script src="./asset/js/demo.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

		// Javascript method's body can be found in asset/js/demos.js
    	demo.initDashboardPageCharts();

	});
</script>

<script>
  $(".charger").click(function(oEvt){
    oEvt.preventDefault();
    var Id = document.getElementById("domain").rel;
    alert(Id);
    $(".modal-body").fadeIn(1000).html('<div style="text-align:center; margin-right:auto; margin-left:auto">Patientez...</div>');
    $.ajax({
      type:"GET",
      data : "Id="+Id,
      url:"<?php echo INDEX ?>?index=view_load_domain",
      error:function(msg){
      $(".modal-body").addClass("tableau_msg_erreur").fadeOut(800).fadeIn(800).fadeOut(400).fadeIn(400).html('<div style="margin-right:auto; margin-left:auto; text-align:center">Impossible de charger cette page</div>');
    },
    success:function(data){
      $(".modal-body").fadeIn(1000).html(data);
    }
    });
  });
</script>