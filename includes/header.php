<div class="bg-white ">
    <header class="bg-white">
        <div class="container-fluid p-0 pt-3 pt-lg-4">
            <div class="headerOne mb-4 container">
                <div class="row  align-items-center justify-content-between">
                    <div class="col-2 d-flex">
                            <button onclick="toggleMenu()" class="btn btn-white col d-lg-none" style="width: 40px;flex: 0 0 40px;">
                                <img src="img/menu_icon.svg" alt="">
                                
                            </button>
                            <a class="col mx-3" href="index.php">
                                <div class="logo"><img src="img/logo.svg" alt="logo"></div>
                            </a>
                    </div>
                            <div class="hInput col  d-lg-flex pt-lg-0 pt-4">
                                <div class="d-flex col sdo">
                                    <img style="width: 25px; height: 50px;" class="d-block d-lg-none" src="img/back-btn.svg" alt="" onclick="toggleSearchWindow()">
                                    <div class="col">
                                        <input id="searchInput" type="text" placeholder="Search for art, artist, place or any keyword">
                                    </div>
 
                                    <button  class="d-none d-lg-block">Search</button>
                                    <img style="width: 25px; height: 50px;" class="d-block d-lg-none" src="img/search_icon.svg" alt="">
                                </div>
 
                            </div>
                            <div class="col-4 d-flex justify-content-end header-part-3">
                                <div class="hNumber d-none d-lg-block">
                                    <p class="mb-1 hN1">Call for support</p>
                                    <p class="hN2">+91 8860277388</p>
                                </div>
                                <div class=" h_Icons d-flex align-items-baseline">
                                    <div class="position-relative d-block d-lg-none mx-1 mx-lg-3">
                                        <span class="_icon" onclick="toggleSearchWindow()"><img class="img-fluid" src="img/search_icon.svg" alt=""></span>
                                         
                                    </div>
                                    <div class="position-relative">
                                        <span class="_icon"><img class="img-fluid" src="img/wishlist_icon.svg" alt=""></span>
                                        <div id="wishlistCount" class="bg-danger text-white siconeSpan">
                                            <span class="value">0</span>
                                            <input type="hidden" value="0" id="wishlistCountHidden">
                                        </div>
                                    </div>
                
                                    <div class="position-relative mx-1 mx-lg-3">    
                                        <span class="_icon"><img class="img-fluid" src="img/cart_icon.svg" alt=""></span>
                                        <div id="cartItemCount" class="d-none  bg-danger text-white siconeSpan"><span>0</span></div>
                                    </div>
                
                                    <div class="position-relative d-none d-lg-block">    
                                        <span class="_icon"><img class="img-fluid" src="img/user_icon.svg" alt=""></span>
                                        <div class="bg-danger text-white siconeSpan"><span></span></div>
                                    </div>
                
                                </div>
                            </div>
                        </div>
                    </div>

            <div class="headerTwo align-items-center justify-content-center d-lg-flex">
                <span class="close_handler d-lg-none"></span>
                <ul class="d-lg-flex justify-content-center mb-0 py-3">
                    <div class="logo d-block d-lg-none"><img src="img/logo.svg" alt="logo"></div>
                    

                    <a href="index.php">
                        <li class="hList">Home</li>
                    </a>

                    <a href="about-us.php">
                        <li class="hList">About Us</li>
                    </a>

                    <a href="#">
                        <li class="hList">Events</li>
                    </a>

                    <a href="#">
                        <li class="hList">Art Gallery</li>
                    </a>

                    <a href="#">
                        <li class="hList">Artist</li>
                    </a>

                    <a href="#">
                        <li class="hList">Exhibition</li>
                    </a>

                    <a href="all.php">
                        <li class="hList">Submit Artwork</li>
                    </a>

                    <a href="#">
                        <li class="hList d-block d-lg-none">Profile</li>
                    </a>

                </ul>
            </div>
        </div>
    </header>
</div>

<style>
    header.active {
        transform: translate(0px, -60px);
    }
</style>
<script>



    jQuery(document).ready(function($) {


       if(localStorage.getItem("wishListCount") != null){
               let wishListCount = localStorage.getItem("wishListCount");

                $("#wishlistCountHidden").val(wishListCount);

                $("#wishlistCount .value").text(wishListCount);
        }else{

            $("#wishlistCount").addClass("d-none");
        }

    });

  

    // $(window).on('load',function(){
    //     alert(2);
    // })

     
    // $(window).scroll(function(event) {

    //     if($(window).scrollTop() > 1000){

    //     }

    // });



    $(".headerTwo .close_handler").click(function(){
        $(".headerTwo").removeClass('active');
    })


    function toggleMenu() {
        $(".headerTwo").addClass('active');
    }

    function toggleSearchWindow(){
        $(".hInput").toggleClass("active")
    }


 
    function addToWishlist(){
        
        let currentCount = parseInt($("#wishlistCountHidden").val());
        
        currentCount += 1;

        $("#wishlistCountHidden").val(currentCount);

        $("#wishlistCount .value").text(currentCount);
        $("#wishlistCount").removeClass("d-none");

        localStorage.setItem("wishListCount",currentCount)

    }


    function clearWishlist(){

        $("#wishlistCountHidden").val(0);
        $("#wishlistCount .value").text(0);
        $("#wishlistCount").addClass("d-none");
        localStorage.removeItem("wishListCount");

    }


function captureSearch(){

     
    let search = $("#searchInput").val();

    localStorage.setItem("searchLog",search)


}

</script>