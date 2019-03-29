<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $phone
 * @property string $address
 */
class Customers extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address','firstname','lastname','phone'],'required'],
            [['address'], 'string'],
            [['firstname', 'lastname'], 'string', 'max' => 45],
            [['phone'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'phone' => 'Phone',
            'address' => 'Address',
        ];
    }
}
