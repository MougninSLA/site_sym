<?php 
// PHP POUR FAIRE LES GRAPHES
// DATE FORMAT xxx-xx-xx
 $date_year = date('Y'); 

 $date_year_1 = date('Y', strtotime("1 year ago"));



 $date_year_d = date('Y');
 $date_year_1_d = date('Y', strtotime("1 year ago"));
 
 $graph_year = graph_year_spams($date_year);
 $graph_year_1 = graph_year_spams($date_year_1);

$max_year = max($graph_year[0], $graph_year_1[0]);
?>