<?php
function calculate_route(array $from,array $to,array $s):array{
 $d=route_distances($from,$to,$s);
 $hours=[
 'flight'=>$d['air']/$s['flight_speed_mph']+$s['flight_overhead_minutes']/60,
 'car'=>$d['car']/$s['car_speed_mph'],
 'bus'=>$d['bus']/$s['bus_speed_mph'],
 'train'=>$d['train']/$s['train_speed_mph'],
 'walking'=>$d['walking']/$s['walking_speed_mph'],
 'bicycle'=>$d['bicycle']/$s['bicycle_speed_mph']];
 $carFuel=($d['car']/$s['car_mpg'])*$s['gas_price_per_gallon'];
 $airFuel=$hours['flight']*$s['aircraft_fuel_gallons_per_hour'];
 return ['distance'=>$d,'hours'=>$hours,'car_fuel_cost'=>$carFuel,'aircraft_fuel_gallons'=>$airFuel,'aircraft_fuel_cost'=>$airFuel*$s['jet_fuel_price_per_gallon']];
}
