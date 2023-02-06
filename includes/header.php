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
                            <div class="hInput col  d-lg-flex">
                                <button class="col btn btn-white" onclick="toggleSearchWindow()">
                                    back button
                                </button>
                                <div class="col">
                                    <input type="text" placeholder="Search for art, artist, place or any keyword">
                                    
                                </div>
                                <button>Search</button>
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
                                        <div class="bg-danger text-white siconeSpan"><span>2</span></div>
                                    </div>
                
                                    <div class="position-relative mx-1 mx-lg-3">    
                                        <span class="_icon"><img class="img-fluid" src="img/cart_icon.svg" alt=""></span>
                                        <div class="bg-danger text-white siconeSpan"><span>8</span></div>
                                    </div>
                
                                    <div class="position-relative d-none d-lg-block">    
                                        <span class="_icon"><img class="img-fluid" src="img/user_icon.svg" alt=""></span>
                                        <div class="bg-danger text-white siconeSpan"><span></span></div>
                                    </div>
                
                                </div>
                            </div>
                        </div>
                    </div>

            <div class="headerTwo align-items-center d-lg-flex">
                <span class="close_handler d-lg-none"></span>
                <ul class="d-lg-flex justify-content-center mb-0 py-3">
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

                    <a href="#">
                        <li class="hList">Submit Artwork</li>
                    </a>

                </ul>
            </div>
        </div>
    </header>
</div>

<script>


    $(".headerTwo .close_handler").click(function(){
        $(".headerTwo").removeClass('active');
    })


    function toggleMenu() {
        $(".headerTwo").addClass('active');
    }

    function toggleSearchWindow(){
        $(".hInput").toggleClass("active")
    }


</script>