<?php
 
$api_key = 'Y237d0973f3a46c4588d1bd63d2e8d0af';
 
$tag = 'flower,bird,peacock';
$perPage = 25;
$url = 'http://api.flickr.com/services/rest/?method=flickr.photos.search';
$url.= '&api_key='.$api_key;
$url.= '&tags='.$tag;
$url.= '&per_page='.$perPage;
$url.= '&format=json';
$url.= '&nojsoncallback=1';
 
$response = json_decode(file_get_contents($url));
$photo_array = $response->photos->photo;
 
// print ("<pre>");
// print_r($response);
// print ("</pre>");
 
foreach($photo_array as $single_photo){
 
$farm_id = $single_photo->farm;
$server_id = $single_photo->server;
$photo_id = $single_photo->id;
$secret_id = $single_photo->secret;
$size = 'm';
 
$title = $single_photo->title;
 
$photo_url = 'http://farm'.$farm_id.'.staticflickr.com/'.$server_id.'/'.$photo_id.'_'.$secret_id.'_'.$size.'.'.'jpg';
 
print "<img title='".$title."' src='".$photo_url."' />";
 
}
 
?>
698751789ba9e3c8