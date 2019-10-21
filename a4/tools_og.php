<?php
  session_start();

//provided helpful code
function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else 
    echo $ret; 
}

preShow($_POST); // ie echo a string
preShow($_SESSION);

$aaarg = preShow($my_bad_array, true); // ie return as a string
echo "Why is \n $aaarg \n not working?"; 

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}

printMyCode(); // prints all lines of code in this file with line numbers

function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "/* Generated with A4's php2js() function */";
  echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
  echo "</script>\n\n";
}

$pricesArrayPHP = array ( ... );
php2js($pricesArrayPHP, 'pricesArrayJS'); // ie echos javascript equivalent code

if (isset($_POST['session-reset'])) {
  foreach($_SESSION as $something => &$whatever) {
    unset($whatever);
  }
}

// Put your PHP functions and modules here
error_reporting( E_ERROR | E_WARNING | E_PARSE );

$moviesObject = [
    'ACT' => [
        'title' => 'Endgame',
        'rating' => 'M',
        'description' => "Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as                                                       his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black                                                       Widow, Captain America and Bruce Banner -- must figure out a way to bring back their                                                       vanquished allies for an epic showdown with Thanos -- the evildemigod who decimated the                                                     planet and the universe.",
        'screenings' => [
            'WED' => 'T21',
            'THU' => 'T21',
            'FRI' => 'T21',
            'SAT' => 'T18',
            'SUN' => 'T18'
        ]
    ]
    'RMC' => [
        'title' => 'Top End Wedding',
        'rating' => 'M',
        'description' => "Lauren and Ned have 10 days to find Lauren's mother who has gone AWOL in the remote far                                                     north of Australia so that they can reunite her parents and pull off their dream                                                           wedding.",
        'screenings' => [
            'MON' => 'T18',
            'TUE' => 'T18',
            'SAT' => 'T15',
            'SUN' => 'T15'
        ]
    ]
    'ANM' => [
        'title' => 'Dumbo',
        'rating' => 'PG',
        'description' => "Struggling circus owner Max Medici enlists a former star and his two children to care                                                       for Dumbo, a baby elephant born with oversized ears. When the family discovers that the                                                     animal can fly, it soon becomes the main attraction -- bringing in huge audiences and                                                       revitalizing the run-down circus. The elephant's magical ability also draws the                                                             attention of V.A. Vandevere, an entrepreneur who wants to showcase Dumbo in his latest,                                                     larger-than-life entertainment venture.",
        'screenings' => [
            'MON' => 'T12',
            'TUE' => 'T12',
            'WED' => 'T18',
            'THU' => 'T18',
            'FRI' => 'T18',
            'SAT' => 'T12',
            'SUN' => 'T12'
        ]
    ]
    'AHF' => [
        'title' => 'The Happy Prince',
        'rating' => 'MA15+',
        'description' => "His body ailing, Oscar Wilde lives out his last days in exile, observing the                                                               difficulties and failures surrounding him with ironic detachment, humour, and the wit                                                       that defined his life.",
        'screenings' => [
            'WED' => 'T12',
            'THU' => 'T12',
            'FRI' => 'T12',
            'SAT' => 'T21',
            'SUN' => 'T21'
        ]
    ]
];
    
$pricesObject = [
    'STA' => [
        'Full' => 19.80,
        'Disc' => 14.00,
    ],
    'STP' => [
        'Full' => 17.50,
        'Disc' => 12.50
    ],
    'STC' => [
        'Full' => 15.30,
        'Disc' => 11.00
    ],
    'FCA' => [
        'Full' => 30.00,
        'Disc' => 24.00
    ],
    'FCP' => [
        'Full' => 27.00,
        'Disc' => 22.50
    ],
    'FCC' => [
        'Full' => 24.00,
        'Disc' => 21.00
    ] 
];   

function isFullOrDiscount( $day, $hour ) { 
  if($day == 'MON' || $day == 'WED'){
      return 'discount'
  }else if($day == 'TUE' && $hour == 'T12'){
      return 'discount'
  }else if($day == 'THU' && $hour == 'T12'){
      return 'discount'
  }else if($day == 'FRI' && $hour == 'T12'){
      return 'discount'
  }else{
      return 'full'
  }
};


$days = ['MON','TUE','WED','THU','FRI','SAT','SUN','FUN'];
$hours = ['T12', 'T15', 'T18', 'T21', 'T00']; 

foreach ( $days as $day ) {
  foreach ( $hours as $hour ) {
    echo '<p>'.$day.' '.$hour.': '.isFullOrDiscount( $day, $hour ).'</p>';
    // or this → echo "<p>$day $hour: ".isFullOrDiscount( $day, $hour )."</p>";
  }
}





?> 