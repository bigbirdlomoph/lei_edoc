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
            //[['serial_doc'], 'unique'], //ตรวจสอบค่าซ้ำ
            [['date_doc', 'created_at', 'updated_at'], 'safe'],
            [['serial_doc', 'document_name', 'from_gov', 'to_gov', 'note'], 'string', 'max' => 200],
            [['status', 'dep_status'], 'string', 'max' => 2],
        ];
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
            'note' => Yii::t('app', 'การปฏิบัติ'),
            'status' => Yii::t('app', 'สถานะรับหนังสือ(ธุรการ)'),
            'dep_status' => Yii::t('app', 'สถานะนำส่งกลุ่มงาน'),
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

    public function DateThai($strDate)
    {
        $strYear = date('Y', strtotime($strDate)) + 543;
        $strMonth = date('n', strtotime($strDate));
        $strDay = date('j', strtotime($strDate));
        $strHour = date('H', strtotime($strDate));
        $strMinute = date('i', strtotime($strDate));
        $strSeconds = date('s', strtotime($strDate));
        $strMonthCut = array('', 'ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.');
        $strMonthThai = $strMonthCut[$strMonth];

        return "$strDay $strMonthThai $strYear";
    }

}
