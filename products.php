<!DOCTYPE html>
<html lang="en">
<head>
<title>Products</title>
<meta charshet="utf-8">
<link rel="stylesheet" href="products.css">
</head>

<body>
    <div id="top">
        <ul>
            <li>Trang chủ</li>
            <li>Dăng nhập</li>            
        </ul>                
    </div>
    <div id="container">

        <div id="category">
            <ul>
                <li> <a href="#">
                    
                        <img src="dvrk.png" alt="aaa">
                    
                    </a>
                 </li>
                <li> <a class="a" href="#">SHIRT</a></li> 
                <li> <a class="a"href="#">T SHIRT</a></li>
                <li> <a class="a" href="#">HOODIE</a></li>
                <li> <a class="a" href="#">BAG</a></li>
                         
                
            </ul>
        </div>
        
        <div id="content">
            <div id="logo">
                <p>HOODIE</p>                                            
            </div>
            
            <div class="clr"></div>
            <div id="products">
                <?php
                for ($i = 1; $i <= 30; $i++){                       
                ?>
                    <div class="pro" id="<?php echo $i ?>" >                    
                         <div class="img-pro" >
                            <br>
                                <a href="#">
                                  <img src="img/ktpm.png" alt="#"> 
                                </a>   
                            <br>
                         </div> 
                         
                         <div class="tenao">
                             <strong>
                                <?php echo "Áo Số $i" ?>
                             </strong>                         
                         </div>                             
                    </div>                      
                <?php                   
                    }
                ?>                 
                           
            </div> 
                   
        </div>  
    </div>     
        
    <img src="img/h1.png" alt="adasd">  
</body>
</html>