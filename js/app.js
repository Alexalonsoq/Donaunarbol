const navSlide = ()=>{
    const burger =document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks =document.querySelectorAll(".nav-links li");
   
    burger.addEventListener("click",()=>{
        // toggle nav
        nav.classList.toggle("nav-active");
        // animate links
        navLinks.forEach((link, index) =>{
            // delay between each link 
            if(link.style.animation){
                link.style.animation =''
            }
            else{
                link.style.animation =`navLinkFade 0.5s ease forwards ${index/7 + .5}s`;
            }
        });

        // burger animation
        // toggle the toggle class
        burger.classList.toggle("toggle");
    });

    window.onscroll = () => {
        const header= document.querySelector("#header");
        const nav = document.querySelector('#navbar');
        const campana = document.querySelector('#campana');
        if(this.scrollY > header.offsetHeight || this.scrollY > campana.offsetHeight){
            nav.className = 'scroll';
            
        } 
         else {
            nav.className = '';
         }
    };
}



navSlide();