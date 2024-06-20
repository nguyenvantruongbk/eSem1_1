<?php
require_once("functions/m_product.php");
require_once("functions/m_contact.php");
// require_once("functions/checkout.php");
// updateStatusPaid($order_id);
$contactmessage = recent_message();
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

            <h3><i class="fas fa-list-ul"></i> Customer Messages</h3>


            <div class="wsus__dashboard_order">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="package">Name</th>
                      <th class="package">Email</th>
                      <th class="package">Telephone</th>
                      <th class="package">Subject</th>
                      <th class="package" style="width: 500px;">Messenger</th>
                     
                    </tr>
                  </thead>
                  <tbody>                                  
                  <?php foreach($contactmessage as $item):?>
                    <tr>                    
                      <td class="package"><?php echo $item["name"];?> </td>
                      <td class="package"><?php echo $item["email"];?> </td>
                      <td class="package"><?php echo $item["tel"];?> </td>
                      <td class="package"><?php echo $item["subject"];?> </td>
                      <td class="package" style="width: 500px;"><?php echo $item["mes"];?> </td>
                     




                    
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