<?php
function page_title(array $from,array $to,array $s):string{return $from['name'].' to '.$to['name'].' Flight Time | Flight Duration';}
function page_description(array $from,array $to,array $r):string{return 'Find the estimated flight time from '.$from['name'].' to '.$to['name'].', including air distance, estimated duration and travel-time information.';}
function canonical_route(array $from,array $to,array $s):string{return route_url($from,$to,$s);}
