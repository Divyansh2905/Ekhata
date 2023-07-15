
var faq = document.getElementsByClassName("faq-page");
var i;

for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        for(let j=0; j<faq.length; j++){
            faq[j].classList.remove("active");
            if(j!=i){
                faq[j].nextElementSibling.style.maxHeight=null;
            }
        }
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.add("active");

        /* Toggle between hiding and showing the active panel */
        var body = this.nextElementSibling;
        if (body.style.maxHeight) {
            body.style.maxHeight = null;
        } else {
            body.style.maxHeight = body.scrollHeight + "px";
        }
    });
}