<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%master}}".
 *
 * @property string $name
 * @property string $designation
 * @property string $address
 * @property int $phone
 */
class Master extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%master}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'designation', 'address', 'phone'], 'required'],
            //[['phone'], 'integer'],
            [['name', 'designation'], 'string', 'max' => 20, 'message' =>'Enter only valid Characters!', 'tooLong' => 'Must not exceeds 20 character'],            
            [['name', 'designation'], 'match', 'pattern' => '/^[a-zA-Z0-9\s]+$/i', 'message' =>'No Special Character allowed!'],
            [['address'], 'string', 'max' => 50, 'message' =>'Enter only valid Characters!', 'tooLong' => 'Must not exceeds 50 character'],
            [['address'], 'match', 'pattern' => '/^[a-zA-Z0-9\s]+$/i', 'message' =>'No Special Character allowed!'],
            [['phone'], 'string', 'max' => 10, 'message' =>'Enter valid Number!', 'tooLong' => 'Must not exceeds 10 character'],
            [['phone'], 'match', 'pattern' => '/^[0-9]+$/i', 'message' =>'Enter valid Number!'],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'designation' => 'Designation',
            'address' => 'Address',
            'phone' => 'Phone',
        ];
    }
}
