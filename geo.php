<?php

function distance($lat1, $lon1, $lat2, $lon2, $unit) {
  if (($lat1 == $lat2) && ($lon1 == $lon2)) {
    return 0;
  }
  else {
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "K") {
      return ($miles * 1.609344);
    } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
      return $miles;
    }
  }
}

// echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
echo 'Distance of Student is '. distance(19.2612859, 73.98235, 19.260983, 73.979696, "K") . " Kilometers<br>";
// echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";

if(distance(19.2612859, 73.98235, 19.260983, 73.979696, "K") <= 0.018288){
    echo 'Student is present within 60 foots';
}else{
    echo 'Student is Far From Our Class';
}
?>