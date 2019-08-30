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

    <nav>
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
        <p class = "sectionBody">  NOW SHOWING - TO BE DONE LATER </p>

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
