<?php
session_start();
include('../connect.php');
$a = $_POST['code'];
$b = $_POST['name'];
$c = $_POST['exdate'];
$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'];
$g = $_POST['o_price'];
$h = (float) $_POST['profit']; // cast the profit as a float
$i = $_POST['gen'];
$j = $_POST['date_arrival'];
$k = $_POST['qty_sold'];
$l = 0; // provide a value for onhand_qty field
// query
$sql = "INSERT INTO products (product_code, product_name, expiry_date, price, supplier, qty, o_price, profit, gen_name, date_arrival, qty_sold, cost, onhand_qty) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :l, :m)";
$l = 0;
$m = 0;
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,
                  ':b'=>$b,
                  ':c'=>$c,
                  ':d'=>$d,
                  ':e'=>$e,
                  ':f'=>$f,
                  ':g'=>$g,
                  ':h'=>$h,
                  ':i'=>$i,
                  ':j'=>$j,
                  ':k'=>$k,
                  ':l'=>$l,
                  ':m'=>$m));

header("location: products.php");
?>
