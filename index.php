<?php
$jsondata = file_get_contents("musics.json");
$json = json_decode($jsondata,true);

$output = "<ul>";
foreach($json['musics'] as $music){
	$output .="<h4>".$music['title']."</h4>";
	$output .="<li>".$music['artist']."</li>";
	$output .="<li>".$music['genre']."</li>";
	$output .="<li>".$music['year']."</li>";		
}
$output .="</ul>";

echo $output;
?>