<?php

/**
 * This is the model class for table "data_sewa".
 *
 * The followings are the available columns in table 'data_sewa':
 * @property integer $id_utama
 * @property string $kode_sewa
 * @property integer $kode_anggota
 * @property string $kode_film
 */
class DataSewa extends CActiveRecord
{
	

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_sewa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_sewa, kode_anggota, kode_film', 'required'),
			array('kode_sewa, kode_anggota, kode_film', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_utama, kode_sewa, kode_anggota, kode_film', 'safe', 'on'=>'search'),
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
			'penyewaan'=>array(self::BELONGS_TO,'Penyewaan','kode_sewa'),
			'anggota'=>array(self::BELONGS_TO,'Anggota','kode_anggota'),
			'film'=>array(self::BELONGS_TO,'Film','kode_film'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_utama' => 'Id Utama',
			'kode_sewa' => 'Kode Sewa',
			'kode_anggota' => 'Kode Anggota',
			'kode_film' => 'Kode Film',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_utama',$this->id_utama);
		$criteria->compare('kode_sewa',$this->kode_sewa,true);
		$criteria->compare('kode_anggota',$this->kode_anggota);
		$criteria->compare('kode_film',$this->kode_film,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
		public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}