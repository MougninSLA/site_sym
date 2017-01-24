<?php 
// PHP POUR FAIRE LES GRAPHES
// DATE FORMAT xxx-xx-xx
 $date_month = date('Y-m'); 

 $date_month_1 = date('Y-m', strtotime("1 month ago"));
 $date_month_2 = date('Y-m', strtotime("2 month ago"));



 $date_month_d = date('M');
 $date_month_1_d = date('M', strtotime("1 month ago"));
 $date_month_2_d = date('M', strtotime("2 month ago"));
 
 $graph_month = graph_month_spams($date_month);
 $graph_month_1 = graph_month_spams($date_month_1);
 $graph_month_2 = graph_month_spams($date_month_2);

$max_month = max($graph_month[0], $graph_month_1[0], $graph_month_2[0]);
?>