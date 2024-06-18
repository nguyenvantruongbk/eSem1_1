<?php
require_once("functions/m_product.php");
// require_once("functions/checkout.php");
// updateStatusPaid($order_id);


$id = $_GET["id"];
$orderlist = my_order_list($id);
//$oderdetail = order_detail($id);


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

<?php include_once("html/header.php");?>
    <?php include_once("html/nav.php");?>
    <div class="container">
       <!--============================
        BREADCRUMB START
    ==============================-->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>Order List</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Order</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BREADCRUMB END
    ==============================-->
    <div>

<!-- =================== -->



<div class="row">
        <div class="col-xl-12 col-xxl-12 col-lg-12  ms-auto">
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
                      <th class="method">Shipping Method</th>
                      <th class="status">Payment Method</th>
                      <th class="status">Order Status</th>
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
                      <td class="method"><?php echo $item["shipping_method"];?></td>
                      <td class="status"><?php echo $item["payment_method"];?></td>
                      <td class="status"><?php echo $item["order_status"];?></td>
                      <td class="status"><a href="\my_order_detail.php?id=<?php echo $item["id"];?>">view</a></td>



                    
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

    <?php include_once("html/footer.php");?>
    <?php include_once("html/js.php");?> 
</body>