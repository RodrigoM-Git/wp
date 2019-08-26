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
      <section class = "about" name = "aboutus">
        <div id = "aboutus">
          <h2 class = "abouttext"> ABOUT US </h2>
        </div>
      </section>

      <section class = "prices">

        <div class = "tablehead">Seat Type</div>
        <div class = "tablehead">Seat Code</div>
        <div class = "tablehead">All day Monday and Wednesday AND 12pm on Wednesday</div>
        <div class = "tablehead">All other times</div>

        <div class = "tablecell">Standard Adult</div>
        <div class = "tablecell">STA</div>
        <div class = "tablecell">$14.00</div>
        <div class = "tablecell">$19.80</div>

        <div class = "tablecell">Standard Concession</div>
        <div class = "tablecell">STP</div>
        <div class = "tablecell">$12.50</div>
        <div class = "tablecell">$17.50</div>

        <div class = "tablecell">Standard Child</div>
        <div class = "tablecell">STC</div>
        <div class = "tablecell">$11.00</div>
        <div class = "tablecell">$15.30</div>

        <div class = "tablecell">First Class Adult</div>
        <div class = "tablecell">FCA</div>
        <div class = "tablecell">$24.00</div>
        <div class = "tablecell">$30.00</div>

        <div class = "tablecell">First Class Concession</div>
        <div class = "tablecell">FCP</div>
        <div class = "tablecell">$22.50</div>
        <div class = "tablecell">$27.00</div>

        <div class = "tablecell">First Class Child</div>
        <div class = "tablecell">FCC</div>
        <div class = "tablecell">$21.00</div>
        <div class = "tablecell">$24.00</div>

      </section>

      <section class = "nowshowing">

        NOW SHOWING - TO BE DONE LATER

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
