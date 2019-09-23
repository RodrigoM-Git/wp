/* Insert your javascript here */
function navActive(activeSection){
  document.getElementById("aboutUsNav").style.backgroundColor = "black";
  document.getElementById("pricesNav").style.backgroundColor = "black";
  document.getElementById("nowShowingNav").style.backgroundColor = "black";

  var num = activeSection;

  if(num == 1){
      document.getElementById("aboutUsNav").style.backgroundColor = "gray";
  }
  if(num == 2){
      document.getElementById("pricesNav").style.backgroundColor = "gray";
  }
  if(num == 3){
    document.getElementById("nowShowingNav").style.backgroundColor = "gray";
  }
}
