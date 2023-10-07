async function loadText(path){
    const response = await fetch(path)
    const json = await response.json();
    return json
  }