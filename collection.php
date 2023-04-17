
<?php
include 'header.php'
?>

<div>

    <div id="collection" class="collection-container">
        <h1 class="products-title">BỘ SƯU TẬP</h1>
        <div class="collection-image column">
            <div class="clt-img">
                <img src="./assest/images/collection/clt1.png" alt="">
                <div class="collection-content column">
                    <h5>01</h5>
                    <h4>LEVENTS® FALL WINTER COLLECTION 2022</h4>
                </div>
            </div>
            <div class="clt-img">
                <img src="./assest/images/collection/clt2.png" alt="">
                <div class="collection-content column">
                    <h5>02</h5>
                    <h4>LEVENTS® SPECIAL COLLECTION DORAEMON</h4>
                </div>
            </div>
            <div class="clt-img">
                <img src="./assest/images/collection/clt3.png" alt="">
                <div class="collection-content column">
                    <h5>03</h5>
                    <h4>LEVENTS® SPRING SUMMER COLLECTION 2022</h4>
                </div>
            </div>
            <div class="clt-img">
                <img src="./assest/images/collection/clt4.png" alt="">
                <div class="collection-content column">
                    <h5>04</h5>
                    <h4>LEVENTS® POPULAR LOGO COLLECTION</h4>
                </div>
            </div>
            <div class="clt-img">
                <img src="./assest/images/collection/clt5.png" alt="">
                <div class="collection-content column">
                    <h5>05</h5>
                    <h4>LEVENTS® “MY ANIMALS” SERIES COLLECTION 2021</h4>
                </div>
            </div>
            <div class="clt-img">
                <img src="./assest/images/collection/clt6.png" alt="">
                <div class="collection-content column">
                    <h5>06</h5>
                    <h4>LEVENTS® MY CHILDHOOD COLLECTION 2021</h4>
                </div>
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