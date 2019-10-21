/* Insert your javascript here */

window.onscroll = function activeNavSection(){
  var sections = document.getElementsByTagName("main") [0].getElementsByTagName("section");

  if(window.scrollY < sections[0].offsetTop){
    document.getElementById("aboutUsNav").style.backgroundColor = "black";
    document.getElementById("pricesNav").style.backgroundColor = "black";
    document.getElementById("nowShowingNav").style.backgroundColor = "black";
  }
  if(window.scrollY >= sections[0].offsetTop - 1 && window.scrollY < sections[1].offsetTop - 1){
    document.getElementById("aboutUsNav").style.backgroundColor = "gray";
    document.getElementById("pricesNav").style.backgroundColor = "black";
    document.getElementById("nowShowingNav").style.backgroundColor = "black";
  }
  if(window.scrollY >= sections[1].offsetTop - 1 && window.scrollY < sections[2].offsetTop - 1){
    document.getElementById("aboutUsNav").style.backgroundColor = "black";
    document.getElementById("pricesNav").style.backgroundColor = "gray";
    document.getElementById("nowShowingNav").style.backgroundColor = "black";
  }
  if(window.scrollY >= sections[2].offsetTop - 1){
    document.getElementById("aboutUsNav").style.backgroundColor = "black";
    document.getElementById("pricesNav").style.backgroundColor = "black";
    document.getElementById("nowShowingNav").style.backgroundColor = "gray";
  }

}

var movieIds = ["ACT", "RMC", "ANM", "AHF"];
var movieDays = ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"];
var movieHours = ["T12", "T15", "T18", "T21"];

function synopsisACT(){
    document.getElementById("synopsisTitle").innerHTML = "ENDGAME --- M";
    document.getElementById("synopsisPlot").innerHTML = "Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as                                                          his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black                                                        Widow, Captain America and Bruce Banner -- must figure out a way to bring back their                                                          vanquished allies for an epic showdown with Thanos -- the evildemigod who decimated the                                                      planet and the universe.";
    document.getElementById("butMon").innerHTML = "MON - N/A";
    document.getElementById("butTue").innerHTML = "TUE - N/A";
    document.getElementById("butWed").innerHTML = "WED - 9PM";
    document.getElementById("butThu").innerHTML = "THU - 9PM";
    document.getElementById("butFri").innerHTML = "FRI - 9PM";
    document.getElementById("butSat").innerHTML = "SAT - 6PM";
    document.getElementById("butSun").innerHTML = "SUN - 6PM";
    document.getElementById("movieTrailer").src = "https://www.youtube.com/embed/TcMBFSGVi1c";
    document.getElementById("movie-id").value = movieIds[0];
}

function synopsisRMC(){
    document.getElementById("synopsisTitle").innerHTML = "TOP END WEDDING --- M";
    document.getElementById("synopsisPlot").innerHTML = "Lauren and Ned have 10 days to find Lauren's mother who has gone AWOL in the remote far                                                      north of Australia so that they can reunite her parents and pull off their dream                                                              wedding.";
    document.getElementById("butMon").innerHTML = "MON - 6PM";
    document.getElementById("butTue").innerHTML = "TUE - 6PM";
    document.getElementById("butWed").innerHTML = "WED - N/A";
    document.getElementById("butThu").innerHTML = "THU - N/A";
    document.getElementById("butFri").innerHTML = "FRI - N/A";
    document.getElementById("butSat").innerHTML = "SAT - 3PM";
    document.getElementById("butSun").innerHTML = "SUN - 3PM";
    document.getElementById("movieTrailer").src = "https://www.youtube.com/embed/uoDBvGF9pPU";
    document.getElementById("movie-id").value = movieIds[1];
}

function synopsisANM(){
    document.getElementById("synopsisTitle").innerHTML = "DUMBO --- PG";
    document.getElementById("synopsisPlot").innerHTML = "Struggling circus owner Max Medici enlists a former star and his two children to care                                                        for Dumbo, a baby elephant born with oversized ears. When the family discovers that the                                                      animal can fly, it soon becomes the main attraction -- bringing in huge audiences and                                                        revitalizing the run-down circus. The elephant's magical ability also draws the                                                              attention of V.A. Vandevere, an entrepreneur who wants to showcase Dumbo in his latest,                                                      larger-than-life entertainment venture.";
    document.getElementById("butMon").innerHTML = "MON - 12PM";
    document.getElementById("butTue").innerHTML = "TUE - 12PM";
    document.getElementById("butWed").innerHTML = "WED - 6PM";
    document.getElementById("butThu").innerHTML = "THU - 6PM";
    document.getElementById("butFri").innerHTML = "FRI - 6PM";
    document.getElementById("butSat").innerHTML = "SAT - 12PM";
    document.getElementById("butSun").innerHTML = "SUN - 12PM";
    document.getElementById("movieTrailer").src = "https://www.youtube.com/embed/7NiYVoqBt-8";
    document.getElementById("movie-id").value = movieIds[2];
}

