<?php
    include 'header.php'
?>
<head><link rel="stylesheet" href="./assest/css/blog.css"></head>

<div>
    <div id="blog">
        
        <div class="blog-container">
            <h1 class="products-title">SG4STORE® BLOG</h1>
            <input type="radio" name = "blogger" id="blog1">
            <input type="radio" name = "blogger" id="blog2">
            <input type="radio" name = "blogger" id="blog3">
            <input type="radio" name = "blogger" id="blog4">
            <input type="radio" name = "blogger" id="blog5">
    
            <div class="blog-cards">
                <label for="blog1" id="slide1">
                    <div class="bl-card">
                        <div class="blog-img">
                            <img src="./assest/images/blog/blog1.png" alt="tips1">
                        </div>
                        <div class="blog-content">
                            <h1 class="name">DRESS OVERSIZE</h1>
                            <h4 class="details">SG4store® là lựa chọn hàng đầu dành cho các tín đồ thời trang Streetwear sành điệu.</h4>
                            <a href="" class="blog-btn">READ MORE</a>
                            <div class="blog-icons">
                                <i class="ti-bm ti-bookmark"></i>
                                <i class="ti-share ti-sharethis"></i>
                            </div>
                        </div>
                    </div>
                </label>
                <label for="blog2" id="slide2">
                    <div class="bl-card">
                        <div class="blog-img">
                            <img src="./assest/images/blog/blog2.png" alt="tips2">
                        </div>
                        <div class="blog-content">
                            <h1 class="name">MIX & MATCH T-SHIRT</h1>
                            <h4 class="details">SG4store® là lựa chọn hàng đầu dành cho các tín đồ thời trang Streetwear sành điệu.</h4>
                            <a href="" class="blog-btn">READ MORE</a>
                            <div class="blog-icons">
                                <i class="ti-bm ti-bookmark"></i>
                                <i class="ti-share ti-sharethis"></i>
                            </div>
                        </div>
                    </div>
                </label>
                <label for="blog3" id="slide3">
                    <div class="bl-card">
                        <div class="blog-img">
                            <img src="./assest/images/blog/blog3.png" alt="tips3">
                        </div>
                        <div class="blog-content">
                            <h1 class="name">COLOR COORDINATOR</h1>
                            <h4 class="details">SG4store® là lựa chọn hàng đầu dành cho các tín đồ thời trang Streetwear sành điệu.</h4>
                            <a href="" class="blog-btn">READ MORE</a>
                            <div class="blog-icons">
                                <i class="ti-bm ti-bookmark"></i>
                                <i class="ti-share ti-sharethis"></i>
                            </div>
                        </div>
                    </div>
                </label>
                <label for="blog4" id="slide4">
                    <div class="bl-card">
                        <div class="blog-img">
                            <img src="./assest/images/blog/blog4.png" alt="tips4">
                        </div>
                        <div class="blog-content">
                            <h1 class="name">COORDINATING FASHION</h1>
                            <h4 class="details">SG4store® là lựa chọn hàng đầu dành cho các tín đồ thời trang Streetwear sành điệu.</h4>
                            <a href="" class="blog-btn">READ MORE</a>
                            <div class="blog-icons">
                                <i class="ti-bm ti-bookmark"></i>
                                <i class="ti-share ti-sharethis"></i>
                            </div>
                        </div>
                    </div>
                </label>
                <label for="blog5" id="slide5">
                    <div class="bl-card">
                        <div class="blog-img">
                            <img src="./assest/images/blog/blog5.png" alt="tips5">
                        </div>
                        <div class="blog-content">
                            <h1 class="name">STREET STYLE</h1>
                            <h4 class="details">SG4store® là lựa chọn hàng đầu dành cho các tín đồ thời trang Streetwear sành điệu.</h4>
                            <a href="" class="blog-btn">READ MORE</a>
                            <div class="blog-icons">
                                <i class="ti-bm ti-bookmark"></i>
                                <i class="ti-share ti-sharethis"></i>
                            </div>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <div id="social-media">
        <div class="social-container">
            <p> FIND US ON SOCIAL MEDIA </p>
            <div class="social-icons">
                <a><img src="./assest/images/about/facebook-icon.png" alt=""></a>
                <a><img src="./assest/images/about/instagram-icon.png" alt=""></a>
                <a><img src="./assest/images/about/linkedin-icon.png" alt=""></a>
                <a><img src="./assest/images/about/snapchat-icon.png" alt=""></a>
                <a><img src="./assest/images/about/twitter-icon.png" alt=""></a>
                <a><img src="./assest/images/about/whatsapp-icon.png" alt=""></a>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php'
    ?>
</body>

<!-- sticky -->
<script>
    window.onscroll = function () { myFunction() };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
</html>