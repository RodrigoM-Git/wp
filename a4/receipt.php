<?php 
 include_once('tools.php'); 

if(empty($_SESSION['cart'])){
    header('Location: index.php');
}else{
    $date = date('d M Y');
    $custName = $_SESSION['cart']['cust']['name'];
    $custEmail = $_SESSION['cart']['cust']['email'];
    $custMobile = $_SESSION['cart']['cust']['mobile'];
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
    
    $priceType = 'Full';
    if($movieDay == 'MON' || $movieDay == 'WED'){
        $priceType = 'Disc';
    }else if($movieDay == 'TUE' && $movieHour == 'T12'){
        $priceType = 'Disc';
    }else if($movieDay == 'THU' && $movieHour == 'T12'){
        $priceType = 'Disc';
    }else if($movieDay == 'FRI' && $movieHour == 'T12'){
        $priceType = 'Disc';
    }
    
    $orderDetails = [$date, $custName, $custEmail, $custMobile, $movieID, $movieDay, $movieHour,
                     $staQTY, $stpQTY, $stcQTY, $fcaQTY, $fcpQTY, $fccQTY, $seatsTotal];
  
    $fp = fopen("bookings.txt", "a");
    flock($fp, LOCK_EX);
    fputcsv($fp, $orderDetails, "\t");
    flock($fp, LOCK_UN);
    fclose($fp); 
    
    topModuleReceipt('Receipt');
}
?>
<page size = "A4">
    <section id = "heading">
        <div id = "businessTitle" class = "businessTitle">
            <h1 class = title>LUNARDO CINEMAS</h1>
        </div>
        <div id = "businessDetails" class = "businessDetails">ABN: 00 123 456 789</div>
    </section>

    <section id = "customerDetails">
        <div id = "custName" class = "custName"><?= $custName ?>,</div>
        <div id = "summary" class = "summary">
            This is the receipt for your movie order at Lunardo Cinemas<br><br>
            <a href = "tickets.php" target = _blank>Click here to view your tickets</a>
        </div>
        <div id = "receiptDetails">
            <h2 id = "receiptHeader" class = "receiptHeader"><u>RECEIPT</u></h2>
            <table id = "receiptInfo" class = "smallTable">
                <tr>
                    <th>Receipt #</th>
                    <td>1234</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td><?= $date ?></td>
                </tr>
            </table>
        </div>
        <div id = "orderDetails">
            <table id = "orderSummary" class = orderSummary>
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>GST</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>Standard Adult</td>
                    <td> <?= $staQTY ?></td>
                    <td>$<?= $staTotalGST = number_format((float)($pricesObject['STA'][$priceType]*$staQTY) / 11, 2, '.', ''); ?></td>
                    <td>$<?= $staTotal = number_format((float)$pricesObject['STA'][$priceType]*$staQTY, 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Standard Concession</td>
                    <td> <?= $stpQTY ?></td>
                    <td>$<?= $stpTotalGST = number_format((float)($pricesObject['STP'][$priceType]*$stpQTY) / 11, 2, '.', ''); ?></td>
                    <td>$<?= $stpTotal = number_format((float)$pricesObject['STP'][$priceType]*$stpQTY, 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Standard Child</td>
                    <td> <?= $stcQTY ?></td>
                    <td>$<?= $stcTotalGST = number_format((float)($pricesObject['STC'][$priceType]*$stcQTY) / 11, 2, '.', ''); ?></td>
                    <td>$<?= $stcTotal = number_format((float)$pricesObject['STC'][$priceType]*$stcQTY, 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>First Class Adult</td>
                    <td> <?= $fcaQTY ?></td>
                    <td>$<?= $fcaTotalGST = number_format((float)($pricesObject['FCA'][$priceType]*$fcaQTY) / 11, 2, '.', ''); ?></td>
                    <td>$<?= $fcaTotal = number_format((float)$pricesObject['FCA'][$priceType]*$fcaQTY, 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>First Class Concession Seats</td>
                    <td> <?= $fcpQTY ?></td>
                    <td>$<?= $fcpTotalGST = number_format((float)($pricesObject['FCP'][$priceType]*$fcpQTY) / 11, 2, '.', ''); ?></td>
                    <td>$<?= $fcpTotal = number_format((float)$pricesObject['FCP'][$priceType]*$fcpQTY, 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>First Class Child</td>
                    <td> <?= $fccQTY ?></td>
                    <td>$<?= $fccTotalGST = number_format((float)($pricesObject['FCC'][$priceType]*$fccQTY) / 11, 2, '.', ''); ?></td>
                    <td>$<?= $fccTotal = number_format((float)$pricesObject['FCC'][$priceType]*$fccQTY, 2, '.', ''); ?></td>
                </tr>
            </table>
            
            <table id = "orderTotal" class = "smallTable">
                <tr>
                    <th>Sub Total</th>
                    <td>$<?= $subTotal = number_format((float)$staTotal + $stpTotal + $stcTotal + $fcaTotal + $fcpTotal + $fccTotal, 2, '.', '');?></td>
                </tr>
                <tr>
                    <th>GST Total</th>
                    <td>$<?= $totalGST = number_format((float)$staTotalGST + $stpTotalGST + $stcTotalGST + $fcaTotalGST + $fcpTotalGST + $fccTotalGST, 2, '.', '');?></td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>$<?= number_format((float)$subTotal + $totalGST, 2, '.', ''); ?></td>
                </tr>
            </table>
        </div>
        
    </section>
</page>


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