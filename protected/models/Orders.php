<?php

/**
 * This is the model class for table "orders".
 *
 * The followings are the available columns in table 'orders':
 * @property integer $orderid
 * @property integer $tablenum
 * @property string $code
 * @property integer $orderqty
 * @property double $orderprice
 * @property double $totalprice
 * @property string $orderdate
 * @property integer $accid
 * @property string $orderstatus
 * @property integer $clientid
 * @property string $type
 *
 * The followings are the available model relations:
 * @property Clients $client
 * @property Tables $tablenum0
 */
class Orders extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tablenum, code, orderqty, orderprice, totalprice, accid, orderstatus, clientid, type', 'required'),
			array('orderid, tablenum, orderqty, accid, clientid', 'numerical', 'integerOnly'=>true),
			array('orderprice, totalprice', 'numerical'),
			array('code', 'length', 'max'=>100),
			array('orderstatus, type', 'length', 'max'=>50),
			array('orderdate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('orderid, tablenum, code, orderqty, orderprice, totalprice, orderdate, accid, orderstatus, clientid, type', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'client' => array(self::BELONGS_TO, 'Clients', 'clientid'),
			'tablenum0' => array(self::BELONGS_TO, 'Tables', 'tablenum'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'orderid' => 'Orderid',
			'tablenum' => 'Tablenum',
			'code' => 'Code',
			'orderqty' => 'Orderqty',
			'orderprice' => 'Orderprice',
			'totalprice' => 'Totalprice',
			'orderdate' => 'Orderdate',
			'accid' => 'Accid',
			'orderstatus' => 'Orderstatus',
			'clientid' => 'Clientid',
			'type' => 'Type',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('orderid',$this->orderid);
		$criteria->compare('tablenum',$this->tablenum);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('orderqty',$this->orderqty);
		$criteria->compare('orderprice',$this->orderprice);
		$criteria->compare('totalprice',$this->totalprice);
		$criteria->compare('orderdate',$this->orderdate,true);
		$criteria->compare('accid',$this->accid);
		$criteria->compare('orderstatus',$this->orderstatus,true);
		$criteria->compare('clientid',$this->clientid);
		$criteria->compare('type',$this->type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Orders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
