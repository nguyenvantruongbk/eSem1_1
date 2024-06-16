<?php
require_once("functions/m_product.php");
// require_once("functions/checkout.php");
// updateStatusPaid($order_id);
$orderlist = order_list();
//$oderdetail = order_detail(26);


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
      <p>User: Admin</p>
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

            <h3><i class="fas fa-list-ul"></i> order summary</h3>


            <div class="wsus__dashboard_order">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="package">Customer name</th>
                      <th class="p_date">Telephone</th>
                      <th class="e_date">Address</th>
                      <th class="price">grand total</th>
                      <th class="method">Payment status</th>
                      <th class="tr_id">Shipping Method</th>
                      <th class="status">Payment Method</th>
                      <th class="status">Detail Order</th>
                    </tr>
                  </thead>
                  <tbody>                                  
                  <?php foreach($orderlist as $item):?>
                    <tr>                    
                      <td class="package"><?php echo $item["customer_name"];?> </td>
                      <td class="p_date"><?php echo $item["tel"];?></td>
                      <td class="e_date"><?php echo $item["address"];?></td>
                      <td class="price"><?php echo $item["grand_total"];?></td>
                      <td class="method"><?php echo $item["status"];?></td>
                      <td class="tr_id"><?php echo $item["shipping_method"];?></td>
                      <td class="status"><?php echo $item["payment_method"];?></td>
                      <td class="status"><a href="\order_detail.php?id=<?php echo $item["id"];?>">view</a></td>



                    
                     </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              
            </div>
          </div>
        </div>
      </div>








      </div>






<!-- /////////////////////////////////////////////////////////////////// -->
   
    <?php include_once("html/js.php");?> 
</body>