<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Edoc;

/**
 * EdocSearch represents the model behind the search form of `app\models\Edoc`.
 */
class EdocSearch extends Edoc
{
    /**
     * {@inheritdoc}
     */
    
    public $q;

    public function rules()
    {
        return [
            [
                [
                    'id', 'created_at', 'updated_at'
                    ], 'integer'],
            [
                [
                    'q', 'serial_doc', 'date_doc', 
                    'document_name', 'from_gov', 'to_gov', 
                    'note', 'status', 'dep_status', 'created_at', 'updated_at'
                    ], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Edoc::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date_doc' => $this->date_doc,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        // $query->andFilterWhere(['like', 'serial_doc', $this->serial_doc])
        //     ->andFilterWhere(['like', 'document_name', $this->document_name])
        //     ->andFilterWhere(['like', 'from_gov', $this->from_gov])
        //     ->andFilterWhere(['like', 'to_gov', $this->to_gov])
        //     ->andFilterWhere(['like', 'note', $this->note])
        //     ->andFilterWhere(['like', 'status', $this->status])
        //     ->andFilterWhere(['like', 'dep_status', $this->dep_status]);
        
        $query->orFilterWhere(['like', 'document_name', $this->q])
              ->orFilterWhere(['like', 'serial_doc', $this->q]);

        return $dataProvider;
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
