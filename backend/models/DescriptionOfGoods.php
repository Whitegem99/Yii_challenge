<?php
// Use Gii extension https://www.yiiframework.com/doc/guide/2.0/en/start-gii
namespace app\models;

use Yii;

/**
 * This is the model class for table "description_of_goods".
 *
 * @property int $id
 * @property int|null $application_id
 * @property int|null $customer_id
 * @property int|null $user_id
 * @property string|null $description
 * @property string|null $ecl_group
 * @property string|null $ecl_item
 */
class DescriptionOfGoods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'description_of_goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['application_id', 'customer_id', 'user_id'], 'integer'],
            [['description', 'ecl_group', 'ecl_item'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'application_id' => 'Application ID',
            'customer_id' => 'Customer ID',
            'user_id' => 'User ID',
            'description' => 'Description',
            'ecl_group' => 'Ecl Group',
            'ecl_item' => 'Ecl Item',
        ];
    }
}
