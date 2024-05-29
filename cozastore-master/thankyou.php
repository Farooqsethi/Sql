<?php
include('component/header.php');
if(isset($_GET['odr'])){
	$orderid = $_GET['odr'];
	$queryorder = $pdo->prepare("SELECT * FROM `orders` WHERE  confirmationcode = :odr");
	$queryorder->bindParam("odr",$orderid);
	$queryorder->execute();
	$odrdata = $queryorder->fetchAll(PDO::FETCH_ASSOC);
	$queryinvoice = $pdo->prepare("SELECT * FROM `invoices` WHERE  confirmationcode = :odr");
	$queryinvoice->bindParam("odr",$orderid);
	$queryinvoice->execute();
	$invdata = $queryinvoice->fetch(PDO::FETCH_ASSOC);
?>
            <script>
                function printDiv(invoice) {
                    var printContents = document.getElementById(invoice).innerHTML;
                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = printContents;
                    window.print();
                    document.body.innerHTML = originalContents;
                }
            </script>

<!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
		Thank you For Your Order
        <br>
			Your Order Number is ODR#<?php echo $orderid ?>
		</h2>
       
	</section>	
    

	<section id="invoice" class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
                
                <div class="box bor10  col-md-6 account-details-wrapper m-t-40 p-lr-20 p-t-20 p-b-20">
                 
                <h3>Billing Information</h3>
                    <table class="table-my-orders wrap-table-my-orders m-t-20">
                        <tr class="table_row">
                            <td class="column-1">Name:</td>
                            <td class="column-2"><?php echo $invdata['username'] ?></td>
                        </tr>
                       
                        <tr class="table_row">
                            <td class="column-1">Customer Email:</td>
                            <td class="column-2"><?php echo $invdata['useremail'] ?></td>
                        </tr>
                        <tr class="table_row">
                            <td class="column-1">Billing Phone:</td>
                            <td class="column-2"><?php echo $invdata['userphonenumber'] ?></td>
                        </tr>
                        
                        <tr class="table_row">

                        </tr>

                    </table>
                </div>
                <div class="col-md-12 m-t-20 wrap-recent-orders bor10 p-lr-20 p-t-20 p-b-20">
                    <h2>Ordered Items</h2> 
                    <div class="wrap-table-my-orders m-t-20">
                        
                        <table class="table-my-orders">
                            <tr class="table_head">
                                <th class="column-1">Order #</th>
                                <th class="column-2">Item Name</th>
                                <th class="column-3">Item Quantity</th>
                                <th class="column-4">Item Total</th>
                            </tr>
                            <?php
                            foreach ($odrdata as $odrdata => $odrvalues) {
                            ?>
                            <tr class="table_row">
                                <td class="column-1">ODR - <?php echo $orderid ?></td>
                                <td class="column-2"><?php echo $odrvalues['productname'] ?></td>
                                <td class="column-3"><?php echo $odrvalues['productquantity'] ?></td>
                                <td class="column-4">Rs. <?php echo $odrvalues['productprice'] ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                            <tr class="table_row">
                                <td class="text-right" colspan="3">
                                    Order Total
                                </td>
                                <td>
                                    <?php echo $invdata['totalamount'] ?>
                                </td>
                            </tr>

                        </table>
                       
                        
                    </div>
                    
                </div>
               
               
            </div>
                <div class="spacer">
              
        
                </div>
                <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn1  p-lr-15 trans-04" onclick='printDiv("invoice")'>Print Invoice</button>
            </div>
    </section>

<?php
}
include('component/footer.php');
?>