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

   

   <div class="container-fluid" style="background-image: url(img/ausbg.jpg); background-size: cover;">
        <div class="pt-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <div class="pt-5"></div>
                    <img src="img/auslogo.png" alt="" class="px-1">
                    <div class="pt-5"></div>
                </div>
                <div class="col-7">
                    <div class="p-5 text-white" style="background-color: #000000b8;">
                        <h1>About Us</h1>
                        <img src="img/ausline.png" alt="" class="mt-4" style="margin-left: -70px; width: 319px;">
                        <p class="mt-5">
                            UCHAAN - A Pinnacle of Creativity
                            <br><br>
                            UCHAAN is an organisation with a main objective that has established itself as a nurturing ground for art and artist. Uchaan has a repertoire of not just the masters of art but also an impeccable range of contemporary artists from all parts of the country, whose works are showcased on a regular basis. The gallery has been doing shows in all forms of visual arts in its own distinguish way within the gallery as well as has taken art outside the confines to off site locations.
                            <br><br>
                            Uchaan has taken the art to masses so as to maximise the reach and lure art enthusiasts far and wide. Uchaan has been organizing art shows, art workshops, art camps & painting competition pan India & abroad and through this endeavor it has able to take the art out of clutches of gallery system to the larger audiences of malls, hotels & other places wherein more people are encouraged to be the part of the journey called art.
                            <br><br>
                            Our Objective
                            <br><br>
                            “To provide a dedicated platform for deserving artists and nurture more creative spirit and aesthetic temperament among all…..”
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5"></div>
   </div>



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