<?php
include "header.php";
$method = $_GET["method"];
$amount = $_GET["amount"];
?>
<?php if($method == "paypal"): ?>
    <div class="container" style="padding: 30px 0 30px 0;">
        <div class="row justify-content-center">
            <h2>Amount Ksh <strong><?php echo $_GET["amount"]; ?></strong> | USD <strong><?php echo round($amount/119,1); ?></strong></h2>
            <!-- Replace "test" with your own sandbox Business account app client ID -->
            <script src="https://www.paypal.com/sdk/js?client-id=AdwWd55LjqL2L4n1o-6g--Oj8lR7NB2qN4TbtL6oAMkAEyeAOYqvvrLrFBQiJBHuzYzKZad-UdPJPSGp&currency=USD"></script>
            <!-- Set up a container element for the button -->
            <div id="paypal-button-container"></div>
                <script>
                  paypal.Buttons({
                    // Order is created on the server and the order id is returned
                    createOrder: (data, actions) => {
                      return fetch("payment/paypal.php?order=<?php echo round($amount/119,1); ?>", {
                        method: "get",
                        // use the "body" param to optionally pass additional order information
                        // like product ids or amount
                      })
                      .then((response) => response.json())
                      .then((order) => order.id);
                    },
                    // Finalize the transaction on the server after payer approval
                    onApprove: (data, actions) => {
                      return fetch(`payment/paypal.php?confirm=${data.orderID}&price=<?php echo round($amount/119,1); ?>`, {
                        method: "get",
                      })
                      .then((response) => response.json())
                      .then((orderData) => {
                          $('#response').show();
                          setTimeout("window.close()",5000)
                        // Successful capture! For dev/demo purposes:
                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                        const transaction = orderData.purchase_units[0].payments.captures[0];
                        alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                        // When ready to go live, remove the alert and show a success message within this page. For example:
                        // const element = document.getElementById('paypal-button-container');
                        // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                        // Or go to another URL:  actions.redirect('thank_you.html');
                      });
                    }
                  }).render('#paypal-button-container');
                </script>
                <div class="alert alert-success" role="alert" id="response" style="display:none;">
                  Successfully payed. Minutes have been added into your account.
                </div>
        </div>
    </div>
<?php endif; ?>  

<?php if($method == "mpesa"): ?>
    <div class="container" style="padding: 30px 0 30px 0;">
        <div class="row justify-content-center">
            <h2>Amount Ksh <strong><?php echo $_GET["amount"]; ?></strong></h2>
            <div style="padding: 50px 0 50px 0">
                <div class="row">
                    <div class="col-md-2">
                        <img src="assets/images/mpesa.png" width="120px" style="margin-top: 70px;">
                    </div>
                    <div class="col-md-4">
                        <!-- <input type="text" name="" placeholder="Amount"> -->
                          <fieldset>
                            <div class="mb-3">
                              <label for="phone" class="form-label">MPESA checkout phone number</label>
                              <input type="text" id="phone" class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                              <label for="disabledTextInput" class="form-label">Amount</label>
                              <input disabled type="text" id="disabledTextInput" class="form-control" value="<?php echo $amount ?>">
                              <input type="hidden" name="amount" id="amount" value="<?php echo $amount ?>">
                            </div>
                            <button class="btn btn-primary" onclick="mpesaPayment('<?php echo $amount ?>')">Make payment</button>
                          </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>    
<?php
include "footer.php";
?>