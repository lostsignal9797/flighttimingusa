<?php
require __DIR__.'/includes/bootstrap.php';
if(isset($_GET['route'])){
 $from=find_city($_GET['from']??'',$cities);$to=find_city($_GET['to']??'',$cities);
 if(!$from||!$to||$from['slug']===$to['slug']){http_response_code(404);$pageTitle='Route Not Found | '.$settings['site_name'];require __DIR__.'/templates/404.php';exit;}
 $result=calculate_route($from,$to,$settings);$pageTitle=page_title($from,$to,$settings);$metaDescription=page_description($from,$to,$result);$canonical=canonical_route($from,$to,$settings);
 require __DIR__.'/templates/flight-route.php';exit;
}
if(isset($_GET['city'])){
 $city=find_city($_GET['city']??'',$cities);
 if(!$city){http_response_code(404);$pageTitle='City Not Found | '.$settings['site_name'];require __DIR__.'/templates/404.php';exit;}
 $pageTitle=$city['name'].' Flight Times & Routes | '.$settings['site_name'];$metaDescription='Explore estimated flight times and air distances from '.$city['name'].' to other U.S. cities.';$canonical=rtrim($settings['site_domain'],'/').'/city/'.$city['slug'];require __DIR__.'/templates/city.php';exit;
}
$pageTitle='Flight Times & Flight Duration Calculator | '.$settings['site_name'];$metaDescription=$settings['site_description'];$canonical=rtrim($settings['site_domain'],'/').'/';require __DIR__.'/templates/home.php';
