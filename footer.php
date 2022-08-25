<style>
.container-footer {
    font-family: Poppins, "DM Sans", "Merriweather Sans", Geneva, sans-serif;
    font-size: 14px;
    letter-spacing: normal;
    text-align: left;
    line-height: 22.4px;
    color: #fff;
    background: #060d13;
    align-items: flex-end;
    padding: 0px 80px 0px 80px;

}
</style>
<section style="background: #060d13">
    <div class="container-footer">
        <div class="footer">
            <div class="row">
                <div class="col-md-3">
                    <div class="">
                        <h2 style="font-size: 14px; text-align: left">GET TO KNOW US</h2>
                        <ul>
                            <li><a href="about-us.php">Who We Are</a></li>
                            <li><a href="./about-us.php">Our Team</a></li>
                            <li><a href="./about-us.php">Our Offices</a></li>
                        </ul>
                        <h2 style="font-size: 14px; text-align: left">WRITE TO US</h2>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Glerian Limited,<br>
                            <i class="bi bi-geo-alt"></i>P.O. BOX 105802 - 00101,<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nairobi - Kenya.

                        </p>
                        <h2 style="font-size: 14px; text-align: left">CALL US TODAY</h2>
                        <ul>
                            <li><a href="(020) 7855116"><i class="bi bi-telephone"></i>(020) 7855116</a></li>
                            <li><a href="+254(0) 746038884"><i class="bi bi-phone"></i>+254(0) 746038884</a></li>
                            <li><a href="+254(0) 782079930"><i class="bi bi-phone"></i>+254(0) 782079930</a></li>
                        </ul>

                        <address>
                            <ul>
                                <h2 style="color:#A6CB26; font-size: 14px; text-align: left">EMAIL US</h2>
                                <a href="info@glerianlimited.com" style="color: #fff;"><i
                                        class="bi bi-envelope-fill"></i>Glerian Limited®</a>
                            </ul>
                        </address>
                    </div>

                </div>
                <div class="col-md-3">
                    <h2 style="font-size: 14px; text-align: left">OUR STORE</h2>
                    <ul>
                        <li><a href="./cart.php">Products</a></li>
                        <li><a href="">Raw Materials</a></li>
                    </ul>
                    <h2 style="font-size: 14px; text-align: left">OUR SERVICES</h2>
                    <ul>
                        <li><a href="">Professional Fumigation</a></li>
                        <li><a href="">Professional Cleaning & Laundry </a></li>
                    </ul>

                </div>
                <div class="col-md-3">
                    <h2 style="font-size: 14px; text-align: left">CUSTOMER ACCOUNT</h2>
                    <ul>
                        <li><a href="./login-form/./login form.html">My Account</a></li>
                        <li><a href="./view_cart.php">My Cart</a></li>
                        <li><a href="">My Wishlist</a></li>
                        <li><a href="">My Orders</a></li>
                        <li><a href="">My Reviews</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2 style="font-size: 14px; text-align: left">GET SUPPORT</h2>
                    <ul>
                        <li><a href="contact.php">Help Center</a></li>
                        <li><a href="">Frequently Asked Questions</a></li>
                        <li><a href="">Sitemap</a></li>
                        <li><a href="">Your Feedback</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
<!-- JavaScript Bundle with Popper -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
// ---------Responsive-navbar-active-animation-----------
function test() {
    var tabsNewAnim = $('#navbarSupportedContent');
    var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
    var activeItemNewAnim = tabsNewAnim.find('.active');
    var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
    var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
    var itemPosNewAnimTop = activeItemNewAnim.position();
    var itemPosNewAnimLeft = activeItemNewAnim.position();
    $(".hori-selector").css({
        "top": itemPosNewAnimTop.top + "px",
        "left": itemPosNewAnimLeft.left + "px",
        "height": activeWidthNewAnimHeight + "px",
        "width": activeWidthNewAnimWidth + "px"
    });
    $("#navbarSupportedContent").on("click", "li", function(e) {
        $('#navbarSupportedContent ul li').removeClass("active");
        $(this).addClass('active');
        var activeWidthNewAnimHeight = $(this).innerHeight();
        var activeWidthNewAnimWidth = $(this).innerWidth();
        var itemPosNewAnimTop = $(this).position();
        var itemPosNewAnimLeft = $(this).position();
        $(".hori-selector").css({
            "top": itemPosNewAnimTop.top + "px",
            "left": itemPosNewAnimLeft.left + "px",
            "height": activeWidthNewAnimHeight + "px",
            "width": activeWidthNewAnimWidth + "px"
        });
    });
}
$(document).ready(function() {
    setTimeout(function() {
        // test();
    });
});
$(window).on('resize', function() {
    setTimeout(function() {
        // test();
    }, 500);
});
$(".navbar-toggler").click(function() {
    $(".navbar-collapse").slideToggle(300);
    setTimeout(function() {
        // test();
    });
});



// --------------add active class-on another-page move----------
jQuery(document).ready(function($) {
    // Get current path and find target link
    var path = window.location.pathname.split("/").pop();

    // Account for home page with empty path
    if (path == '') {
        path = 'index.html';
    }

    var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
    // Add active class to target link
    target.parent().addClass('active');
});


// Add active class on another page linked
// ==========================================
// $(window).on('load',function () {
//     var current = location.pathname;
//     console.log(current);
//     $('#navbarSupportedContent ul li a').each(function(){
//         var $this = $(this);
//         // if the current path is like this link, make it active
//         if($this.attr('href').indexOf(current) !== -1){
//             $this.parent().addClass('active');
//             $this.parents('.menu-submenu').addClass('show-dropdown');
//             $this.parents('.menu-submenu').parent().addClass('active');
//         }else{
//             $this.parent().removeClass('active');
//         }
//     })
// });	
</script>
</body>

</html>