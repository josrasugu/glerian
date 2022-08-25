<?php
include "header.php";
$products = getProducts();

?>
<section style="padding:0px;">
    <div class="container-fluid" style="padding:0px">
        <div class="section" style="background: #000; min-height: 500px;">
            <div class="row">
                <div class="col-md-3">
                    <div class="v-nav"
                        style="background: #fff; font-size:14px; border-radius:6px; text-align:left; min-height: 350px; padding: 20px; margin: 20px; ">

                        <h2 style="font-size: 14px;">COLLECTIONS</h2>
                        <ul>
                            <li><a href="">Toilet Cleaners</a></li>
                            <li><a href="">Hand Gel Sanitizers</a></li>
                            <li><a href="">Hand Soaps</a></li>
                            <li><a href="">Acids</a></li>
                            <li><a href="">Liquids</a></li>
                            <li><a href="">Powder Raw Materials</a></li>
                            <li><a href="">Related Raw Materials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- Slideshow container -->
                    <div class="slideshow-container" style="margin-top: 5px;">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 2</div>
                            <img src="assets/images/slider_1.png" style="width:100%">
                            <div class="text">Caption Text</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 2</div>
                            <img src="assets/images/slider_2.png" style="width:100%">
                            <div class="text">Caption Two</div>
                        </div>
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" align="center" style="padding:0px 10px 0px 100px">
                    <img src="assets/images/ceo_photo.png" width="300px">
                    <h2 style="color: #A6CB26; font-size: 18px;">HELLEN BOSIBORI,</h2>
                    <p style="color: #ccc; font-size: 12px;">Company CEO</p>
                </div>
                <div class="col-md-8">
                    <div class="welcome-note">
                        <h2 style="color: #A6CB26;">
                            <blockquote>Welcome to Glerian Limited®
                        </h2>
                        <p style="color:#ccc;">Dear customer, we register our privilege to have you and our pleasure to
                            serve you. At Glerian Limited®, we manufacture and supply hygiene products with a bias
                            towards health and environmental safety. We also stock and supply industrial raw materials
                            and chemicals. Additionally, we are a reliable service provider to meet your needs at any
                            time in professional cleaning and laundry, fumigation and pest control, and gardening and
                            landscaping.</blockquote>
                        </p>
                        <div class="row">
                            <div class="col-md-4">
                                <h2 style="color:#A6CB26; font-size: 14px;">VISIT OUR HEAD OFFICE</h2>
                                TEJ Centre,<br>
                                Off North Airport Road,<br>
                                Behind Basco Paints

                            </div>
                            <div class="col-md-4">
                                <h2 style="color:#A6CB26; font-size: 14px;">WRITE TO US</h2>
                                Glerian Limited,<br>
                                P.O. Box 105802—00101,<br>
                                Nairobi—Kenya.

                            </div>
                            <div class="col-md-4">
                                <h2 style="color:#A6CB26; font-size: 14px;">CALL US TODAY</h2>
                                <a href="(020) 7855116" style="color: #fff;">(020) 7855116</a><br>
                                <a href="+254(0) 746 038 884" style="color: #fff;">+254(0) 746 038 884</a><br>
                                <a href="+254(0) 782 079 930" style="color: #fff;">+254(0) 782 079 930</a>
                            </div>
                            <address>
                                <div class="col-md-4">
                                    <h2 style="color:#A6CB26; font-size: 14px;">EMAIL US</h2>
                                    <a href="info@glerianlimited.com" style="color: #fff;">Glerian Limited®</a>

                                </div>
                            </address>

                        </div>
                    </div>
                    <div style="margin-top: 20px; margin-bottom: 15px">
                        <button class="btn btn-sm"
                            style="border: 2px solid #A6CB26; color: #A6CB26; border-radius: 50px; font-size: 12px; ">
                            MORE
                            ABOUT US <i class="bi bi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="unlimited">
    <div class="container">
        <h2 style="color: #A6CB26; text-align: center; font-weight: bold; padding-top:20px;">Our Store</h2>
        <div class="column" style="padding-top:20px;">
            <div class="card">
                <div style=" width: 100%; height: 120px; padding: 20px;">
                    <i class="bi bi-cart3" style="color:#A6CB26; font-size: 30px"></i>
                    <p>Unlimited Shopping Experience</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="column" style="padding-top:20px;">
            <div class="card">
                <div style=" width: 100%; height: 120px; padding: 20px;">

                    <i class="bi bi-wallet2" aria-hidden="true" style="color:#A6CB26; font-size: 30px"></i>
                    <p>Fast, Secure, & Convenient Payment Options</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="column" style="padding-top:20px;">
            <div class="card">
                <div style=" width: 100%; height: 120px; padding: 20px;">
                    <i class="bi bi-bag-check" aria-hidden="true" style="color:#A6CB26; font-size: 30px"></i>
                    <p>100% Order Fulfillment</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="column" style="padding-top:20px;">
            <div class="card">
                <div style=" width: 100%; height: 120px; padding: 20px;">
                    <i class="bi bi-truck" aria-hidden="true" style="color:#A6CB26; font-size: 30px"></i>
                    <p>Free Delivery in Selected Locations</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="column" style="padding-top:20px;">
            <div class="card">
                <div style=" width: 100%; height: 120px; padding: 20px;">
                    <i class="bi bi-headset" aria-hidden="true" style="color:#A6CB26; font-size: 30px"></i>
                    <p>24/7 Customer Support</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section style="padding: 20px; background: #EBEEF2;">
    <div class="container" style="min-height: 300px; ">
        <h2 style="color: #A6CB26; text-align: center; font-weight: bold;">Product Categories</h2>
        <div class="col-md-9">
                    
                    <div class="slideshow-container" style="margin-top: 5px;">

                        
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 2</div>
                            <img src="assets/images/slider_1.png" style="width:100%">
                            <div class="text">Caption Text</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 2</div>
                            <img src="assets/images/slider_2.png" style="width:100%">
                            <div class="text">Caption Two</div>
                        </div>
                       
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                    </div>
                </div>

    </div>
