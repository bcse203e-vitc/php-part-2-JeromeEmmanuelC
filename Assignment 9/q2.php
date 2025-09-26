<?php
$filename = "products.txt";
$content = file_get_contents($filename);
$parts = preg_split('/[,\r\n]+/', trim($content));
$products = array();
for($i=0;$i<count($parts)-1;$i+=2){
    $products[] = array("name"=>$parts[$i],"price"=>(float)$parts[$i+1]);
}
usort($products, function($a,$b){return $a['price'] <=> $b['price'];});
echo "Product Name\tPrice\n";
foreach($products as $p){
    echo $p['name']."\t".$p['price']."\n";
}
?>

