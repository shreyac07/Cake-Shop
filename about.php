<?php include('partials-front/menu.php'); ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
    .text{
        font-family: Arial, Helvetica, sans-serif;
        color: black;
        /* font-family: monospace; */
        font-size: 18px;
    }
    .checked {
    color: orange;
  }
  .unchecked{
    color:var(--review-person);
  }
  .review{
    display:grid;
    grid-template-columns: 1fr 1fr 1fr;
    column-gap: 60px;
    margin-left: 40px;
    margin-right: 50px;
  }
  .review-image{
    width:100px;
    height: 100px;
    object-fit: cover;
    border-radius: 50px;
  }
  .review-p{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 200;
  }
  .checkedt{
    color:orange;
    margin-left: 180px;
  }
  .review-person{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 600;
    margin-left:7px;
  }
  .te{
    text-align:center;
    font-size: xx-large;
    font-family: Arial, Helvetica, sans-serif; 
  }
  .service-main-div{
      display:grid;
      grid-template-columns: 1fr 1fr 1fr;
      column-gap:10px;
      row-gap:10px;
    }
    .ser{
      margin-left:50px;
      margin-right:30px ;
    }
    .service-div{
      margin-left: 150px;
    }
    .service-sub-div{
      margin-left:-20px;
    }
   /* .service{
      color: #ff6b81;
      font-size:30px;
      margin-left:200px;
    }*/
    /*.service-guide{
      margin-left: 190px;
      color: #ff6b81;
      font-size:30px;
    }
    .service-adve{
      color: #ff6b81;
      font-size:30px;
      margin-left: 190px;
    }
    .service-travel{
      color: #ff6b81;
      font-size:30px;
      margin-left: 150px;
    }*/
    .safety{
      margin-right:-180px;
    }
    /* .safety1{
      margin-right:1px;
    } */
@media (max-width:768px){
    .review{
        margin-left:10px;
    }
    .checked{
        font-size:10px;
    }
    .unchecked{
        font-size:10px;
    }
    .service-main-div{
      display:grid;
      grid-template-columns: 1fr;
      column-gap:10px;
      row-gap:10px;
    
}
.service-sub-div{
  margin-left:-50px;

}
.service-sub-div1{
  margin-left:-20px;
}
.safety,.safety1{
  margin-left:-50px;
}
.service-price{
  /* margin-left:-30px; */
  margin-right:60px;
}
/* .service-p{
  width:400px;
} */

}
.service-p{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 200;
  }
  .service-p1{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 200;
    margin-left:50px;
  }
  .service-sub-div1{
    margin-left:20px;
  }
  .service-price{
    margin-left:130px;
  }
    .service-sub-div1,.service-sub-div, .safety, .safety1{
      margin-top: 50px;
      background-color: #ececec;
      width:400px;
      height:180px;
      border-radius: 20px;
    }
    .service-sub-div
{
    background-color: black
    border: 1px solid grey
    transition: all 0.35 ease;
}
.service-sub-div:hover
{
    box-shadow: 0 0 20px rgba(48, 46, 77, 0.15);
}
 .service-sub-div1
{
    background-color: black
    border: 1px solid grey
    transition: all 0.35 ease;
}
.service-sub-div1:hover
{
    box-shadow: 0 0 20px rgba(48, 46, 77, 0.15);
}
 .safety
{
    background-color: black
    border: 1px solid grey
    transition: all 0.35 ease;
}
 .safety:hover
{
    box-shadow: 0 0 20px rgba(48, 46, 77, 0.15);
}
  .safety1
{
    background-color: black
    border: 1px solid grey
    transition: all 0.35 ease;
}
 .safety1:hover
{
    box-shadow: 0 0 20px rgba(48, 46, 77, 0.15);
}

.icon
{
    height: 60px;
    width: 60px;
    border-radius: 50%;
    display: block;
    margin: 0 auto 30px;
    text-align: center;
    transition: all 0.35s ease ;
   
}
 .icon .fas
{
     font-size: 40px;
    line-height: 30px;
    color: #ff6b81;
}
.icon:hover 
{
     background-color: #ff6b81;
    transform: scale(1.05);
} 
 .icon :hover.fas
{
    font-size: 30px;
    color: #ffffff;
}
.icon .fad
{
     font-size: 40px;
    line-height: 30px;
    color: #ff6b81;
}
.icon :hover.fad
{
    font-size: 30px;
    color: #ffffff;
}


   
    </style>

