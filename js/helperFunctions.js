async function loadText(path){
    const response = await fetch(path)
    const json = await response.json();
    return json
  }

function zeroPadPrice(price){
  const inputPrice = price
  price = String(price / 100);
  var seperator = price.slice(-2);
    switch(seperator){
      case ".1":
      case ".2":
      case ".3":
      case ".4":
      case ".5":
      case ".6":
      case ".7":
      case ".8":
      case ".9":
        const response= String(price + "0");
        return response;
      break;
      
      default:
        return price;
      break;
    }
  }
