const navSlide = ()=>{
    const burger =document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks =document.querySelectorAll(".nav-links li");
    const contacto =document.querySelector("#contacto");
    
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

// function menu(num)
// {
//     if(num==1)
//         var seccion='#header';
//     else if(num==2)
//         var seccion='#Campana';
//     else if(num==3)
//         var seccion='#Quienes';
//     else if(num==4)
//         var seccion='#Arbolito'
//     else if(num==5)
//         var seccion='#Sotenibilidad'
//     else if(num==6)
//         var seccion='#Contacto'
//     else if(num==6)
//         var seccion='#footer'

//     $("html, body").animate({scrollTop: $(seccion).offset().top}, 1000);
// }



navSlide();
