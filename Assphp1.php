<?php

echo("========================= Q1: Calculate Inventory =========================\n\n");
$products=[["name"=>"iphone" ,"Price"=>"2$" ,"quantity"=> "1"],
          ["name"=>"Laptop" ,"Price"=>"2$" ,"quantity"=> "4"],
          ["name"=>"Camera" ,"Price"=>"2$" ,"quantity"=> "1"]] ;
function calculateInventoryValue($products){
    $total_price=0;
    $total_quantity=0;
    $totalInventoryValue;
    for($i=0; $i<count($products); $i++){
        $p=intval($products[$i]["Price"]);
        $q=intval($products[$i]["quantity"]);
        $total_price+=$p;
        $total_quantity+=$q;
    }

    $totalInventoryValue=$total_price*$total_quantity;

    print "<br><br>Total Inventory Value = " .$totalInventoryValue."$<br>" ;
}

calculateInventoryValue($products);
?>


<?php
echo("<br>======================== Q2: Merge Associative Arrays ======================<br><br>");

function mergeAssociativeArrays($arr1, $arr2) {
    $mergedArray = $arr1;
    $keys = array_keys($arr2);
    $size = count($keys);

    for ($i = 0; $i < $size; $i++) {
        $key = $keys[$i];
        if (isset($mergedArray[$key])) {
            $mergedArray[$key] = (array) $mergedArray[$key];
            $mergedArray[$key][] = $arr2[$key];
        } else {
            $mergedArray[$key] = $arr2[$key];
        }
    }

    return $mergedArray;
}

$arr1 = ["name" => "John", "age" => 25];
$arr2 = ["age" => 30, "city" => "New York"];

print_r(mergeAssociativeArrays($arr1, $arr2));
echo"<br>" ;
?>
<?php
echo("<br>======================== Q3: Merge Associative Arrays ======================<br><br>");

function groupProductsByCategory($products) {
    $groupedProducts = [];

    foreach ($products as $product) {
        $category = $product["category"];
        $price = intval($product["price"]); 
        if ($price >= 50) {
            $groupedProducts[$category][] = $product;
        }
    }

    return $groupedProducts;
}


$products = [
    ["name" => "Laptop", "category" => "Electronics", "price" => "1000$"],
    ["name" => "Phone", "category" => "Electronics", "price" => "700$"],
    ["name" => "Mouse", "category" => "Accessories", "price" => "30$"],
    ];

$result = groupProductsByCategory($products);
print_r($result);
?>

