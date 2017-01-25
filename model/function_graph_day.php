<?php 
// PHP POUR FAIRE LES GRAPHES
// DATE FORMAT xxx-xx-xx
 $date_today = date('Y-m-d'); 

 $date_yesterday_1 = date('Y-m-d', strtotime("1 day ago"));
 $date_yesterday_2 = date('Y-m-d', strtotime("2 day ago"));
 $date_yesterday_3 = date('Y-m-d', strtotime("3 day ago"));
 $date_yesterday_4 = date('Y-m-d', strtotime("4 day ago"));
 $date_yesterday_5 = date('Y-m-d', strtotime("5 day ago"));
 $date_yesterday_6 = date('Y-m-d', strtotime("6 day ago"));
 $date_yesterday_7 = date('Y-m-d', strtotime("7 day ago"));


 $date_today_d = date('D');
 $date_yesterday_1_d = date('D', strtotime("1 day ago"));
 $date_yesterday_2_d = date('D', strtotime("2 day ago"));
 $date_yesterday_3_d = date('D', strtotime("3 day ago"));
 $date_yesterday_4_d = date('D', strtotime("4 day ago"));
 $date_yesterday_5_d = date('D', strtotime("5 day ago"));
 $date_yesterday_6_d = date('D', strtotime("6 day ago"));
 $date_yesterday_7_d = date('D', strtotime("7 day ago"));
 
 $graph_today = graph_day_spams($date_today);
 $graph_yesterday_1 = graph_day_spams($date_yesterday_1);
 $graph_yesterday_2 = graph_day_spams($date_yesterday_2);
 $graph_yesterday_3 = graph_day_spams($date_yesterday_3);
 $graph_yesterday_4 = graph_day_spams($date_yesterday_4);
 $graph_yesterday_5 = graph_day_spams($date_yesterday_5);
 $graph_yesterday_6 = graph_day_spams($date_yesterday_6);
 $graph_yesterday_7 = graph_day_spams($date_yesterday_7);

 $graph_today_bon = graph_day_bons($date_today);
 $graph_yesterday_bon_1 = graph_day_bons($date_yesterday_1);
 $graph_yesterday_bon_2 = graph_day_bons($date_yesterday_2);
 $graph_yesterday_bon_3 = graph_day_bons($date_yesterday_3);
 $graph_yesterday_bon_4 = graph_day_bons($date_yesterday_4);
 $graph_yesterday_bon_5 = graph_day_bons($date_yesterday_5);
 $graph_yesterday_bon_6 = graph_day_bons($date_yesterday_6);
 $graph_yesterday_bon_7 = graph_day_bons($date_yesterday_7);
?>