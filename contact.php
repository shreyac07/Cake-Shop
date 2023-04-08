<?php include('partials-front/menu.php'); ?>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
     *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }
    .contact{
        position: relative;
        min-height: 100vh;
        padding: 50px 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

    }
    .contact .content{
        max-width: 800px;
        text-align: center;

    }
    .contact .content h2{
        font-size: 36px;
        font-weight: 500;
        
    }
    .contact .content p{
        
        font-weight: 300;
        
    }
    
     .mapbox{
         position: relative;
         width: 600px;
         height: 500px;
         background: white;
     }
      .mapbox iframe{
        width: 100%;
         height: 100%;
     }
     .call-add-email{
    display:grid;
    grid-template-columns: 1fr 1fr;
    column-gap:20px;
    row-gap:20px;
  }
  .call{
    margin-left:180px;
  }
  .ad{
    margin-left:90px;
  }
  .em{
    margin-left: 600px;
    margin-top:-60px;
  }
  .calu{
    margin-left:20px;
    font-size:18px;
    font-weight: bold;
  }
  .addu{
    margin-left:100px;
    font-size:20px;
    font-weight: bold;
  }
  .email{
    margin-left:45px;
    font-size:20px;
    font-weight: bold;
  }
  .call-icon{
    margin-left:35px;
    font-size:20px;
    color: #ff6b81;
  }
  .add-icon{
    margin-left:140px;
    font-size:20px;
    color:#ff6b81;
  }
  .email-icon{
    margin-left:60px;
    font-size:20px;
    color: #ff6b81;
  }
 
  .caln{
    margin-left:5px;
    font-weight:300;
  }
  .email-send{
    font-size: x-large;
    font-weight: bold;
    text-align:center;
    color:#ff6b81;
  }
  .email-write{
    text-align:center;
    font-size:larger;
    font-weight:bold;
  }
  .contact-name{
    margin-left:60px;
    height: 30px;
    width:700px;
    border-radius: 10px;
    border-width:1px;
    margin-bottom:15px;
    padding:5px;
    padding-left:3px;

  }
  .contact-email{
    height: 30px;
    width:690px;
    border-radius: 10px;
    border-width:1px;
    padding:5px;
    padding-left:3px;
  }
  .contact-subject{
    margin-left:60px;
    height: 30px;
    width:1400px;
    border-radius: 10px;
    border-width:1px;
    margin-bottom:15px;
    padding:5px;
    padding-left:3px;
  }
  .time{
    margin-left:50px;
    margin-right:100px;
  }
  .time-table{
    margin-left:100px;
    font-size:20px;
    font-weight:bold;
    width:200px;
  }
  .time-icon{
    margin-left:140px;
    font-size:20px;
    color:#ff6b81;
  }
  .open{
    width:400px;
    font-weight:200;
  }
  .message{
    margin-left:60px;
    width:1400px;
    border-radius: 10px;
    border-width:1px;
    padding:5px;
    padding-left:3px;

  }
  .bt{
    background-color:#ff6b81;
     padding-left: 5px;
    padding-right: 5px;
    padding-top: 5px;
    padding-bottom: 5px;
    width:110px;
    height: 40px;
    border:none;
    border-radius:10px;
    cursor:pointer;
    color:white;
    transition: background-color 0.15s,color 0.15s;
    margin-left:60px;
  }
  .bt:hover {
    background-color: #ff4757;
    color:white;
  }
  .myform{
    margin-right:50px;
  }
  .bakers{
    font-weight:300;
  }
     @media only screen and (max-width:768px){
     /* .myform
     {
        width: 100%;
        margin: 4% auto;
     } */
     .contact-name{
        width:400px;
        margin-left:100px;
        display:block;
     }
     .contact-email{
        width:400px;
        margin-left:100px;
        margin-bottom:10px;
     }
     .contact-subject{
        width:400px;
        margin-left:100px;
     }
      .message{
         width:400px; 
        margin-left:100px;
     }  
     .bt{
        margin-left:100px
     }
     .call-add-email{
        grid-template-columns:1fr;
        row-gap:10px;
     }
     .ad{
        margin-right:600px;
        margin-left:-20px;
        width:400px;
     }
     .time{
        margin-right:600px;
        margin-left:-20px;
     }
     .call{
        margin-right:550px;
         margin-left:-10px;
     }
     .calu{
        width:200px;
        margin-left:100px;
     }
     .call-icon{
        margin-left:120px;
     }
     .caln{
        margin-left:80px;
        width:200px;
     }
     .cont{
    margin-left: 200px;
    margin-right: 50px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
   
  }
  .cake{
      font-weight:bold;
      width:400px;
      margin-right:160px;
      margin-top:-90px;
    }
    .content{
      margin-top:50px;
    }
       .em{
        margin-top:10px;
        margin-right:500px;
        margin-left:50px;
     } 
    }
    .cake{
      font-weight:bold;
    
    }
