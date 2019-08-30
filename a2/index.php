<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <div>
        <h1>  LUNARDO </h1>
      </div>
    </header>

    <nav class = sticky>
      <div class = "navbar">
        <a href = "#aboutus">About Us</a>
        <a href = "#prices">Prices</a>
        <a href = "#nowshowing">Now Showing</a>
      </div>
    </nav>

    <main>
      <section name = "aboutus">
          <h2 class = "firstHeading" id = "aboutus"> ABOUT US </h2>
          <p class = "aboutus">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
             Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
             anim id est laborum.
           </p>
      </section>

      <section name = "prices" >
        <h2 class = "sectionHeading" id = "prices"> PRICES </h2>

        <div class = pricesBackground>
          <div class="pricesTable">
            <div class="tableBody">
              <div class="tableRow">
                <div class="tableCell">Seat Type</div>
                <div class="tableCell">Seat Code</div>
                <div class="tableCell">All day Monday and Wednesday AND 12pm on Wednesday</div>
                <div class="tableCell">All other time</div>
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

      <section name = "nowshowing">
        <h2 class = "sectionHeading" id = "nowshowing"> NOW SHOWING </h2>

        <div class = nowShowing1>
          <div class = movieBox>
            <div>
            <img src = "../../media/Endgame.jpg" alt = Endgame>
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

          <div class = movieBox>
            <div>
            <img src = "../../media/TopEndWedding.jpg" alt = Endgame>
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

        <div class = nowShowing2>
          <div class = movieBox>
            <div>
            <img src = "../../media/Dumbo.jpg" alt = Endgame>
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

          <div class = movieBox>
            <div>
            <img src = "../../media/TheHappyPrince.jpg" alt = Endgame>
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
            <div class = synopsisTitle> ENDGAME --- M </div>
            <div class = plotDescription>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
              dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
              anim id est laborum.
            </div>

            <div class = booking>
              MAKE A BOOKING: <br>
              <button>MON - N/A</button>
              <button>TUE - N/A</button>
              <button>WED - 9PM</button>
              <button>THU - 9PM</button>
              <button>FRI - 9PM</button>
              <button>SAT - 6PM</button>
              <button>SUN - 6PM</button>
            </div>
          </div>

           <div class = trailer>
             <iframe src="https://www.youtube.com/watch?v=TcMBFSGVi1c"></iframe>
           </div>



      </section>
    </main>

    <footer>
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
