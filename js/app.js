const navSlide = ()=>{
    const burger =document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks =document.querySelectorAll(".nav-links li");
    const contacto =document.querySelector("#contacto");
    const links =document.querySelectorAll("li a");
    const links2 =document.querySelectorAll( 'a[href="'+document.URL+'"]');
   
    // const link =document.querySelector(".cool-link");
    
    
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

   

    links.forEach((link)=>{
        console.log(links);
        link.addEventListener("click",function(){
             console.log(link); 
            links.forEach((link)=>{
                link.classList.remove("active");
                this.classList.add("active");
            });
            
            console.log("El seleccionado es "+this);
        });
    });

    links2[0].classList.add("active");




    console.log("El tam de la pantalla es "+screen.width);
   if(screen.width<=768){
    contacto.addEventListener("click",()=>{
        // nav.classList.remove("nav-active");
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
   }
    

    window.onscroll = () => {
        const header= document.querySelector("#header");
        const nav = document.querySelector('#navbar');
        // const sus = document.querySelector("body > div.content.clearfix > img");
        if(  this.scrollY > header.offsetHeight ){
            console.log(header.offsetHeight);
            nav.className = 'scroll';
            // console.log(campana.offsetHeight)
            
        } 

       
         else {
            nav.className = '';
         }
    };

 
   
   

}





navSlide();