</section> -->
<section style="margin: 30px; background: #fff;">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div style="border-radius: 5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 7px 0 rgba(0, 0, 0, 0.19); min-height: 250px; width: 100%; padding: 20px; margin: 20px;">
                    <div style="text-align: center; margin: 20px;">
                        <img src="assets/images/products/<?php echo $product["photo"]; ?>" class="img-fluid" width="150px">
                    </div>
                    <div>
                        <p style="font-size: 13px;"><b><?php echo $product["name"]; ?></b></p>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="float: left;">
                                    <span style="font-size: 12px;"><?php echo $product["distinct"]; ?></span>
                                </div>
                                <div style="float: right;">
                                    <span style="font-size: 12px;"><?php echo $product["price"]; ?></span>
                                </div>
                            </div>
                        </div>
                        <p>Ksh. <span style="font-size: 18px"><b><?php echo $product["quantity"]; ?></b></span></p>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="float: left;">
                                    <a href="view_cart.php?buy=<?php echo $product['id']; ?>"><button class="btn" style="background: #A6CB26; color: #fff;">BUY NOW</button></a>
                                </div>
                                <div style="float: right;">
                                    <button class="btn" style="border: 1px solid #A6CB26; color: #A6CB26;" onclick="addToCart(<?php echo $product['id']; ?>)">ADD TO CART</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- <section style="padding: 0; background: #EBEEF2;">
    <div class="container" style="min-height: 300px; ">
        <h2 style="color: #A6CB26; text-align: center; font-weight: bold;">Official Brands</h2>
        <div class="col-md-9">
                    
                    <div class="slideshow-container" style="margin-top: 5px;">

                        
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 2</div>
                            <img src="assets/images/slider_1.png" style="width:100%">
                            <div class="text">Caption Text</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 2</div>
                            <img src="assets/images/slider_2.png" style="width:100%">
                            <div class="text">Caption Two</div>
                        </div>
                        
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                    </div>
                </div>

    </div>
