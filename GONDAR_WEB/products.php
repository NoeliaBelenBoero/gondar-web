<?php
   $conex = mysqli_connect('localhost', 'root', 'marc2023', 'gondar_db');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
       rel="stylesheet"
       href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="products.css">
</head>
<body>
<div class="swiper mySwiper">
<div class="swiper-wrapper">
                    <?php
                       $sql ="SELECT * from product";
                       $result = mysqli_query($conex, $sql);

                       while ($mostrar = mysqli_fetch_array($result)){
                    ?>
                    
                            <div class="swiper-slide">
                                <div class="product-content">
                                   <div class="product-txt">
                                      <h2><?php echo $mostrar['name']?></h2>
                                      <p><?php echo $mostrar['description']?></p>
                                   </div>
                                   <div class="product-img">
                                      <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['image']); ?>"/>
                                   </div>
                                </div>
                            </div>
                      
                    
                    <?php
                    }
                    ?>
       </div>
       </div>
       <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>                
       <script>
          var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            coverflowEffect: {
                depth:500,
                modifer:1,
                slidesShadows:true,
                rotate:0,
                stretch:0
            }
          })
       </script> 
</body>
</html>