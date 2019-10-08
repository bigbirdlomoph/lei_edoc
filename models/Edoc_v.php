<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%e_doc}}".
 *
 * @property int $id
 * @property string $serial_doc เลขที่หนังสือ
 * @property string $date_doc วันที่ออกเลขหนังสือ
 * @property string $document_name ชื่อเรื่องหนังสือ
 * @property string $from_gov หน่วยงานที่ส่ง
 * @property string $to_gov ถึงหน่วยงาน
 * @property string $note หมายเหตุ
 * @property string $status สถานะหนังสือ
 */
class Edoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%e_doc}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial_doc'], 'required'],
            [['serial_doc'], 'unique'], //ตรวจสอบค่าซ้ำ
            [['serial_doc'], 'validateSerialDoc'],
            [['date_doc', 'created_at', 'updated_at'], 'safe'],
            [['serial_doc', 'document_name', 'from_gov', 'to_gov', 'note'], 'string', 'max' => 200],
            [['status', 'dep_status'], 'string', 'max' => 2],
        ];
    }

    public function validateSerialDoc()
    {
        $no_doc = $this->serial_doc;
        $model = Edoc::find()
            ->where('serial_doc > :serial_doc', [':serial_doc' => $no_doc])
            ->exists();
        
            if($model){ //ถ้ามีเรคคอร์ดให้ add error
            $this->addError('serial_doc', 'มีเลขหนังสือนี้อยู่ในระบบแล้ว');
        }
        
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'serial_doc' => Yii::t('app', 'เลขที่หนังสือ'),
            'date_doc' => Yii::t('app', 'ลงวันที่'),
            'document_name' => Yii::t('app', 'เรื่อง...'),
            'from_gov' => Yii::t('app', 'จาก'),
            'to_gov' => Yii::t('app', 'ถึง'),
            'note' => Yii::t('app', 'กลุ่มงานที่รับปฏิบัติ'),
            'status' => Yii::t('app', 'สถานะรับหนังสือ(ธุรการ)'),
            'dep_status' => Yii::t('app', 'สถานะการรับหนังสือของกลุ่มงาน'),
        ];
    }

    
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'value' => new Expression('NOW()'),
            ],
        ];
    }

}
