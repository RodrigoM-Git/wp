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