function synopsisAHF(){
    document.getElementById("synopsisTitle").innerHTML = "THE HAPPY PRINCE -- MA15+";
    document.getElementById("synopsisPlot").innerHTML = "His body ailing, Oscar Wilde lives out his last days in exile, observing the                                                                  difficulties and failures surrounding him with ironic detachment, humour, and the wit                                                        that defined his life.";
    document.getElementById("butMon").innerHTML = "MON - N/A";
    document.getElementById("butTue").innerHTML = "TUE - N/A";
    document.getElementById("butWed").innerHTML = "WED - 12PM";
    document.getElementById("butThu").innerHTML = "THU - 12PM";
    document.getElementById("butFri").innerHTML = "FRI - 12PM";
    document.getElementById("butSat").innerHTML = "SAT - 9PM";
    document.getElementById("butSun").innerHTML = "SUN - 9PM";
    document.getElementById("movieTrailer").src = "https://www.youtube.com/embed/4HmN9r1Fcr8";
    document.getElementById("movie-id").value = movieIds[3];
}



function butMon(){
    var movie = document.getElementById("movie-id").value;
    
    if(movie == "ACT"){
        alert("Endgame is not running at this time.");
    }
    
    if(movie == "RMC"){
        document.getElementById("movie-day").value = movieDays[0];
        document.getElementById("movie-hour").value = movieHours[2];
        document.getElementById("movieBooking").innerHTML = "You are booking for Top End Wedding on Monday 6PM.";
    }
    
    if(movie == "ANM"){
       document.getElementById("movie-day").value = movieDays[0];
       document.getElementById("movie-hour").value = movieHours[0]; 
       document.getElementById("movieBooking").innerHTML = "You are booking for Dumbo on Monday 12PM.";
    }
    
    if(movie == "AHF"){
       alert("The Happy Prince is not running at this time.");
    }
}

function butTue(){
     var movie = document.getElementById("movie-id").value;
    
    if(movie == "ACT"){
        alert("Endgame is not running at this time.");
    }
    
    if(movie == "RMC"){
        document.getElementById("movie-day").value = movieDays[1];
        document.getElementById("movie-hour").value = movieHours[2];
        document.getElementById("movieBooking").innerHTML = "You are booking for Top End Wedding on Tuesday 6PM.";
    }
    
    if(movie == "ANM"){
       document.getElementById("movie-day").value = movieDays[1];
       document.getElementById("movie-hour").value = movieHours[0];
       document.getElementById("movieBooking").innerHTML = "You are booking for Dumbo on Tuesday 12PM.";
    }
    
    if(movie == "AHF"){
       alert("The Happy Prince is not running at this time.");
    }
}

function butWed(){
     var movie = document.getElementById("movie-id").value;
    
    if(movie == "ACT"){
       document.getElementById("movie-day").value = movieDays[2];
       document.getElementById("movie-hour").value = movieHours[3];
       document.getElementById("movieBooking").innerHTML = "You are booking for Endgame on Wednesday 9PM.";
    }
    
    if(movie == "RMC"){
        alert("Top End Wedding is not running at this time.");
    }
    
    if(movie == "ANM"){
       document.getElementById("movie-day").value = movieDays[2];
       document.getElementById("movie-hour").value = movieHours[2];
       document.getElementById("movieBooking").innerHTML = "You are booking for Dumbo on Wednesday 6PM.";
    }
    
    if(movie == "AHF"){
       document.getElementById("movie-day").value = movieDays[2];
       document.getElementById("movie-hour").value = movieHours[0];
       document.getElementById("movieBooking").innerHTML = "You are booking for The Happy Prince on Wednesday 12PM.";
    }
}

