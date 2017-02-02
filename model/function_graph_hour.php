<?php 
// PHP POUR FAIRE LES GRAPHES
// DATE FORMAT xxx-xx-xx
 $date_today = date('Y-m-d'); 

 $hour = date('H');
 $hour_1 = date('H', strtotime("1 hour ago"));
 $hour_2 = date('H', strtotime("2 hour ago"));
 $hour_3 = date('H', strtotime("3 hour ago"));
 $hour_4 = date('H', strtotime("4 hour ago"));
 $hour_5 = date('H', strtotime("5 hour ago"));
 $hour_6 = date('H', strtotime("6 hour ago"));
 $hour_7 = date('H', strtotime("7 hour ago"));


 $date_hour = $date_today . ' ' . $hour;
 $date_hour_1 = $date_today . ' ' . $hour_1;
 $date_hour_2 = $date_today . ' ' . $hour_2;
 $date_hour_3 = $date_today . ' ' . $hour_3;
 $date_hour_4 = $date_today . ' ' . $hour_4;
 $date_hour_5 = $date_today . ' ' . $hour_5;
 $date_hour_6 = $date_today . ' ' . $hour_6;
 $date_hour_7 = $date_today . ' ' . $hour_7;
 
 $graph_hour = graph_hour_spams($date_hour);
 $graph_hour_1 = graph_hour_spams($date_hour_1);
 $graph_hour_2 = graph_hour_spams($date_hour_2);
 $graph_hour_3 = graph_hour_spams($date_hour_3);
 $graph_hour_4 = graph_hour_spams($date_hour_4);
 $graph_hour_5 = graph_hour_spams($date_hour_5);
 $graph_hour_6 = graph_hour_spams($date_hour_6);
 $graph_hour_7 = graph_hour_spams($date_hour_7);

 $graph_hour_bon = graph_hour_bons($date_hour);
 $graph_hour_bon_1 = graph_hour_bons($date_hour_1);
 $graph_hour_bon_2 = graph_hour_bons($date_hour_2);
 $graph_hour_bon_3 = graph_hour_bons($date_hour_3);
 $graph_hour_bon_4 = graph_hour_bons($date_hour_4);
 $graph_hour_bon_5 = graph_hour_bons($date_hour_5);
 $graph_hour_bon_6 = graph_hour_bons($date_hour_6);
 $graph_hour_bon_7 = graph_hour_bons($date_hour_7);
 
 $max_hour = max($graph_hour_bon[0], $graph_hour_bon_1[0], $graph_hour_bon_2[0], $graph_hour_bon_3[0], $graph_hour_bon_4[0], $graph_hour_bon_5[0], $graph_hour_bon_6[0], $graph_hour[0], $graph_hour_1[0], $graph_hour_2[0], $graph_hour_3[0], $graph_hour_4[0], $graph_hour_5[0], $graph_hour_6[0]);
?>