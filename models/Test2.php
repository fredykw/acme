<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test2".
 *
 * @property int $id
 * @property string $name
 * @property int $age
 */
class Test2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age'], 'required'],
            [['age'], 'integer'],
            [['name'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
        ];
    }
}
