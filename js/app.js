const links =document.querySelectorAll("li a");
const navLinks =document.querySelectorAll(".nav-links li");
const dona= document.getElementById("donaBoton");
const home =document.getElementById("ImagenHome");
const navSlide = ()=>{
    const burger =document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
   
    const contacto =document.querySelector("#contacto");
    
    const actualLink =document.querySelectorAll( 'a[href="'+document.URL+'"]');
    const logo=document.getElementById("imagenLogo");
    
    
    
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

   
    const header= document.querySelector("#header");
  
 
    dona.classList.remove("active");
   home.classList.remove("active");
   actualLink[0].classList.add("active");
   dona.classList.remove("active");
   home.classList.remove("active");


   




    
   if(screen.width<=768){
    contacto.addEventListener("click",()=>{
        
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
if(document.URL==path+"home/campana" && screen.width>768){
    logo.src= path+"/img/logo2.png";
    
    links.forEach((link) =>{
       
        
            link.style.color ='white';
            actualLink[0].classList.add("active-white");
            dona.classList.remove("active-white");
            home.classList.remove("active-white");
            
       
        // delay between each link 
        window.onscroll=()=>{
            const header= document.querySelector("#header");
            const nav = document.querySelector('#navbar');
           
            if(this.scrollY >= header.offsetHeight ){
                links.forEach((link)=>{
                    link.style.color ='';

                })
                nav.className = 'scroll';
                actualLink[0].classList.remove("active-white");
                logo.src= path+"/img/logo.png";
            }

            else{
               
                links.forEach((link)=>{
                    link.style.color ='white';
                    
                })
                logo.src= path+"/img/logo2.png";
                actualLink[0].classList.add("active-white");
                dona.classList.remove("active-white");
                home.classList.remove("active-white");
                
                nav.className = '';
            }
        }
            
        
        
    });
}

// vista tu arbolito
if(document.URL==path+"home/arbolito" && screen.width>768){
    
    links.forEach((link) =>{
        
        
            link.style.color ='white';
            actualLink[0].classList.add("active-white");
            dona.classList.remove("active-white");
            home.classList.remove("active-white");
            logo.src= path+"/img/logo2.png";
            
       
       
        window.onscroll=()=>{
            const header= document.querySelector("#header");
            const nav = document.querySelector('#navbar');
           
            if(this.scrollY >= header.offsetHeight ){
                links.forEach((link)=>{
                    link.style.color ='';

                })
                nav.className = 'scroll';
                actualLink[0].classList.remove("active-white");
                logo.src= path+"/img/logo.png";
            }

            else{
               
                links.forEach((link)=>{
                    link.style.color ='white';
                    
                })
                actualLink[0].classList.add("active-white");
                dona.classList.remove("active-white");
                home.classList.remove("active-white");
                logo.src= path+"/img/logo2.png";
                
                nav.className = '';
            }
        }
            
    });
}

    

}





navSlide();


