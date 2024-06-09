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