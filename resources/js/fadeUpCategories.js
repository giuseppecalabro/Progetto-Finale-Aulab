let elements = document.querySelectorAll(".element");
elements.forEach(element => {
    
    let observer = new IntersectionObserver((entries) =>{
        if(entries[0].isIntersecting){
            element.classList.add("visible");
        }else{
            element.classList.remove("visible");
        }
    })
    observer.observe(element);
});


