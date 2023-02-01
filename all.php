<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uchaan Arts</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    

    <link rel="stylesheet" href="js/owlCarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="js/owlCarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="js/owlCarousel/assets/animate.min.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>







  <body class="graphikR">

   <?php include 'includes/header.php'  ?>

   



   <a href="shoonya-14.php"><h1>Art Detail Page</h1></a>
   <a href="latest-artwork.php"><h1>Latest Artwork</h1></a>
   <a href="aakriti-jhanb.php"><h1>Artist Detail Page</h1></a>
   <a href="event-list-page.php"><h1>Event List Page</h1></a>



   


    <?php include 'includes/footer.php'  ?>


    

    <script src="js/owlCarousel/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#bannerC').owlCarousel({
                loop:true,
                // margin:10,
                nav:true,
                margin:0,
                autoplay: true,
                dots: false,
                autoplayTimeout: 5000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })

            $('.allCardc').owlCarousel({
                loop:true,
                margin:40,
                nav:true,
                dots: false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
        });
    </script>



    
  </body>
</html>