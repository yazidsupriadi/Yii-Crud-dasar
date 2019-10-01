<h1>daftar employee</h1>


<?php 
use yii\helpers\Html;

echo Html::a('Create',['create'],['class'=>'btn btn-primary']);

echo '<table class= "table table-bordered teble-striped">';
echo '<tr>';
echo'<th>ID Orders</th>';
echo '<th>ID Customers</th>';
echo '<th>Jumlah orderan</th>';
echo '<th>Harga Eceran</th>';

echo '<th>Action</th>';
echo '</tr>';

foreach ($order_details as $order_detail) {
	echo '<tr>';
echo'<td>'.$order_detail->orders_id.'</td>';
echo '<td>'.$order_detail->products_id.'</td>';
echo '<td>'.$order_detail->quantity_order.'</td>';

echo '<td>'.$order_detail->price_each.'</td>';
echo '<td>';
echo Html::a('<i class="glyphicon glyphicon-pencil"></i>',['order-detail/update','id'=>$order_detail->orders_id]);

echo Html::a('<i class="glyphicon glyphicon-trash"></i>',['order-detail/delete','id'=>$order_detail->orders_id],['onclick'=>'return(confirm(apakah adata mau dihapus ?) ? true :false );','style'=>' margin-left:10px;']);
echo '</tr>';	
}

echo'</table>';

 ?>