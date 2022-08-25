var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (slides.length > 0) {
    for(i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if(slideIndex > slides.length) {
      slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 4000);
  }
}

// console.log("here!!!!!");
fetchCart();
function fetchCart() {
  var request = $.ajax({
  url: 'cart/cart-items.php',
  data: '',
  dataType: 'html',
  });
  request.done(function( data ) {
    // console.log(data);
    $( "#cart_section" ).html(data);
  }); 
}

function mpesaPayment(amount){
  var phone = $("#phone").val();
  var request = $.ajax({
  url: 'payment/stk_push.php?checkout_phone='+ phone +'&amount=' + amount,
  data: '',
  dataType: 'html',
  });
  request.done(function( data ) {
    // $( "#cart_section" ).html(data);
  }); 
}

function addToCart(id){
  var request = $.ajax({
  url: 'cart/add_cart.php?id=' + id,
  data: '',
  dataType: 'html',
  });
  request.done(function( data ) {
    // console.log(data);
    // $( "#sticky_notification" ).html(data);
    getTotalCartItems();
    $('#sticky_notification').html('<div class="alert alert-success"><span class="fa fa-check-circle-o"></span> Added to cart</div>');
    $('.alert-success').fadeOut(3000);  
  });
}

function getTotalCartItems(){
    var form_data = new FormData();
    form_data.append('type', "total-cart-items");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: "cart/cart.php",
        data: form_data,
        processData: false,
        contentType: false,
        complete: function (data) {

        },
        success: function (data) {
          $('#total_items').html(data.total);
        },
    });
}

function saveCartChanges(){
  $.ajax({
      type: "POST",
      dataType: 'json',
      url: "cart/save_cart.php",
      data: $('#cart_form').serialize(),
      complete: function (data) {
      },
      success: function (data) {
        if(data.status == "success"){
          fetchCart();
        }
      },
  });
}