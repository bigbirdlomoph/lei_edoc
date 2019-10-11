<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "main_department".
 *
 * @property string $department_id รหัสกลุ่มงาน
 * @property string $department_name กลุ่มงาน
 */
class MainDepartment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main_department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_id'], 'required'],
            [['department_id'], 'string', 'max' => 2],
            [['department_name'], 'string', 'max' => 150],
            [['department_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'department_id' => 'รหัสกลุ่มงาน',
            'department_name' => 'กลุ่มงาน',
        ];
    }
}
