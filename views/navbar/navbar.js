async function navbar_renderText(){
const dictionaryPath= "/views/navbar/navbar-translation-en.json";
const path = protocol+host+dictionaryPath;
const NAVBAR = await loadText(path);

document.getElementById("navbar_brand").innerHTML=NAVBAR.BRAND;
document.getElementById("navbar_buttonOne").innerHTML=NAVBAR.BUTTON_ONE;
document.getElementById("navbar_buttonTwo").innerHTML=NAVBAR.BUTTON_TWO;
document.getElementById("navbar_buttonThree").innerHTML=NAVBAR.BUTTON_THREE;
document.getElementById("navbar_buttonFour").innerHTML=NAVBAR.BUTTON_FOUR;
}

navbar_renderText();
