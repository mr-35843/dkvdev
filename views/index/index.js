async function index_renderPage(){
    const dictionaryPath= "/views/index/index-translation-en.json";
    const path = protocol+host+dictionaryPath;
    const INDEX = await loadText(path);
    document.getElementById("callToAction").innerHTML=INDEX.HEADER;
    
    const indexImageOne = document.getElementById("index-image-1")
    indexImageOne.alt = INDEX.IMG_ALT_1;
    indexImageOne.style.display="none";
    setTimeout(()=>{
        indexImageOne.style.display="";
        indexImageOne.classList.add("fade-in");
    }, 1800);
    
    const indexImageTwo = document.getElementById("index-image-2")
    indexImageTwo.alt = INDEX.IMG_ALT_2;
    indexImageTwo.style.display="none";
    setTimeout(()=>{
        indexImageTwo.style.display="";
        indexImageTwo.classList.add("fade-in");
    },3000)
    
    const indexImageThree = document.getElementById("index-image-3");
    indexImageThree.alt = INDEX.IMG_ALT_3;
    indexImageThree.style.display="none";
    setTimeout(()=>{
        indexImageThree.style.display="";
        indexImageThree.classList.add("fade-in");
    }, 3800)
    
    const indexArticleHeader = document.getElementById("index-article-header");
    indexArticleHeader.innerHTML=INDEX.ARTICLE_HEADER;
    indexArticleHeader.style.display="none";
    setTimeout(()=>{
        indexArticleHeader.style.display="";
        indexArticleHeader.classList.add("type-header")
    }, 5000)

    const indexArticle = document.getElementById("index-article");
    setTimeout(()=>{
        indexArticle.innerHTML=INDEX.ARTICLE_CONTENT;
        indexArticle.classList.add("fade-in")
    }, 7000)
}

index_renderPage();