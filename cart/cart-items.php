<?php
session_start();
include "../products.php";
?>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <form method="POST" action="#" id="cart_form">
            <table class="table table-bordered table-striped">
                <thead>
                    <th></th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </thead>
                <tbody>
                    <?php
					//initialize total
					$total = 0;
					if (!empty($_SESSION['cart'])) {
						//connection
						$conn = new mysqli('localhost', 'root', '', 'glerian');
						//create array of initail qty which is 1
						$index = 0;
						if (!isset($_SESSION['qty_array'])) {
							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
						}
						$sql = "SELECT * FROM products WHERE id IN (" . implode(',', $_SESSION['cart']) . ")";
						$query = $conn->query($sql);
						while ($row = $query->fetch_assoc()) {
					?>
                    <tr>
                        <td>
                            <a href="delete_item.php?id=<?php echo $row['id']; ?>&index=<?php echo $index; ?>"
                                class="btn btn-danger btn-sm"><span
                                    class="glyphicon glyphicon-trash"></span></a>
                        </td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo number_format($row['price'], 2); ?></td>
                        <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                        <td><input type="text" class="form-control"
                                value="<?php echo $_SESSION['qty_array'][$index]; ?>"
                                name="qty_<?php echo $index; ?>" onkeyup="saveCartChanges()"></td>
                        <td><?php echo number_format($_SESSION['qty_array'][$index] * $row['price'], 2); ?>
                        </td>
                        <?php $total += $_SESSION['qty_array'][$index] * $row['price']; ?>
                    </tr>
                    <?php
							$index++;
						}
					} else {
						?>
                    <tr>
                        <td colspan="4" class="text-center">No Item in Cart</td>
                    </tr>
                    <?php
					}

					?>
                    <tr>
                        <td colspan="4" align="right"><b>Total</b></td>
                        <td><b><?php echo number_format($total, 2); ?></b></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <div style="float: right;">
                        <a href="clear_cart.php" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>
                Clear Cart</a>
                    </div>
                </div>
            </div>            
            <input type="hidden" name="save">
<!--             <a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>
                Back</a>
            <button type="submit" class="btn btn-success" name="save">Save Changes</button>
            
            <a href="checkout.php" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>
                Checkout</a> -->
        </form>
        <h2>Checkout</h2>
        <div class="row">
            <div class="col-md-12">
                <div style="float: left; margin-right: 10px;">
                    <a href="payment.php?method=mpesa&amount=<?php echo $total; ?>"><img src="assets/images/mpesa.png" width="120px"></a>
                </div>
                <div style="float: left; margin-right: 10px;">
                    <a href="payment.php?method=visa&amount=<?php echo $total; ?>"><img src="assets/images/visa.png" width="100px"></a>
                </div>
                <div style="float: left; margin-right: 10px;">
                    <a href="payment.php?method=paypal&amount=<?php echo $total; ?>"><img src="assets/images/paypal.png" width="130px"></a>
                </div>
            </div>
        </div>
    </div>
</div>