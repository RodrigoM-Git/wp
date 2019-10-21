<?php
    session_start();
// Put your PHP functions and modules here
    error_reporting( E_ERROR | E_WARNING | E_PARSE );

function topModule($pageTitle) {
    $html = <<<"OUTPUT"
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>$pageTitle</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>
    <script src='script.js'></script>
  </head>

  <body onload = "minDate()">

    <header>
      <div>
        <h1> LUNARDO </h1>
      </div>
    </header>

    <nav class = sticky>
      <div class = "navbar">
        <a href = "#aboutus" id = "aboutUsNav">About Us</a>
        <a href = "#prices" id = "pricesNav">Prices</a>
        <a href = "#nowshowing" id = "nowShowingNav">Now Showing</a>
      </div>
    </nav>
    <main>
OUTPUT;
    echo $html;
}

function fullOrDiscount($day, $hour){
   if($day == 'MON' || $day == 'WED'){
       return 'discount';
   }else if($day == 'TUE' && $hour == 'T12'){
       return 'discount';
   }else if($day == 'THU' && $hour == 'T12'){
       return 'discount';
   }else if($day == 'FRI' && $hour == 'T12'){
       return 'discount';
   }else{
       return 'full';
   }
}

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
    ],
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
    ],
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
    ],
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
        'Disc' => 14.00
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

?>