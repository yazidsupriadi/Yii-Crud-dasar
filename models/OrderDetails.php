<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_details".
 *
 * @property int $orders_id
 * @property int $products_id
 * @property int $quantity_order
 * @property double $price_each
 */
class OrderDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orders_id','products_id','quantity_order','price_each'],'required'],
            
            [['orders_id', 'products_id', 'quantity_order'], 'integer'],
            [['price_each'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orders_id' => 'Orders ID',
            'products_id' => 'Products ID',
            'quantity_order' => 'Quantity Order',
            'price_each' => 'Price Each',
        ];
    }
}
