<?php
function haversine_miles(float $lat1,float $lon1,float $lat2,float $lon2): float {
 $r=3958.7613;$dLat=deg2rad($lat2-$lat1);$dLon=deg2rad($lon2-$lon1);
 $a=sin($dLat/2)**2+cos(deg2rad($lat1))*cos(deg2rad($lat2))*sin($dLon/2)**2;
 return $r*2*asin(min(1,sqrt($a)));
}
function route_distances(array $from,array $to,array $s):array{
 $air=haversine_miles($from['lat'],$from['lon'],$to['lat'],$to['lon']);
 return ['air'=>$air,'car'=>$air*$s['car_distance_factor'],'bus'=>$air*$s['bus_distance_factor'],'train'=>$air*$s['train_distance_factor'],'walking'=>$air*$s['walking_distance_factor'],'bicycle'=>$air*$s['bicycle_distance_factor']];
}
