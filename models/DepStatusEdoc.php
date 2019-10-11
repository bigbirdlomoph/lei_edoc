<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dep_status_edoc".
 *
 * @property int $id
 * @property string $dep_id รหัสสถานะ
 * @property string $dep_status สถานะกลุ่มงานรับหนังสือ
 */
class DepStatusEdoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dep_status_edoc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dep_id'], 'string', 'max' => 3],
            [['dep_status'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dep_id' => 'รหัสสถานะ',
            'dep_status' => 'สถานะกลุ่มงานรับหนังสือ',
        ];
    }
}
