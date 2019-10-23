<?php
 include_once('tools.php');

if(empty($_SESSION['cart'])){
    header('Location: index.php');
}else{
    
    $movieID = $_SESSION['cart']['movie']['id'];
    $movieDay = $_SESSION['cart']['movie']['day'];
    $movieHour = $_SESSION['cart']['movie']['hour'];
     $staQTY = $_SESSION['cart']['seats']['STA'];
    if(empty($staQTY))
        $staQTY = 0;
    $stpQTY = $_SESSION['cart']['seats']['STP'];
    if(empty($stpQTY))
        $stpQTY = 0;
    $stcQTY = $_SESSION['cart']['seats']['STC'];
    if(empty($stcQTY))
        $stcQTY = 0;
    $fcaQTY = $_SESSION['cart']['seats']['FCA'];
    if(empty($fcaQTY))
        $fcaQTY = 0;
    $fcpQTY = $_SESSION['cart']['seats']['FCP'];
    if(empty($fcpQTY))
        $fcpQTY = 0;
    $fccQTY = $_SESSION['cart']['seats']['FCC'];
    if(empty($fccQTY))
        $fccQTY = 0;
    $seatsTotal = $staQTY + $stpQTY + $stcQTY + $fcaQTY + $fcpQTY + $fccQTY;
    
    $movieFullDay = '';
        if($movieDay == 'MON'){
        $movieFullDay = 'Monday';
    }else if($movieDay == 'TUE'){
        $movieFullDay = 'Tuesday';
    }else if($movieDay == 'WED'){
        $movieFullDay = 'Wednesday';
    }else if($movieDay == 'THU'){
        $movieFullDay = 'Thursday';
    }else if($movieDay == 'FRI'){
        $movieFullDay = 'Friday';
    }else if($movieDay == 'SAT'){
        $movieFullDay = 'Saturday';
    }else if($movieDay == 'SUN'){
        $movieFullDay = 'Sunday';
    }
    
    $movieTime = '';
        if($movieHour == 'T12'){
        $movieTime = '12:00pm';
    }else if($movieHour == 'T15'){
        $movieTime = '3:00pm';
    }else if($movieHour == 'T18'){
        $movieTime = '6:00pm';
    }else if($movieHour == 'T21'){
        $movieTime = '9:00pm';
    }
    
    $movieName = '';
       if($movieID == 'ACT'){
        $movieName = 'Endgame';
    }else if($movieID == 'RMC'){
        $movieName = 'Top End Wedding';
    }else if($movieID == 'ANM'){
        $movieName = 'Dumbo';
    }else if($movieID == 'AHF'){
        $movieName = 'The Happy Prince';
    }
    
    
    
    topModuleReceipt('Tickets');
    
    for($x = 0; $x < $staQTY; $x++){
        makeTicket($movieName, $movieDay, $movieTime, 'Standard Adult');
    }
    for($x = 0; $x < $stpQTY; $x++){
        makeTicket($movieName, $movieDay, $movieTime, 'Standard Concession');
    }
    for($x = 0; $x < $stcQTY; $x++){
        makeTicket($movieName, $movieDay, $movieTime, 'Standard Child');
    }
    for($x = 0; $x < $fcaQTY; $x++){
        makeTicket($movieName, $movieDay, $movieTime, 'First Class Adult');
    }
    for($x = 0; $x < $fcpQTY; $x++){
        makeTicket($movieName, $movieDay, $movieTime, 'First Class Concession');
    }
    for($x = 0; $x < $fccQTY; $x++){
        makeTicket($movieName, $movieDay, $movieTime, 'First Class Child');
    }
}
?>

 </main>

    <footer id = "footer">
      <div>
        Lunardo Cinemas. Contact us at...<br>
        Email: customerhelp@lunardocinemas.org<br>
        Phone: 0384756393<br>
        Address: 203 Town Street 1111<br>
      </div>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Rodrigo Miguel Rojas - s3784466 Last modified <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </footer>    

  </body>
</html>


<div class = debugSection>
    <h3> DEBUG SECTION </h3>
    <?php
    showPostDetails();
    showSessionDetails();
    ?>
    <form action = "index.php" method = "post">
    <input type = "submit" name = "clear-session" value = "clear session">
    </form>
    <?php
    printMyCode();
    ?>
</div>