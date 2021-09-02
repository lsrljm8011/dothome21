    // Code view
    //코드 하나
    // hljs.highlightElement(el);

    //코드 여러개
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre code').forEach((el) => {
            hljs.highlightElement(el);
        });
    });

    //Code tab menu
    const viewTit = document.querySelectorAll(".view-title ul li");
    const viewCont = document.querySelectorAll(".view-cont > div");

    viewTit.forEach((element, index) => {
        element.addEventListener("click", function(){
            
            viewTit.forEach( el => {
                el.classList.remove("active");
            });
            element.classList.add("active");

            viewCont.forEach( el => {
                el.style.display = "none";
            })
            viewCont[index].style.display = "block";
        });
    })

    //Modal-javascript
    document.querySelector(".btn-wrap button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("show");
        document.querySelector("#modal").classList.remove("hide");
    });

    document.querySelector(".modal-cont button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("hide");
    });