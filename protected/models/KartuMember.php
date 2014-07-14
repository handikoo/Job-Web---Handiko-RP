<?php

/**
 * This is the model class for table "kartu_member".
 *
 * The followings are the available columns in table 'kartu_member':
 * @property integer $kode_anggota
 * @property string $tgl_aktivasi_anggota
 * @property string $tgl_exp_anggota
 * @property string $perpanjangan_exp
 * @property string $biaya_perpanjangan
 */
class KartuMember extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return KartuMember the static model class
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
		return 'kartu_member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_anggota, tgl_aktivasi_anggota, tgl_exp_anggota, perpanjangan_exp, biaya_perpanjangan', 'required'),
			array('kode_anggota', 'numerical', 'integerOnly'=>true),
			array('perpanjangan_exp, biaya_perpanjangan', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_anggota, tgl_aktivasi_anggota, tgl_exp_anggota, perpanjangan_exp, biaya_perpanjangan', 'safe', 'on'=>'search'),
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
			'kode_anggota' => 'Kode Anggota',
			'tgl_aktivasi_anggota' => 'Tgl Aktivasi Anggota',
			'tgl_exp_anggota' => 'Tgl Exp Anggota',
			'perpanjangan_exp' => 'Perpanjangan Exp',
			'biaya_perpanjangan' => 'Biaya Perpanjangan',
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

		$criteria->compare('kode_anggota',$this->kode_anggota);
		$criteria->compare('tgl_aktivasi_anggota',$this->tgl_aktivasi_anggota,true);
		$criteria->compare('tgl_exp_anggota',$this->tgl_exp_anggota,true);
		$criteria->compare('perpanjangan_exp',$this->perpanjangan_exp,true);
		$criteria->compare('biaya_perpanjangan',$this->biaya_perpanjangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}