function butThu(){
     var movie = document.getElementById("movie-id").value;
    
    if(movie == "ACT"){
       document.getElementById("movie-day").value = movieDays[3];
       document.getElementById("movie-hour").value = movieHours[3];
       document.getElementById("movieBooking").innerHTML = "You are booking for Endgame on Thursday 9PM.";
    }
    
    if(movie == "RMC"){
        alert("Top End Wedding is not running at this time.");
    }
    
    if(movie == "ANM"){
       document.getElementById("movie-day").value = movieDays[3];
       document.getElementById("movie-hour").value = movieHours[2];
       document.getElementById("movieBooking").innerHTML = "You are booking for Dumbo on Thursday 6PM.";
    }
    
    if(movie == "AHF"){
       document.getElementById("movie-day").value = movieDays[3];
       document.getElementById("movie-hour").value = movieHours[0];
       document.getElementById("movieBooking").innerHTML = "You are booking for The Happy Prince on Thursday 12PM.";
    }
}

function butFri(){
     var movie = document.getElementById("movie-id").value;
    
    if(movie == "ACT"){
       document.getElementById("movie-day").value = movieDays[4];
       document.getElementById("movie-hour").value = movieHours[3];
       document.getElementById("movieBooking").innerHTML = "You are booking for Endgame on Friday 9PM.";
    }
    
    if(movie == "RMC"){
       alert("Top End Wedding is not running at this time.");
    }
    
    if(movie == "ANM"){
       document.getElementById("movie-day").value = movieDays[4];
       document.getElementById("movie-hour").value = movieHours[2];
       document.getElementById("movieBooking").innerHTML = "You are booking for Dumbo on Friday 6PM.";
    }
    
    if(movie == "AHF"){
       document.getElementById("movie-day").value = movieDays[4];
       document.getElementById("movie-hour").value = movieHours[0];
       document.getElementById("movieBooking").innerHTML = "You are booking for The Happy Prince on Friday 12PM.";
    }
}

function butSat(){
     var movie = document.getElementById("movie-id").value;
    
    if(movie == "ACT"){
       document.getElementById("movie-day").value = movieDays[5];
       document.getElementById("movie-hour").value = movieHours[2];
       document.getElementById("movieBooking").innerHTML = "You are booking for Endgame on Saturday 6PM.";
    }
    
    if(movie == "RMC"){
       document.getElementById("movie-day").value = movieDays[5];
       document.getElementById("movie-hour").value = movieHours[1];
       document.getElementById("movieBooking").innerHTML = "You are booking for Top End Wedding on Saturday 3PM.";
    }
    
    if(movie == "ANM"){
       document.getElementById("movie-day").value = movieDays[5];
       document.getElementById("movie-hour").value = movieHours[0];
       document.getElementById("movieBooking").innerHTML = "You are booking for Dumbo on Saturday 12PM.";
    }
    
    if(movie == "AHF"){
       document.getElementById("movie-day").value = movieDays[5];
       document.getElementById("movie-hour").value = movieHours[3];
       document.getElementById("movieBooking").innerHTML = "You are booking for The Happy Prince on Saturday 9PM.";
    }
}

function butSun(){
    var movie = document.getElementById("movie-id").value;
    
    if(movie == "ACT"){
       document.getElementById("movie-day").value = movieDays[6];
       document.getElementById("movie-hour").value = movieHours[2];
       document.getElementById("movieBooking").innerHTML = "You are booking for Endgame on Sunday 6PM.";
    }
    
    if(movie == "RMC"){
       document.getElementById("movie-day").value = movieDays[6];
       document.getElementById("movie-hour").value = movieHours[1];
       document.getElementById("movieBooking").innerHTML = "You are booking for Top End Wedding on Sunday 3PM.";
    }
    
    if(movie == "ANM"){
       document.getElementById("movie-day").value = movieDays[6];
       document.getElementById("movie-hour").value = movieHours[0];
       document.getElementById("movieBooking").innerHTML = "You are booking for Dumbo on Sunday 12PM.";
    }
    
    if(movie == "AHF"){
       document.getElementById("movie-day").value = movieDays[6];
       document.getElementById("movie-hour").value = movieHours[3];
       document.getElementById("movieBooking").innerHTML = "You are booking for The Happy Prince on Sunday 9PM.";
    }
}

var totalPriceSTA = 0.00;
var totalPriceSTP = 0.00;
var totalPriceSTC = 0.00;
var totalPriceFCA = 0.00;
var totalPriceFCP = 0.00;
var totalPriceFCC = 0.00;
var totalPrice = 0.00;

var prices = {
    STA: { reg:19.80, dis:14.00 },
    STP: { reg:17.50, dis:12.50 },
    STC: { reg:15.30, dis:11.00 },
    FCA: { reg:30.00, dis:24.00 },
    FCP: { reg:27.00, dis:22.50 },
    FCC: { reg:24.00, dis:21.00 }
};

