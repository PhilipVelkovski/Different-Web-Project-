<?php

$data = array(
    "<img"=>"/Images/offer-1.jpg",
     "<img"=>"/Images/offer-2.jpg",
     "<img"=>"/Images/offer-3.jpg",
     "<img"=>"/Images/offer-4.jpg",
   //"<img"=>"/Images/offer-5.jpg"
   );


function renderProductCard($data) {
  foreach($data as $image=>$value)
   {    
    echo "<div class = \"swiper-slide\">
            <div class=\"product-image-offers\">";

            echo $image . " src=" . $value .">";
                echo "<div class = \"offers\"> <p>5% off</p> 
                <div class = \"offer-title\"> Buy Moress save more </div>
                <span>Beverages</span>
              </div> 
           </div> 
           <div class=\"shop-now-btn\"><a href=\"/\"> <span>Shop now</span></a></div>
        </div> ";
    }
   } ;
 ?>