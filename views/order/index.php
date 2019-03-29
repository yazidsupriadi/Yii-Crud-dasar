<?php
/* @var $this yii\web\View */
?>

<h1 class="text center">Daftar Order Barang</h1>


<?php 
use yii\helpers\Html;

echo Html::a('Create',['create'],['class'=>'btn btn-primary']);

echo '<table class= "table table-bordered table-striped table-info">';
echo '<tr>';
echo'<th>ID</th>';
echo '<th>Tanggal order</th>';
echo '<th>ID customer</th>';
echo '<th>Action</th>';
echo '</tr>';

foreach ($orders as $order) {
	echo '<tr>';
echo'<td>'.$order->id.'</td>';
echo '<td>'.$order->order_date.'</td>';
echo '<td>'.$order->customers_id.'</td>';

echo '<td>';
echo Html::a('<i class="glyphicon glyphicon-pencil"></i>',['order/update','id'=>$order->id]);

echo Html::a('<i class="glyphicon glyphicon-trash"></i>',['order/delete','id'=>$order->id],['onclick'=>'return(confirm(apakah adata mau dihapus ?) ? true :false );','style'=>' margin-left:10px;']);
echo '</tr>';	
}

echo'</table>';