function updateTotalSTA(){
    var movieDay = document.getElementById("movie-day").value;
    var movieHour = document.getElementById("movie-hour").value;
    var seatSTA = document.getElementById("seats-STA").value;
    
    totalPriceSTA = 0.00;
    
    if(movieDay == "MON" || movieDay == "WED" || (movieDay == "TUE" && movieHour == "T12") || (movieDay == "THU" && movieHour == "T12") || movieDay == "FRI" && movieHour == "T12"){
        totalPriceSTA += prices.STA.dis * seatSTA;
    }else{
        totalPriceSTA += prices.STA.reg * seatSTA;
    }
}

function updateTotalSTP(){
    var movieDay = document.getElementById("movie-day").value;
    var movieHour = document.getElementById("movie-hour").value;
    var seatSTP = document.getElementById("seats-STP").value;
    
    totalPriceSTP = 0.00;
    
    if(movieDay == "MON" || movieDay == "WED" || (movieDay == "TUE" && movieHour == "T12") || (movieDay == "THU" && movieHour == "T12") || movieDay == "FRI" && movieHour == "T12"){
        totalPriceSTP += prices.STP.dis * seatSTP;
    }else{
        totalPriceSTP += prices.STP.reg * seatSTP;
    }
}

function updateTotalSTC(){
    var movieDay = document.getElementById("movie-day").value;
    var movieHour = document.getElementById("movie-hour").value;
    var seatSTC = document.getElementById("seats-STC").value;
    
    totalPriceSTC = 0.00;
    
    if(movieDay == "MON" || movieDay == "WED" || (movieDay == "TUE" && movieHour == "T12") || (movieDay == "THU" && movieHour == "T12") || movieDay == "FRI" && movieHour == "T12"){
        totalPriceSTC += prices.STC.dis * seatSTC;
    }else{
        totalPriceSTC += prices.STC.reg * seatSTC;
    }
}

function updateTotalFCA(){
    var movieDay = document.getElementById("movie-day").value;
    var movieHour = document.getElementById("movie-hour").value;
    var seatFCA = document.getElementById("seats-FCA").value;
    
    totalPriceFCA = 0.00;
    
    if(movieDay == "MON" || movieDay == "WED" || (movieDay == "TUE" && movieHour == "T12") || (movieDay == "THU" && movieHour == "T12") || movieDay == "FRI" && movieHour == "T12"){
        totalPriceFCA += prices.FCA.dis * seatFCA;
    }else{
        totalPriceFCA += prices.FCA.reg * seatFCA;
    }
}

function updateTotalFCP(){
    var movieDay = document.getElementById("movie-day").value;
    var movieHour = document.getElementById("movie-hour").value;
    var seatFCP = document.getElementById("seats-FCP").value;
    
    totalPriceFCP = 0.00;
    
    if(movieDay == "MON" || movieDay == "WED" || (movieDay == "TUE" && movieHour == "T12") || (movieDay == "THU" && movieHour == "T12") || movieDay == "FRI" && movieHour == "T12"){
        totalPriceFCP += prices.FCP.dis * seatFCP;
    }else{
        totalPriceFCP += prices.FCP.reg * seatFCP;
    }
}

function updateTotalFCC(){
    var movieDay = document.getElementById("movie-day").value;
    var movieHour = document.getElementById("movie-hour").value;
    var seatFCC = document.getElementById("seats-FCC").value;
    
    totalPriceFCC = 0.00;
    
    if(movieDay == "MON" || movieDay == "WED" || (movieDay == "TUE" && movieHour == "T12") || (movieDay == "THU" && movieHour == "T12") || movieDay == "FRI" && movieHour == "T12"){
        totalPriceFCC += prices.FCC.dis * seatFCC;
    }else{
        totalPriceFCC += prices.FCC.reg * seatFCC;
    }
}
function updateTotalPrice(){
    totalPrice = totalPriceSTA + totalPriceSTP + totalPriceSTC + totalPriceFCA + totalPriceFCP + totalPriceFCC;
        
    document.getElementById("total").value = parseFloat(Math.round(totalPrice * 100) / 100).toFixed(2);
}

function minDate(){
   var today = new Date();
   var date = today.getFullYear() + "-" + (today.getMonth() + 2);
   
   document.getElementById("cust-expiry").setAttribute("min", date);
}