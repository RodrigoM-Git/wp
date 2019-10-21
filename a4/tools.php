<?php
  session_start();

// Put your PHP functions and modules here
function top_module($pageTitle){
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
};
?>