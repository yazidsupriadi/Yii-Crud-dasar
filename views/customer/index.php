
<h1 class="text center">Daftar Customer</h1>


<?php 
use yii\helpers\Html;

echo Html::a('Create',['create'],['class'=>'btn btn-primary']);

echo '<table class= "table table-bordered table-striped table-info">';
echo '<tr>';
echo'<th>ID</th>';
echo '<th>Firstname</th>';
echo '<th>Lastname</th>';
echo '<th>Phone</th>';
echo '<th>address</th>';
echo '<th>Action</th>';
echo '</tr>';

foreach ($customers as $customer) {
	echo '<tr>';
echo'<td>'.$customer->id.'</td>';
echo '<td>'.$customer->firstname.'</td>';
echo '<td>'.$customer->lastname.'</td>';
echo '<td>'.$customer->phone.'</td>';
echo '<td>'.$customer->address.'</td>';
echo '<td>';
echo Html::a('<i class="glyphicon glyphicon-pencil"></i>',['customer/update','id'=>$customer->id]);

echo Html::a('<i class="glyphicon glyphicon-trash"></i>',['customer/delete','id'=>$customer->id],['onclick'=>'return(confirm(apakah adata mau dihapus ?) ? true :false );','style'=>' margin-left:10px;']);
echo '</tr>';	
}

echo'</table>';
