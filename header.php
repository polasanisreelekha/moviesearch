<?php 
 $data = file_get_contents('http://www.imdb.com');
 $regex = '/Page 1 of (.+?) results/';
 preg_match($regex,$data,$match);
 var_dump($match); 
 echo $match[1];
 ?>