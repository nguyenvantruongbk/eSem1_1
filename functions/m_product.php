<?php 
require_once("database.php");

function newest_products(){
    $sql = "select * from products order by id desc limit 8";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function related_products($categoryId){
    $sql = "SELECT * from products where category_id = $categoryId order by id desc limit 8";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function best_sellers(){
    $sql = "select * from products order by qty desc limit 8";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function hot_items(){
    $sql = "select * from products order by price desc limit 8";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function recent_blogs(){
    $sql = "SELECT * from blogs order by date desc limit 8";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function search_items($search){
    
    $sql = "SELECT * FROM products WHERE name LIKE '%$search%'";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;

}
function order_list(){
    $sql = "SELECT * from orders order by id desc ";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
//   //2. query SQL
//      // 2.1. Lấy tham số
//      $limit = isset($_GET["limit"]) && $_GET["limit"]!= "" ?$_GET["limit"]:20;
//      $search = isset($_GET["search"])?$_GET["search"]:"";
//      //2.2. áp dụng giá trị tham số vào truy vấn
//     $sql = "SELECT * FROM products WHERE name LIKE '%$search%' LIMIT $limit";
//     $result = $conn->query($sql);
//     $list = [];
//     while($row = $result->fetch_assoc()){
//       $list[] = $row;
//     }

function categories_all(){
    $sql = "select * from categories";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}



function category_detail($category_id){
    $sql_cat = "select * from categories where id = $category_id";
    $result = query($sql_cat);
    if($result->num_rows > 0){
        $category = $result->fetch_assoc();
        $sql_product = "select * from products where category_id = $category_id";
        $result = query($sql_product);
        $list = [];
        while($row = $result->fetch_assoc()){
            $list[] = $row;
        }
        $category["products"] = $list;
        return $category;
    }
    return null;
    
}

function product_detail($product_id)  {
    $sql = "select * from products where id = $product_id";
    $result = query($sql);
    if($result->num_rows > 0){
        return $result->fetch_assoc();// 1 product
    }
    return null;
}
function blog_detail($blog_id)  {
    $sql = "select * from blogs where id = $blog_id";
    $result = query($sql);
    if($result->num_rows > 0){
        return $result->fetch_assoc();// 1 product
    }
    return null;
}
function blog_category_detail($blog_category_id){
    $sql_cat = "SELECT * from blog_categories where id = $blog_category_id";
    $result = query($sql_cat);
    if($result->num_rows > 0){
        $blog_category = $result->fetch_assoc();
        $sql_blog = "SELECT * from blogs where blog_categories_id = $blog_category_id";
        $result = query($sql_blog);
        $list = [];
        while($row = $result->fetch_assoc()){
            $list[] = $row;
        }
        $blog_category["blogs"] = $list;
        return $blog_category;
    }
    return null;
    
}
function order_detail($order_id){
    $sql_order = "SELECT * from orders where id = $order_id";
    $result = query($sql_order);
    if($result->num_rows > 0){
        $order_detail = $result->fetch_assoc();//order_detail["id","customer_name","tel",...,"payment_method"]
        //
        
        $sql_order_product = "SELECT * from order_products where order_id = $order_id";
        $result = query($sql_order_product);
        $list = [];
        while($row = $result->fetch_assoc()){
            $list[] = $row;
        }
        $order_detail["order_product"] = $list;////order_detail["id","customer_name","tel",...,"payment_method",     -------"product"]    order_detail["product"]["product_id","bought_qty","price"]
       // $product_ids = implode(",",$order_detail["order_product"]["product_id"]);
       $product_ids = [];
        foreach($list as $item){
            $product_ids[] = $item["product_id"];
        }
        $product_ids = implode(",",$product_ids); // biến array thành string
        $sql = "select * from products where id in ($product_ids)";
        $result = query($sql);
        $list = [];
        while($row = $result->fetch_assoc()){
            $list[] = $row;
        }

        $order_detail["product"] = $list; 

        return $order_detail;//$order_detail["product"]; $order_detail["order_product"] order_detail["id","customer_name","tel",...,"payment_method"]
    }
    return null;
    //order_detail(19);
    //$oderdetail["order_product"]["order_id"]
    
}
function blog_categories_all(){
    $sql = "SELECT * from blog_categories";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function related_blogs($blogId){
    $sql = "SELECT * from blogs where blog_categories_id = $blogId order by id desc limit 8";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}