async function index_renderText(){
    const dictionaryPath= "/views/index/index-translation-en.json";
    const path = protocol+host+dictionaryPath;
    const INDEX = await loadText(path);

    document.getElementById("callToAction").innerHTML=INDEX.HEADER;
    document.getElementById("index-image-1").alt = INDEX.IMG_ALT_1;
    document.getElementById("index-image-2").alt = INDEX.IMG_ALT_2;
    document.getElementById("index-image-3").alt = INDEX.IMG_ALT_3;
    document.getElementById("index-article-header").innerHTML=INDEX.ARTICLE_HEADER;
    document.getElementById("index-article").innerHTML=INDEX.ARTICLE_CONTENT;
}

index_renderText();