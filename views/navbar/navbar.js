const protocol="http://"
const host=document.getElementById("hostName").innerHTML;
const dictionaryPath= "/views/navbar/navbar-translation-en.json";
const path = protocol+host+dictionaryPath;

async function loadText(path){
  const response = await fetch(path)
  const json = await response.json();
  return json
}

async function renderText(){
const NAVBAR = await loadText(path);

document.getElementById("navbar_brand").innerHTML=NAVBAR.BRAND;
document.getElementById("navbar_buttonOne").innerHTML=NAVBAR.BUTTON_ONE;
document.getElementById("navbar_buttonTwo").innerHTML=NAVBAR.BUTTON_TWO;
document.getElementById("navbar_buttonThree").innerHTML=NAVBAR.BUTTON_THREE;
document.getElementById("navbar_buttonFour").innerHTML=NAVBAR.BUTTON_FOUR;
}

renderText();