</style>
 
<section class="contact">
        <div class="content">
            <h2 style="color: #ff6b81" ><strong>Contact Us</strong></h2>

            <br> 
            <div class="cont">
            <h4 class="cake">We love to hear from you. Feel free to contact us. We always try to give our
                 best towards that you can enjoy your cake🎂 with all of your heart.❤️</h4></div>
                 <br> <br> 
                 <!-- <img src="images/map.PNG" alt="map image" class="img-responsive">    -->
                 <!-- <div class=map></div> -->
                 <div class=mapBox>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3232.2597839300925!2d88.46537406902294!3d22.71019550550265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f899b190979393%3A0xf1c7d3e848465ae2!2sBaker%E2%80%99s%20Delight!5e0!3m2!1sen!2sin!4v1644048095502!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                 </div>
                   
         </div>
         <br><br>
         <div class="container">
             
            <div class="call-add-email">
               
                <div class="ad">
                    <div class="add-icon"> <i class="fas fa-map-marker-alt"></i></div>
                   
                    <h4 class="addu">Address</h4>
                    <h4 class="writing">Post Office, Netaji Subash Rd, near Hridaypur,<br>
                          Nivedita Park South, Ramkrishnapally, Hridaypur, <br>Kolkata, West Bengal 700127</h4>
                </div>
                <div class="time">
                <div class="time-icon"><i class="fas fa-calendar-times"></i> </div>
                   
                    <h4 class="time-table">Time-Table</h4>
                    <h4 class="open">Tuesday to Sunday - Open 10.00 Am - 10.00 pm</h4>
                     <h4 class="open">Monday - Closed</h4>
                     <h4><strong>Online Order available everyday.<strong> </h4>
                </div>
                 </div>
                 <div class="email-call">
                <div class="call">
                    <div class="call-icon"><i class="fas fa-phone"></i></div>
                    
                    <h4 class="calu">Call Us</h4>
                    <h4 class="caln">987-555-2318</h4>
                </div>
                <div class="em">
                    <div class="email-icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                   
                    <h4 class="email">Email</h4>
                    <h4 class="bakers">bakersdelight@gmail.com</h4>
                </div>
            </div>
        </div>
        <br><br>
        <p class="email-send">SEND US AN EMAIL</p><br>
            <h4 class="email-write">We are very responsive to answer</h4><br>
            <form class="myform">
            <div>
                <input type="text" placeholder="Name" class="contact-name" required>
                <input type="email" placeholder="Email" class="contact-email" required>
            </div>
            <input type="text" placeholder="Subject" class="contact-subject" required>
            <div>
                <textarea name="message" rows="10"  placeholder="Message" class="message" required></textarea>
            </div>
            <br>
            <button class="bt">Send Message</button>
        </form>







       
            <div class="clearfix"></div>
        </div>
 </section>
 <?php include('partials-front/footer.php'); ?>