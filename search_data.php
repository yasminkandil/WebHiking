<?php
include 'SearchOr.php';
$search = new Search();
$sqlConditions = array();
if(!empty($_POST['type']) && (!empty($_POST['keywords']) || !empty($_POST['sortValue']))){
    if($_POST['type'] == 'search'){
        $sqlConditions['search'] = array('UserMail'=>$_POST['keywords'],'ProductName'=>$_POST['keywords'], 'Quantity'=>$_POST['keywords'],'PriceOfOneItem'=>$_POST['keywords'],'Total'=>$_POST['keywords'],'Address'=>$_POST['keywords'],'City'=>$_POST['keywords'],'State'=>$_POST['keywords'],'Zip'=>$_POST['keywords'],'CardName'=>$_POST['keywords'],'DateOfOrder'=>$_POST['keywords']);
        $sqlConditions['order_by'] = 'ID DESC';
    }elseif($_POST['type'] == 'sort'){
		if($_POST['keywords']) {
			$sqlConditions['search'] = array('UserMail'=>$_POST['keywords'],'ProductName'=>$_POST['keywords'], 'Quantity'=>$_POST['keywords'],'PriceOfOneItem'=>$_POST['keywords'],'Total'=>$_POST['keywords'],'Address'=>$_POST['keywords'],'City'=>$_POST['keywords'],'State'=>$_POST['keywords'],'Zip'=>$_POST['keywords'],'CardName'=>$_POST['keywords'],'DateOfOrder'=>$_POST['keywords']);
		}
        $sortValue = $_POST['sortValue'];
        $sortArribute = array(
            
            'asc'=>array(
                'order_by'=>'UserMail ASC'
            ),
            'desc'=>array(
                'order_by'=>'UserMail DESC'
         )   
        );
        $sortKey = key($sortArribute[$sortValue]);
        $sqlConditions[$sortKey] = $sortArribute[$sortValue][$sortKey];
    }
}else{
    $sqlConditions['order_by'] = 'ID DESC';
}
$orders = $search->searchResult($sqlConditions);
if(!empty($orders)){    
	foreach($orders as $order){
		
		echo '<tr>';
		echo '<td>'.$order['ID'].'</td>';
		echo '<td>'.$order['UserMail'].'</td>';
		echo '<td>'.$order['ProductName'].'</td>';
		echo '<td>'.$order['Quantity'].'</td>';
        echo '<td>'.$order['PriceOfOneItem'].'</td>';
        echo '<td>'.$order['Total'].'</td>';
        echo '<td>'.$order['Address'].'</td>';
        echo '<td>'.$order['City'].'</td>';
        echo '<td>'.$order['State'].'</td>';
        echo '<td>'.$order['Zip'].'</td>';
        echo '<td>'.$order['CardName'].'</td>';
		echo '<td>'.$order['DateOfOrder'].'</td>';
		echo '</tr>';
	}
}else{
    echo '<tr><td colspan="12">No user(s) found...</td></tr>';
}
exit;