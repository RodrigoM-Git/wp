<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 3</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>
    <script src='script.js'></script>
  </head>

  <body>

    <header>
      <div>
        <h1>  LUNARDO </h1>
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
      <section name = "aboutus" id = "aboutUs">
          <h2 class = "firstHeading" id = "aboutus"> ABOUT US </h2>
          <p class = "aboutus">
            Lunardo is a local cinema located in Town Street. We strive to bring a great viewing experience for all our
            loyal, local customers, and those who are stopping by the town. We provide the newest movies for your
            pleasure. <br> <br>

            Recently, Lunardo has undergone major improvements and renovations in order to enhance the customer's experience
            at our cinema. There are new seats in every cinema, and excitingly - recliner chairs in first class! The projection
            and sound systems have also been upgraded with 3D Dolby Vision Projection, and Dolby Atmos sound -
            overall creating a more immersive movie experience. <br> <br>

            For your convenience, we would love to show you what the new seats look like below:<br>

            (Left - Standard &emsp;&emsp;&emsp;&emsp;||&emsp;&emsp;&emsp;&emsp; Right - First Class) <br> <br>


            <img src = "../../media/A2/RegularSeats.jpg" alt = regSeats class = seat1>
            <img src = "../../media/A2/FirstClassSeats.png" alt = firstClassSeats class = seat2>

          </p>
      </section>

      <section name = "prices" id = "prices">
        <h2 class = "sectionHeading" id = "prices"> PRICES </h2>

        <div class = pricesBackground>
          <div class="pricesTable">
            <div class="tableBody">
              <div class="tableRow">
                <div class="tableCell">Seat Type</div>
                <div class="tableCell">Seat Code</div>
                <div class="tableCell">All day Monday and Wednesday AND 12pm on Weekdays</div>
                <div class="tableCell">All other times</div>
              </div>
              <div class="tableRow">
                <div class="tableCell">Standard Adult</div>
                <div class="tableCell">STA</div>
                <div class="tableCell">$14.00</div>
                <div class="tableCell">$19.80</div>
              </div>
              <div class="tableRow">
                <div class="tableCell">Standard Concession</div>
                <div class="tableCell">STP</div>
                <div class="tableCell">$12.50</div>
                <div class="tableCell">$17.50</div>
              </div>
              <div class="tableRow">
                <div class="tableCell">Standard Child</div>
                <div class="tableCell">STC</div>
                <div class="tableCell">$11.00</div>
                <div class="tableCell">$15.30</div>
              </div>
              <div class="tableRow">
                <div class="tableCell">First Class Adult</div>
                <div class="tableCell">FCA</div>
                <div class="tableCell">$24.00</div>
                <div class="tableCell">$30.00</div>
              </div>
              <div class="tableRow">
                <div class="tableCell">First Class Concession</div>
                <div class="tableCell">FCP</div>
                <div class="tableCell">$22.50</div>
                <div class="tableCell">$27.00</div>
              </div>
              <div class="tableRow">
                <div class="tableCell">First Class Child</div>
                <div class="tableCell">FCC</div>
                <div class="tableCell">$21.00</div>
                <div class="tableCell">$24.00</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section name = "nowshowing" id = "nowShowing">
        <h2 class = "sectionHeading" id = "nowshowing"> NOW SHOWING </h2>

          <!--MovieID = ACT-->
        <div class = nowShowing1>
          <div class = movieBox onclick = "synopsisACT()">
            <div>
            <img src = "../../media/A2/Endgame.jpg" alt = Endgame>
            </div>
            <div class = movieText>
              <p class = movieTitle> ENDGAME - M </p>
              <p class = movieTimes>
                Mon - N/A<br>
                Tue - N/A<br>
                Wed - 09PM<br>
                Thu - 09PM<br>
                Fri - 09PM<br>
                Sat - 06PM<br>
                Sun - 06PM<br>
              </p>
            </div>
          </div>
            
            <!--MovieID = RMC-->
          <div class = movieBox onclick = "synopsisRMC()">
            <div>
            <img src = "../../media/A2/TopEndWedding.jpg" alt = Endgame>
            </div>
            <div class = movieText>
              <p class = movieTitle> TOP END WEDDING - M </p>
              <p class = movieTimes>
                Mon - 06PM<br>
                Tue - 06PM<br>
                Wed - N/A<br>
                Thu - N/A<br>
                Fri - N/A<br>
                Sat - 03PM<br>
                Sun - 03PM<br>
              </p>
            </div>
          </div>
        </div>
          
          <!--MovieID = ANM-->
        <div class = nowShowing2>
          <div class = movieBox onclick = "synopsisANM()">
            <div>
            <img src = "../../media/A2/Dumbo.jpg" alt = Endgame>
            </div>
            <div class = movieText>
              <p class = movieTitle> DUMBO - PG </p>
              <p class = movieTimes>
                Mon - 12PM<br>
                Tue - 12PM<br>
                Wed - 06PM<br>
                Thu - 06PM<br>
                Fri - 06PM<br>
                Sat - 12PM<br>
                Sun - 12PM<br>
              </p>
            </div>
          </div>
            
            <!--MovieID = AHF-->
          <div class = movieBox onclick = "synopsisAHF()">
            <div>
            <img src = "../../media/A2/TheHappyPrince.jpg" alt = Endgame>
            </div>
            <div class = movieText>
              <p class = movieTitle> THE HAPPY PRINCE - MA15+ </p>
              <p class = movieTimes>
                Mon - N/A<br>
                Tue - N/A<br>
                Wed - 12PM<br>
                Thu - 12PM<br>
                Fri - 12PM<br>
                Sat - 09PM<br>
                Sun - 09PM<br>
              </p>
            </div>
          </div>
        </div>

        <div class = synopsis>
          <div class = synopsisText>
            <div class = synopsisTitle id = "synopsisTitle"> ENDGAME --- M </div>
            <div class = plotDescription id = "synopsisPlot">
            Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply
            starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner
            -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil
            demigod who decimated the planet and the universe. 
            </div>

            <div class = booking>
              MAKE A BOOKING: <br>
              <button id="butMon">MON - N/A</button>
              <button id="butTue">TUE - N/A</button>
              <button id="butWed">WED - 9PM</button>
              <button id="butThu">THU - 9PM</button>
              <button id="butFri">FRI - 9PM</button>
              <button id="butSat">SAT - 6PM</button>
              <button id="butSun">SUN - 6PM</button>
            </div>
          </div>

           <div class = trailer>
             <iframe src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id = "movieTrailer"></iframe>
           </div>
         </div>

           <div class = bookingArea>
             <form action = "https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" method = "post" target = "_blank">
                <div class = movieInfoForm>
                    <input type = "hidden" name = "movie[id]" id = "movie-id">
                    <input type = "hidden" name = "movie[day]" id = "movie-day">
                    <input type = "hidden" name = "movie[hour]" id = "movie-hour">
                </div>
    
                <div class = "standardSeatsForm">
                    <h2>Standard</h2>
                    <label> Adult </label><select name = "seats[STA]">
                        <option value = "">Please Select</option>
                        <option value = "1">1</option>
                        <option value = "2">2</option>
                        <option value = "3">3</option>
                        <option value = "4">4</option>
                        <option value = "5">5</option>
                        <option value = "6">6</option>
                        <option value = "7">7</option>
                        <option value = "8">8</option>
                        <option value = "9">9</option>
                        <option value = "10">10</option>
                    </select>
                    <label> Concession </label><select name = "seats[STP]">
                        <option value = "">Please Select</option>
                        <option value = "1">1</option>
                        <option value = "2">2</option>
                        <option value = "3">3</option>
                        <option value = "4">4</option>
                        <option value = "5">5</option>
                        <option value = "6">6</option>
                        <option value = "7">7</option>
                        <option value = "8">8</option>
                        <option value = "9">9</option>
                        <option value = "10">10</option>
                    </select>
                    <label> Children </label><select name = "seats[STC]">
                        <option value = "">Please Select</option>
                        <option value = "1">1</option>
                        <option value = "2">2</option>
                        <option value = "3">3</option>
                        <option value = "4">4</option>
                        <option value = "5">5</option>
                        <option value = "6">6</option>
                        <option value = "7">7</option>
                        <option value = "8">8</option>
                        <option value = "9">9</option>
                        <option value = "10">10</option>
                    </select>
                </div>
                 
                <div class = "firstClassSeatsForm">
                    <h2>First Class</h2>
                    <label> Adult </label><select name = "seats[FCA]">
                        <option value = "">Please Select</option>
                        <option value = "1">1</option>
                        <option value = "2">2</option>
                        <option value = "3">3</option>
                        <option value = "4">4</option>
                        <option value = "5">5</option>
                        <option value = "6">6</option>
                        <option value = "7">7</option>
                        <option value = "8">8</option>
                        <option value = "9">9</option>
                        <option value = "10">10</option>
                    </select>
                    <label> Concession </label><select name = "seats[FCP]">
                        <option value = "">Please Select</option>
                        <option value = "1">1</option>
                        <option value = "2">2</option>
                        <option value = "3">3</option>
                        <option value = "4">4</option>
                        <option value = "5">5</option>
                        <option value = "6">6</option>
                        <option value = "7">7</option>
                        <option value = "8">8</option>
                        <option value = "9">9</option>
                        <option value = "10">10</option>
                    </select>
                    <label> Children </label><select name = "seats[FCC]">
                        <option value = "">Please Select</option>
                        <option value = "1">1</option>
                        <option value = "2">2</option>
                        <option value = "3">3</option>
                        <option value = "4">4</option>
                        <option value = "5">5</option>
                        <option value = "6">6</option>
                        <option value = "7">7</option>
                        <option value = "8">8</option>
                        <option value = "9">9</option>
                        <option value = "10">10</option>
                    </select>
                </div>
                 
                 <div class = "totalPrice">
                     <label> Total $ </label><input type = "text" name = "total" readonly>
                 </div>
                 
                <div class = "customerInfo">
                    <label> Name </label><input type = "text" name = "cust[name]">
                    <label> Email </label><input type = "email" name = "cust[email]">
                    <label> Mobile </label><input type = "tel" name = "cust[mobile]">
                    <label> Credit Card </label><input type = "text" name = "cust[card]">
                    <label> Expiry </label><input type = "month" name = "cust[expiry]">
                    <input type = "submit" name = "order">
                </div>
                 
             </form>
           </div>

      </section>
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
      </script> Rodrigo Miguel Rojas - s3784466 Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
