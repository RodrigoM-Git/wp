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
}

