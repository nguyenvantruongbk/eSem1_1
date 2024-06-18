<?php
require_once("functions/m_product.php");
// require_once("functions/checkout.php");
// updateStatusPaid($order_id);
$orderlist = order_list();

$id = $_GET["id"];
$oderdetail = order_detail($id);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("html/styles.php");?>
</head>
<body>



  <!--=============================
    DASHBOARD MENU START
  ==============================-->
  <div class="wsus__dashboard_menu">
    <div class="wsusd__dashboard_user">
      <!-- <img src="images/dashboard_user.jpg" alt="img" class="img-fluid"> -->
      <p>Admin</p>
    </div>
  </div>
  <!--=============================
    DASHBOARD MENU END
  ==============================-->

  <!--=============================
    DASHBOARD START
  ==============================-->
<section id="wsus__dashboard">
  <div class="container-fluid">

    <!-- sidbar -->
    <?php include_once("html/sidebar_admin.php");?>
    <!-- main --> 
    <div class="row">
      <div class="col-xl-9 col-xxl-10 col-lg-9  ms-auto">
          <div class="dashboard_content">
            <h3><i class="fas fa-list-ul"></i> order detail</h3>
                    
          </div>
      </div>
  </div>
    <!-- main --> 
    <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                    <div class="dashboard_content">
                        <div class="wsus__invoice_area">
                            <div class="wsus__invoice_header">
                                <div class="wsus__invoice_content">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-4 mb-5 mb-md-0">
                                            <div class="wsus__invoice_single">
                                                <h5>Invoice To</h5>
                                                <h6><?php echo $oderdetail["customer_name"];?></h6>
                                                <p><?php echo $oderdetail["address"];?></p>
                                               
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-4 mb-5 mb-md-0">
                                            <div class="wsus__invoice_single text-md-center">
                                                <h5>shipping information</h5>
                                                <h6>Name: <?php echo $oderdetail["customer_name"];?></h6>
                                                <p><?php echo $oderdetail["address"];?></p>
                                                <p>Telephone: <?php echo $oderdetail["tel"];?></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-4">
                                            <div class="wsus__invoice_single text-md-end">
                                                <h5>Payment Details</h5>
                                                <h6>Name: <?php echo $oderdetail["customer_name"];?></h6>
                                                
                                                <p>Payment Type: <?php echo $oderdetail["payment_method"];?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wsus__invoice_description">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th class="images">
                                                    images
                                                </th>

                                                <th class="name">
                                                    product
                                                </th>

                                                <th class="amount">
                                                    Price
                                                </th>

                                                <th class="quentity">
                                                    quantity
                                                </th>
                                                <th class="total">
                                                    total
                                                </th>
                                                <th class="total">
                                                    order status
                                                </th>
                                            </tr>
                                            <?php foreach($oderdetail["product"] as $item):?>
                
            
                                            <tr>
                                                <td class="images">
                                                    <img src="<?php echo $item["thumbnail"];?>" alt="product" class="img-fluid w-100">
                                                </td>

                                                <td class="name">
                                                    <p><?php echo $item["name"];?></p>
                                                    <span>Model : <?php echo $item["model"];?></span>
                                                    <span>Brand : <?php echo $item["brand"];?></span>
                                                </td>
                                                <td class="amount">
                                                    $<?php echo $item["price"];?>
                                                </td>

                                                <td class="quentity">
                                                   <?php foreach($oderdetail["order_product"] as $item2):
                                                    {if($item2["product_id"]==$item["id"])                                                 
                                                    echo $item2["bought_qty"];}?>                                                                                                      
                                                    <?php endforeach;?> 
                                                </td>
                                                <td class="total">
                                                <?php foreach($oderdetail["order_product"] as $item2):
                                                    {if($item2["product_id"]==$item["id"])                                                 
                                                    echo $item2["price"]*$item2["bought_qty"];}?>                                                                                                      
                                                    <?php endforeach;?>
                                                </td>
                                                <td class="total">
                                                <?php echo $oderdetail["order_status"];?>
                                                </td>
                                            </tr>
                                            <?php endforeach;?> 
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="wsus__invoice_footer">
                                <!-- <p><span>Shipping fee:</span> $0.00</p>
                                <p><span>Tax:</span> $110.90</p>
                                <p><span>Discount: </span> $0.00</p> -->
                                <p><span>Total Amount:</span> <?php echo $oderdetail["grand_total"];?> </p>
                            </div>
                            <div>

                            

                          
                                   
                            <div class="wsus__invoice_footer" style="margin-top:60px; padding: 10px;">
                                
                                <p><span>Order Processing:</span>  </p>
                            </div >
                                    
                                
                            <div style="margin:20px;">

                                    <?php if(strcasecmp($oderdetail["order_status"], "To Confirm") == 0):?>

                                <button type="button" class="btn btn-primary"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        <a style="color: white;" href="/c_order_process.php?id=<?php echo $oderdetail["id"];?>&orderprocess=Confirmed">Confirm</a>
                                </button>
                                

                                <button type="button" class="btn btn-primary"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        <a style="color: white;" href="/c_order_process.php?id=<?php echo $oderdetail["id"];?>&orderprocess=Canceled">Cancel</a>
                                </button>

                                
                                <?php endif;?>

                              
                                    
                                   
                               <?php if(strcasecmp($oderdetail["order_status"], "Confirmed") == 0):?>    
                                <button type="button" class="btn btn-primary"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        <a style="color: white;" href="/c_order_process.php?id=<?php echo $oderdetail["id"];?>&orderprocess=Shipping">Shipping</a>
                                </button>
                               
                                <?php endif;?>

                                 <?php if(strcasecmp($oderdetail["order_status"], "Shipping") == 0):?>   
                                <button type="button" class="btn btn-primary"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        <a style="color: white;" href="/c_order_process.php?id=<?php echo $oderdetail["id"];?>&orderprocess=Refund">Refund</a>
                                </button>
                                <button type="button" class="btn btn-primary"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        <a style="color: white;" href="/c_order_process.php?id=<?php echo $oderdetail["id"];?>&orderprocess=Completed">Completed</a>
                                </button>
                                <?php endif;?>
                                <?php if(strcasecmp($oderdetail["order_status"], "Completed") == 0):?>   
                                <h6>Order have already completed and recorded</h6>
                                <?php endif;?>
                                <?php if(strcasecmp($oderdetail["order_status"], "Refund") == 0):?>   
                                <h6>Order have been refunded, to check product, update and save to stock</h6>
                                <?php endif;?>
                                <?php if(strcasecmp($oderdetail["order_status"], "Canceled") == 0):?>   
                                <h6>Order confirmed: cancel, to update product quantity</h6>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>


    <!-- main --> 

  <!-- detailorder -->                                 
  <!-- enddetailorder -->
   <!-- endmain --> 
  </div>
</section>
<!-- /////////////////////////////////////////////////////////////////// -->
   <?php include_once("html/js.php");?> 
</body>