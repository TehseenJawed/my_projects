<?php
/*$CONNECTION = mysqli_connect('localhost','root','','soft');*/
$debitTable = 'production_file';
$creditTable = 'invoice_detail';
$finalData = array();
include('config.php');
// get debt data
$queryOfDebt = mysqli_query($conn,"select * from ".$debitTable." order by prod_date");
while($row = mysqli_fetch_assoc($queryOfDebt)) {
    $finalData[$row['est_packs_qty']][] = $row;
}
// get credit data
$queryOfCredit = mysqli_query($conn,"select * from ".$creditTable." d, invoice i order by i.dc_date");
while($row = mysqli_fetch_assoc($queryOfCredit)) {
    $finalData[$row['qty']][] = $row;
}

// rearrange all data with date
$rearrangedFinalData = array();
foreach($finalData AS $first) {
    foreach($first AS $data) {
        $temp = array();
        $temp['date'] = isset($data['dc_date']) ? $data['dc_date'] : $data['prod_date'];
        $temp['invoice'] = isset($data['prod_id']) ? $data['prod_id'] : $data['prod_id'];
        $temp['credit'] = isset($data['est_packs_qty']) ? $data['est_packs_qty'] : 0;
        $temp['debit'] = isset($data['qty']) ? $data['qty'] : 0;
        $temp['customer'] = $data['remarks'];
        $rearrangedFinalData[] = $temp;
    }
}
usort($rearrangedFinalData,function($a,$b){
        return strtotime($a['date']) > strtotime($b['date']);
});
var_dump($rearrangedFinalData);