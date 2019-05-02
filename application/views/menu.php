<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">
      

        <!-- Bootstrap y Fonts CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
        

      <meta name="description" content="">
      <meta name="author" content="">

      
      <title>
        Dona un árbol al mundo
      </title>
      <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">


      <!-- Custom fonts for this template-->
      <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link href="<?php echo base_url();?>css/sb-admin.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity=""></script>
     
      <link rel="stylesheet" href="<?php echo base_url();?>custom.css">
  
      <style>
              *{
                  margin:0;
                  padding: 0;
                  box-sizing: border-box;

              }
              html{
                scroll-behavior: smooth;
              }

              nav{
                  display: flex;
                  /* background-color:yellow; */
                  justify-content: space-evenly;
                  align-items: center;
                  min-height:12vh;
                  z-index:100;
                  transition:all .2s ease;

              }
              .botoncito{
                    padding:1% 5%;
                    background-color:#80a8d9;
                }
           

              .scroll{
                 background-color: white;
              }

              .logo{
                list-style:none;
                margin-left:10%;
                transition:transform .2s ease;
              }

              .logo:hover{
                transform: scale(1.2);
              }

              .nav-links{
                  display: flex;
                  /* background-color:pink; */
                  height:50px;
                  text-align:center;
                  align-items:center;
                  justify-content: flex-end;
                  /* flex-grow:.1; */
                  width: 70%;
              }

              .nav-links li{
                  list-style: none;
                  margin-right:5%;
                  margin-top:auto;
                  display:inline-block;
                  /* flex: 1 50%; */
              }

              .nav-links a{
                  color:black;
                  text-decoration: none;
                  font-weight: bold;
                  font-size:17px;
                  font-family:myFont;
                  display:inline-block;
                
              }

              .burger{
                  display: none;
                  cursor: pointer;
              }

              .burger div{
                  width: 25px;
                  height:3px;
                  background-color:black;
                  margin:5px;
                  transition: all 0.3s ease;
              }

              @media screen and (max-width:1064px){
                  nav-links{
                      width: 60%;
                  }
              }

               
             

              @media screen and (max-width:768px){
                  /* esconde mi menu */
                  body{
                      overflow-x: hidden;
                  }
                  
                  .nav-links{
                      position: absolute;
                      right:0;
                      height:75vh;
                      top:12vh;
                      background-color: white;
                      display: flex;
                      flex-direction: column;
                      align-items: center;
                      width: 100%;
                      /* lo saco de la pantalla asi */
                      transform: translate(100%);
                      transition:transform 0.5s ease-in;
                      
                     
                  }

                  .nav-links li{
                      opacity: 0;
                      margin-right:0;
                      margin-bottom:10%;
                      text-align:center;
                  }

                  .burger{
                      /* from display hidden to display block */
                      display: block;
                  }

                  nav{
                    position: fixed;
                    top: 0;
                    width: 100%;
                    background-color:white;
                  }

                 
                  .logo{
                    margin-left:25%;
                   
                  }

                  .nav-links a{
                    font-size:25px;
                  }

                  .botoncito{
                    background-color: #80a8d9;
                    padding: 3% 7%;
                    /* flex-grow: 1; */
                  }

                 

                 #donaBoton{
                   font-size:20px;
                   text-align:center;
                   padding:0;
                 }

                 #campaign{
                     margin-top:3%;
                 }

                  
              }

              /* lo regreso a la pantalla */
              .nav-active{
                  transform: translate(0%);
                  margin:0;
              }

              @keyframes navLinkFade{
                  from {
                      opacity: 0;
                      transform:translateX(50px);
                  }
                  to{
                      opacity: 1;
                      transform:translateX(0px);
                  }
              }

              .toggle .line1{
                  transform: rotate(-45deg) translate(-5px,6px);
              }

              .toggle .line2{
                  opacity:0;
              }

              .toggle .line3{
                  transform: rotate(45deg) translate(-5px,-6px);
              }

               .cool-link::after{
                   content:'';
                   display:block;
                   width:0;
                   height:1px;
                   background:black;
                   transition: width .3s;     
              }


            .active-dona{
                
                background-color: blue;
                
            }



        @media screen and (min-width:769px){
               
                .cool-link:hover::after, .cool-link:focus::after   {
                    width:100%;
                    transition: width .3s;
                    
                }

                .active::after{
                    content:'';
                    display:block;
                    width:100%;
                    height:1px;
                    background:black;
                    /* transition: width .3s;   */
                
                }

                .active-white::after{
                    content:'';
                    display:block;
                    width:100%;
                    height:1px;
                    background:white;
                    /* transition: width .3s;   */
                
                } 
        }

        #donaBoton{
                color:White;
                margin-top:auto;
               
                text-align:center;
                /* padding:10% 30%; */
                background-color:#80a8d9;
                border-color:#80a8d9;
                font-family:fontFooter;
                
        }

       
        
      </style>
      

    </head>
    <body>
        <div class="sticky-top" >
            <nav id="navbar">
                <div class="logo">
                  <li><a href="<?php echo base_url();?>"  id="ImagenHome" ><img  id="imagenLogo"src="<?php echo base_url();?>img/logo.png" alt="" width="100"></a></li>
                </div>
                <ul class="nav-links">
                    <li id="campaign"><a class ="cool-link" href="<?php echo base_url();?>home/campana" >Campaña</a></li>
                    <li><a class ="cool-link" href="<?php echo base_url();?>home/somos" >¿Quiénes somos?</a></li>
                    <li><a class ="cool-link" href="<?php echo base_url();?>home/arbolito" >Tu árbolito</a></li>
                    <li><a class ="cool-link" href="<?php echo base_url();?>home/sus" >Sostenibilidad</a></li>
                    <li><a class ="cool-link" href="#footer"  id="contacto">Contacto</a></li>
                    <li class="botoncito"><a id="donaBoton"  href="<?php echo base_url();?>home/dona"  role="button">DONA</a></li>
                </ul>

                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
        </div>
        <script type="text/javascript">var path = "<?php echo base_url();?>";</script>
        <script src="<?php echo base_url();?>js/app.js"></script>
    </body>



</html>