</section> -->
<!-- <section style="padding: 0; background: #EBEEF2;">
    <div class="container" style="min-height: 300px; ">
        <h2 style="color: #A6CB26; text-align: center; font-weight: bold;">Featured Flavours</h2>
        <div class="col-md-9">
                    
                    <div class="slideshow-container" style="margin-top: 5px;">

                        
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 2</div>
                            <img src="assets/images/slider_1.png" style="width:100%">
                            <div class="text">Caption Text</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 2</div>
                            <img src="assets/images/slider_2.png" style="width:100%">
                            <div class="text">Caption Two</div>
                        </div>
                       
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                    </div>
                </div>

    </div>
</section> -->
<section style="padding: 0; background: #EBEEF2;" class="materials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-center justify-content-center">
                    <h2 style="color: #A6CB26; text-align: center; font-weight: bold;">Industrial Raw Materials</h2>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <p>We stock and supply over 4 categories of industrial chemicals and raw materials.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="category-list" style="border-radius:20px;">
                    <div style="min-height: 200px;">
                        <h2 style="font-size:18px; color:#A6CB26; font-weight: bold;"><u
                                style="padding-bottom: 10px;">Acids (Liquids)</u></h2>
                        <ul>
                            <li><span class="list-marker"></span>Sulfuric Acid</li>
                            <li>Nitric Acid</li>
                            <li>Phosphoric Acid</li>
                            <li>Hydrochloric Acid</li>
                        </ul>
                    </div>

                    <button class="cat-button" style="font-size:10px ;">GET A CUSTOM QUOTE</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="category-list" style="border-radius:20px;">
                    <div style="min-height: 200px;">
                        <h2 style="font-size:18px; color:#A6CB26; font-weight: bold;"><u>Liquids</u></h2>
                        <ul>
                            <li>Ungarol (SLES – Sodium Lauryl Ether Sulphate)</li>
                            <li>Ufacid (LABSA- Linear Alkyl Benzene Sulphonic Acid)</li>
                            <li>Industrial Salt</li>
                            <li>Caustic Soda (Pearls & Flakes)</li>
                            <li>CDE (Coco Diethanolamine)</li>
                            <li>Formalin</li>
                        </ul>
                    </div>
                    <button class="cat-button" style="font-size:10px ;">GET A CUSTOM QUOTE</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="category-list" style="border-radius:20px;">
                    <div style="min-height: 200px;">
                        <h2 style="font-size:18px; color:#A6CB26; font-weight: bold;"><u>Powder Materials</u></h2>
                        <ul>
                            <li>Caustic Soda (Pearls and Flakes)</li>
                            <li>Magadi Soda</li>
                            <li>Soda Ash Light</li>
                            <li>Whiting 4</li>
                            <li>Carbomer</li>
                            <li>EDTA</li>
                        </ul>
                    </div>
                    <button class="cat-button" style="font-size:10px ;">GET A CUSTOM QUOTE</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="category-list" style="border-radius:20px;">
                    <div style="min-height: 200px;">
                        <h2 style="font-size:18px; color:#A6CB26; font-weight: bold;"><u>Related Materials</u></h2>
                        <ul>
                            <li>Coconut Oil</li>
                            <li>Sodium Silicate</li>
                            <li>Essential Oils</li>
                            <li>Glycerin</li>
                            <li>Hydrogen Peroxide</li>
                            <li>Butyl Glycol</li>
                        </ul>
                    </div>
                    <button class="cat-button" style="font-size:10px ;">GET A CUSTOM QUOTE</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="padding: 0; background: #EBEEF2;" class="materials">
    <div class="container">
        <h2 style="color: #A6CB26; text-align: center; font-weight: bold;">Our Services</h2>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <p class="mb-4">Professional Cleaning and Laundry Services</br>
                                    With our well trained and highly skilled personnel and top-end, safe products, we
                                    are braced to meet your cleaning and laundry needs.

                                <h2 style="font-size:18px; color:#A6CB26; font-weight: bold;">Our services include:</h2>
                                <ul>
                                    <li>Office Cleaning Services</li>
                                    <li>Domestic Cleaning Services</li>
                                    <li>Commercial and Residential Premise Sanitization</li>
                                    <li>High & Low Window Cleaning</li>
                                    <li>Toilet Consumables Supply</li>
                                    <li>Institutional Laundry Services to Hospitals, Hotels</li>
                                    <li>Training Operation Procedures to Users</li>
                                </ul>
                                <button class="btn btn-sm"
                                    style="border: 2px solid #A6CB26; color: #A6CB26; border-radius: 50px; font-size: 12px; ">Contact
                                    us for quote <i class="bi bi-arrow-right"></i></button>

                                </p>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">

                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="text">
                                                <p><span></span> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="text">
                                                <p><span></span> <a href="mailto:info@yoursite.com"></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="text">
                                                <p><span></span> <a href="tel://1234567920"></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">





                                    </div>
                                </form>
                                <div class="w-100 social-media mt-5">
                                    <h3></h3>
                                    <p>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-5 img"
                                style="background-image: url(images1/laundry_0.png); border-radius:10px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="padding: 0; background: #EBEEF2;" class="materials">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <p class="mb-4">Professional Fumigation Services</br>
                                    We are vastly experienced in delivering scalable fumigation and pest control
                                    solutions for local households and business enterprises. Our team is at hand to help
                                    you tailor solutions quickly just as required, and at a reasonable cost.

                                <h2 style="font-size:18px; color:#A6CB26; font-weight: bold;">Our services include:</h2>
                                <ul>
                                    <li>Granary Fumigation</li>
                                    <li>Food Processing Plants Fumigation</li>
                                    <li>Shipping Containers Fumigation</li>
                                    <li>Shiphold Fumigation</li>
                                    <li>Household Fumigation</li>
                                </ul>
                                <button class="btn btn-sm"
                                    style="border: 2px solid #A6CB26; color: #A6CB26; border-radius: 50px; font-size: 12px; ">Contact
                                    us for quote <i class="bi bi-arrow-right"></i></button>


                                </p>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">

                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="text">
                                                <p><span></span> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="text">
                                                <p><span></span> <a href="mailto:info@yoursite.com"></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="text">
                                                <p><span></span> <a href="tel://1234567920"></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">





                                    </div>
                                </form>
                                <div class="w-100 social-media mt-5">
                                    <h3></h3>
                                    <p>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-5 img"
                                style="background-image: url(images1/fumigation_0.png); border-radius:10px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section style="padding: 0; background: #EBEEF2;">
    <div class="container" style="min-height: 250px; ">
        <h2 style="color: #A6CB26; text-align: center; font-weight: bold;">Testimonials</h2>

    </div>
