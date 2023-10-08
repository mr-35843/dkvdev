async function index_renderPage(){
    const dictionaryPath= "/views/index/index-translation-en.json";
    const path = protocol+host+dictionaryPath;
    const INDEX = await loadText(path);
    document.getElementById("callToAction").innerHTML=INDEX.HEADER;
    
    const indexImageOne = document.getElementById("index-image-1")
    indexImageOne.alt = INDEX.IMG_ALT_1;
    
    
    const indexImageTwo = document.getElementById("index-image-2")
    indexImageTwo.alt = INDEX.IMG_ALT_2;

    
    
    const indexImageThree = document.getElementById("index-image-3");
    indexImageThree.alt = INDEX.IMG_ALT_3;
        
    const indexArticleHeader = document.getElementById("index-article-header");
    indexArticleHeader.innerHTML=INDEX.ARTICLE_HEADER;
    indexArticleHeader.style.display="none";
    setTimeout(()=>{
        indexArticleHeader.style.display="";
        indexArticleHeader.classList.add("type-header")
    }, 1200)

    const indexArticle = document.getElementById("index-article");
    setTimeout(()=>{
        indexArticle.innerHTML=INDEX.ARTICLE_CONTENT;
        indexArticle.classList.add("fade-in")
    }, 2000)
}

index_renderPage();