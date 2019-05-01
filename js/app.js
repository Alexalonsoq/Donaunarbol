const navSlide = ()=>{
    const burger =document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks =document.querySelectorAll(".nav-links li");
    const contacto =document.querySelector("#contacto");
    const links =document.querySelectorAll("li a");
    const actualLink =document.querySelectorAll( 'a[href="'+document.URL+'"]');
    const dona= document.getElementById("donaBoton");
    const home =document.getElementById("ImagenHome");
   
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
       
        link.addEventListener("click",function(){
            console.log("eL LINK DE DONA ES "+link);
            console.log(document.URL);
            
                links.forEach((link)=>{
                    link.classList.remove("active");
                    this.classList.add("active");
                });
                
        });
    });

   
    console.log("LInk  actual"+actualLink);
   

   actualLink[0].classList.add("active");
   dona.classList.remove("active");
   home.classList.remove("active");


   




    
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
            
            nav.className = 'scroll';
            // console.log(campana.offsetHeight)
            
        } 

       
         else {
            nav.className = '';
         }
    };

 
   
   

}





navSlide();