</section> -->

<section style="padding: 0; background: #EBEEF2;">
    <div class="container" style="min-height: 500px; ">
        <h2 style="color: #A6CB26; text-align: center; font-weight: bold;">Connect With Us</h2>
        <div style="width:700px;height:350px;border:2px solid #A6CB26; padding-left:20px">
            <h2
                style="color: #A6CB26; text-align: left; font-size: 24px; font-family: Playfair Display, serif; padding-top: 30px; padding-left: 10px">
                <strong>Subscribe To Our News Letter</strong>
            </h2>
            <p style=" padding-left: 10px;font-size:12px; text-align:left">Keep yourself in the know by email. Get
                updates on new products and services, offers, discounts and much more.</p>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1" style=" padding-left: 10px; font-size:14px; text-align:left">Email
                        address</label>
                    <input style=" width:600px; height:35px; border-radius:10px" type="email"
                        class="form-control mx-sm-3" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted"
                        style=" padding-left: 10px; font-size:12px; text-align:left">We'll never share your email with
                        anyone else.</small>
                </div>
                <div class="form-check" style=" padding-left: 25 px;">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" style=" font-size:14px; text-align:left">Send me
                        product catalogue</label>
                    <p style="font-size:12px; padding-top:0">By subscribing you are agreeing to our Terms & Conditions
                        of Use and Privacy Policy.</p>
                </div>
                <button class="btn" style="background: #A6CB26; color: #fff; font-size: 12px;">SUBSCRIBE</button>
            </form>
        </div>

    </div>
</section>
<script src="src/Data.js"></script>
<script src="src/main.js"></script>



<?php
include "footer.php";
?>