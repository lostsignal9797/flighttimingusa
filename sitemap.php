<?php
require __DIR__.'/includes/bootstrap.php';
header('Content-Type: application/xml; charset=utf-8');
$base=rtrim($settings['site_domain'],'/');
$urls=[$base.'/'];
foreach($cities as $city)$urls[]=$base.'/city/'.$city['slug'];
$count=0;
foreach($cities as $from){foreach($cities as $to){if($from['slug']===$to['slug'])continue;if($count>=5000)break 2;$urls[]=route_url($from,$to,$settings);$count++;}}
echo '<?xml version="1.0" encoding="UTF-8"?>';echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';foreach($urls as $url)echo '<url><loc>'.htmlspecialchars($url,ENT_XML1).'</loc></url>';echo '</urlset>';