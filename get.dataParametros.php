<?php
/*
Static Info to Load Screen 1
*** PARAMETERS REQUIRED: ***
    
*/
$StaticInfo = array(
    'zoom' => 10,
    'latcenter'=> -12.0167,
    'longcenter'=> -77.1167,
    'datos' => [
        ['Id'=>1,
         'Name' => 'aerpuerto',
         'latitude'=> -12.0167,
         'longitude'=> -77.1167],
        ['Id'=>2,
         'Name' => 'estadio',
         'latitude'=> -12.0673,
         'longitude'=> -77.0337],
        ['Id'=>3,
         'Name' => 'la nose',
         'latitude'=> -12.0689,
         'longitude'=> -77.1637],
         ['Id'=>4,
         'Name' => 'mar',
         'latitude'=> -12.1689,
         'longitude'=> -77.2637],
         ['Id'=>5,
         'Name' => 'marte',
         'latitude'=> -12.1689,
         'longitude'=> -77.2937]
    ]
    
    // Maybe I could include Alerts
);
echo json_encode($StaticInfo);
?>
