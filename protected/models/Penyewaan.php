<?php

/**
 * This is the model class for table "penyewaan".
 *
 * The followings are the available columns in table 'penyewaan':
 * @property string $kode_sewa
 * @property integer $kode_anggota
 * @property string $kode_film
 * @property string $tanggal_sewa
 * @property string $tanggal_kembali
 * @property string $total_harga
 * @property string $diskon
 */
class Penyewaan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Penyewaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'penyewaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_sewa, kode_anggota, kode_film, tanggal_sewa, tanggal_kembali, total_harga, diskon', 'required'),
			array('kode_anggota', 'numerical', 'integerOnly'=>true),
			array('kode_sewa, kode_film', 'length', 'max'=>5),
			array('total_harga, diskon', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_sewa, kode_anggota, kode_film, tanggal_sewa, tanggal_kembali, total_harga, diskon', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_sewa' => 'Kode Sewa',
			'kode_anggota' => 'Kode Anggota',
			'kode_film' => 'Kode Film',
			'tanggal_sewa' => 'Tanggal Sewa',
			'tanggal_kembali' => 'Tanggal Kembali',
			'total_harga' => 'Total Harga',
			'diskon' => 'Diskon',
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

		$criteria->compare('kode_sewa',$this->kode_sewa,true);
		$criteria->compare('kode_anggota',$this->kode_anggota);
		$criteria->compare('kode_film',$this->kode_film,true);
		$criteria->compare('tanggal_sewa',$this->tanggal_sewa,true);
		$criteria->compare('tanggal_kembali',$this->tanggal_kembali,true);
		$criteria->compare('total_harga',$this->total_harga,true);
		$criteria->compare('diskon',$this->diskon,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}