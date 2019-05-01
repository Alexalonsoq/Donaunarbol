const links =document.querySelectorAll("li a");
const navLinks =document.querySelectorAll(".nav-links li");
const navSlide = ()=>{
    const burger =document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
   
    const contacto =document.querySelector("#contacto");
    
    const actualLink =document.querySelectorAll( 'a[href="'+document.URL+'"]');
    const dona= document.getElementById("donaBoton");
    const home =document.getElementById("ImagenHome");
    
    // const header= document.querySelector("#header");
   
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
    const header= document.querySelector("#header");
  
 

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
        if(  this.scrollY > header.offsetHeight ){
          
            nav.className = 'scroll';
        } 

       
         else {
            nav.className = '';
            
         }

         
    };

//   vista campaña

if(document.URL=="http://localhost/tree1/Donaunarbol/home/campana" && screen.width>768){
    
    links.forEach((link) =>{
        console.log(links);
        
            link.style.color ='white';
            actualLink[0].classList.add("active-white");
            dona.classList.remove("active-white");
            home.classList.remove("active-white");
            
       
        // delay between each link 
        window.onscroll=()=>{
            const header= document.querySelector("#header");
            const nav = document.querySelector('#navbar');
            console.log(header.offsetHeight )
            console.log(this.scrollY);
            console.log(links);
            if(this.scrollY >= header.offsetHeight ){
                links.forEach((link)=>{
                    link.style.color ='';

                })
                nav.className = 'scroll';
                actualLink[0].classList.remove("active-white");
            }

            else{
                console.log("Entre al else");
                console.log(link);
                links.forEach((link)=>{
                    link.style.color ='white';
                    
                })
                actualLink[0].classList.add("active-white");
                dona.classList.remove("active-white");
                home.classList.remove("active-white");
                
                nav.className = '';
            }
        }
            
        
        
    });
}


if(document.URL=="http://localhost/tree1/Donaunarbol/home/arbolito" && screen.width>768){
    
    links.forEach((link) =>{
        console.log(links);
        
            link.style.color ='white';
            actualLink[0].classList.add("active-white");
            dona.classList.remove("active-white");
            home.classList.remove("active-white");
            
       
        // delay between each link 
        window.onscroll=()=>{
            const header= document.querySelector("#header");
            const nav = document.querySelector('#navbar');
            console.log(header.offsetHeight )
            console.log(this.scrollY);
            console.log(links);
            if(this.scrollY >= header.offsetHeight ){
                links.forEach((link)=>{
                    link.style.color ='';

                })
                nav.className = 'scroll';
                actualLink[0].classList.remove("active-white");
            }

            else{
                console.log("Entre al else");
                console.log(link);
                links.forEach((link)=>{
                    link.style.color ='white';
                    
                })
                actualLink[0].classList.add("active-white");
                dona.classList.remove("active-white");
                home.classList.remove("active-white");
                
                nav.className = '';
            }
        }
            
        
        
    });
}

    

}





navSlide();
// menu();

