<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=bankcalc", "root", "");

$column = array('dataB', 'emriBankes', 'vlera');

// $order_costumer_name=$_POST['order_costumer_name'];
// $order_item=$_POST['order_item'];
// $order_date=$_POST['order_date'];
// $order_value=$_POST['order_value'];

// $qry = "INSERT INTO `table10`(`order_costumer_name`, `order_item`, `order_date`,
//  `order_value`) VALUES ('$order_costumer_name', '$order_item', '$order_date','$order_value')";
//  $insert = mysqli_query($con,$qry);
//  if(!$insert){
//     echo "problem";
//  }
//  else{
//     echo "success";
//  }

// echo $order_costumer_name."<br>". $order_item."<br>".$order_date."<br>".$order_value."<br>";

$query = '
SELECT * FROM banka 
WHERE dataB LIKE "%' . $_POST["search"]["value"] . '%" 
OR emriBankes LIKE "%' . $_POST["search"]["value"] . '%" 
OR vlera LIKE "%' . $_POST["search"]["value"] . '%" 
    
';

if (isset($_POST["order"])) {
    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if ($_POST["length"] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}



//aa


//aaa

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

$total_order = 0;

foreach ($result as $row) {
    $sub_array = array();
    $sub_array[] = $row["dataB"];
    $sub_array[] = $row["emriBankes"];
    $sub_array[] = $row["vlera"];

    $total_order = $total_order + floatval($row["vlera"]);
    $data[] = $sub_array;
}

function count_all_data($connect)
{
    $query = "SELECT * FROM banka";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}

$output = array(
    'draw'    => intval($_POST["draw"]),
    'recordsTotal'  => count_all_data($connect),
    'recordsFiltered' => $number_filter_row,
    'data'    => $data,
    'total'    => number_format($total_order, 2)
);

echo json_encode($output);