<!-- About Section Starts Here -->
<section class="categories">
        <div class="container">
            <h2 style="color: #ff6b81" class="text-center">About Us</h2>

        <br> <br>

        <!-- START -->

        <section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
						

                                                      
                            <section class="text">
							<h4 class="writing"><b> Baker’s Delight </b>got listed on the Indian bourses in February 2015. 
                            Mr.Ram Sen, Mr. Hari Roy are the Promoters of the Company.  
                            <b> Baker’s Delight </b> brand with the exclusive rights for India and Nepal. 
                            The Company is market leader in the Cake segment with a network of 249 Cake 
                            restaurants across 26 cities in India (as on June 30, 2022).</h4>

							<h4 class="writing">The is the market leader in the organized cake market in the cake home delivery segment in India. 
                                 <b> Baker’s Delight </b> has remained focused on delivering great tasting cakes and sides, 
                                 superior quality, exceptional guest care and value for money offerings. 
                                 We have endeavored to establish a reputation for being a home delivery specialist 
                                 capable of delivering cakes within 30 minutes or else FREE to a community of loyal
                                  consumers from all our restaurants around the country.</h4>

							<h4 class="writing" ><b> Baker’s Delight </b> believes that when a box of cake is opened, 
                            family and friends come together to share the cake. Hence, 
                            our brand positioning: ‘Yeh Hai Rishton Ka Time❤️'. That's why, all our efforts,
                             whether it is a new innovative and delicious product, offering consumers value for money deals,
                              great service, countrywide presence or the promise to deliver in 30 minutes
                               or free are all directed towards making relationships stronger, warmer and more
                                fun by giving consumers an opportunity to get together, catch up, reunite and
                                 spend more time together.Consumers can order their cakes by calling the single Happiness 
                                 Hotline number 987-555-2318 OR order online at <b> Baker’s Delight </b> Cake Online. </h4>
                        </section>
                        
                        </div>
					</div>
				</div>
			</section>
            <br><br><br>
            
            <h2 style="color: #ff6b81" class="te">Services</h2>
            <br><br>
            <div class="ser">
            <div class="service-main-div">
                <div class="service-sub-div">
                  <div class="icon">
                <i style = "margin-top: 18px" class="fas fa-salad service"></i></div>
                    <h4 style = "margin-top: 25px;color: black;"class="service-div">Health & hygiene</h4>
                    <h4 style = "margin-top: 15px;
                    margin-left: 10px;color: black;
                    "class ="service-p" >Good quality of food with hygienic surrounding and baking process.</h4>
                </div>
                <div style="
                   margin-left: 8px" class="service-sub-div">
                   <div class="icon">
                <i style = "margin-top: 18px
               "class="fad fa-birthday-cake service"></i></div>
                    <h4 style = "margin-top: 25px;margin-left:170px;
                    color: black;"class="service-div">Tasty Food</h4>
                    <h4 style = "margin-top: 15px;color: black;
                    margin-left: 50px;" class ="service-p1" >Cakes and cookies with rich flavours.</h4>
                </div>
                <div style="margin-left: 7px"class="safety">
                  <div class="icon">
                    <i style = "margin-top: 18px" class="fas fa-bullhorn service-guide"></i></div>
                    <h4 style = "margin-top: 25px;color: black;"class="service-div">Safety Guide</h4>
                    <h4 style = "margin-top: 15px;
                    margin-left: 20px;color: black;"class ="service-p" >Providing the best and most reliable safety and health care.</h4>
                </div>
                <div style="margin-top:10px" class="service-sub-div">
                  <div class="icon">
                <i style = "margin-top: 18px" class="fas fa-truck service"></i></div>
                    <h4 style = "margin-top: 25px;color: black;" class="service-div">Fastest Delivery</h4>
                    <h4 style = "margin-top: 15px;
                    margin-left: 10px;color: black;"class ="service-p" >Fastest delivery of foods with our reliable delivery men.</h4>
                </div>
                <div  style="margin-left: 8px;margin-top:10px;" class="service-sub-div1">
                  <div class="icon">
                <i style = "margin-top: 18px" class="fas fa-hands-usd service-travel"></i></div>
                    <h4 style = "margin-top: 25px;color: black;"class="service-price">Affordable Price</h4>
                    <h4 style = "margin-top: 15px;
                    margin-left: 8px;color: black;"class ="service-p" >Cakes and cookies at a reasonable price point as per customers choice.</h4>
                </div>
                <div  style="margin-left: 7px;margin-top:10px;" class="safety1">
                  <div class="icon">
                <i style = "margin-top: 18px" class="fas fa-pie service-adve"></i></div>
                    <h4 style = "margin-top: 25px;color: black;"class="service-div ">Varieties of Items </h4>
                    <h4 style = "margin-top: 15px;
                    margin-left: 10px;margin-left: 40px;color: black;"class ="service-p1" >Good quality with various types of food items.</h4>
                </div>
            </div>
        </div>
        <br><br><br>
                  <h2 style="color: #ff6b81" class="te">Reviews</h2>
                  <br>
                            <div class="review">
                                <div>
                                    <img class="review-image" src="images/people/people1.jpg">
                                    <br>
                                    <h4 class="review-person">Disha Sen</h4>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star unchecked"></span>
                                    <span class="fa fa-star unchecked"></span>
                                    <h4 class="review-p">What a variety of cakes! And that too excellent. Home delivery very prompt.
                                         They got a cake delivered to our home, through a telephone booking. </h4>
                                </div>
                                <div>
                                    <img class="review-image" src="images/people/people2.jpg">
                                    <br>
                                    <h4 class="review-person">Ram Roy</h4>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star unchecked"></span>
                                    <h4 class="review-p">Cakes and pastries which are making here are best quality and hygiene. 
                                        I must really say that it is the best cake shop 
                                        which gives you there are different kinds of cakes as per your favourite flavours. 
                                  </h4>
                                </div>
                                <div>
                                    <img class="review-image" src="images/people/people3.webp">
                                    <br>
                                    <h4 class="review-person">Kunal Dutta</h4>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star unchecked"></span>
                                    <span class="fa fa-star unchecked"></span>
                                    <h4 class="review-p">I must really say that it is the best cake shop in Kolkata which gives you the premium quality. It's very delicious and one must really try it out.</h4>
                                </div>
                            </div>

        <!-- END -->
<br><br>

<br><br>
<?php include('partials-front/footer.php'); ?>

<div class="clearfix"></div>
        </div>
    </section>
    <!-- About Section Ends Here -->