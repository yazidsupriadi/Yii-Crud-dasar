<?php
/* @var $this yii\web\View */
?>

<h1 class="text center">Daftar Customer</h1>


<?php

use yii\helpers\Html;

echo Html::a('Create', ['create'], ['class' => 'btn btn-primary']);

echo '<table class= "table table-bordered table-striped table-info">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Nama Product</th>';
echo '<th>Deskripsi</th>';
echo '<th>Stock Barang</th>';
echo '<th>Harga Barang</th>';
echo '<th>Action</th>';
echo '</tr>';

foreach ($products as $product) {
	echo '<tr>';
	echo '<td>' . $product->id . '</td>';
	echo '<td>' . $product->name . '</td>';
	echo '<td>' . $product->description . '</td>';
	echo '<td>' . $product->stock . '</td>';
	echo '<td>' . $product->price . '</td>';
	echo '<td>';
	echo Html::a('<i class="glyphicon glyphicon-pencil"></i>', ['product/update', 'id' => $product->id]);

	echo Html::a('<i class="glyphicon glyphicon-trash"></i>', ['product/delete', 'id' => $product->id], ['onclick' => 'return(confirm(apakah adata mau dihapus ?) ? true :false );', 'style' => ' margin-left:10px;']);
	echo '</tr>';
}

echo '</table>';
