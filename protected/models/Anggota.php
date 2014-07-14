<?php

/**
 * This is the model class for table "anggota".
 *
 * The followings are the available columns in table 'anggota':
 * @property integer $kode_anggota
 * @property string $nama_anggota
 * @property string $alamat_anggota
 * @property string $ttl_anggota
 * @property integer $no_telp
 * @property string $identitas_anggota
 * @property string $status_anggota
 * @property string $email_anggota
 */
class Anggota extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Anggota the static model class
	 */
	

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anggota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_anggota, nama_anggota, alamat_anggota, ttl_anggota, no_telp, identitas_anggota', 'required'),
			array('kode_anggota, no_telp', 'numerical', 'integerOnly'=>true),
			array('nama_anggota', 'length', 'max'=>50),
			array('alamat_anggota', 'length', 'max'=>100),
			array('identitas_anggota', 'length', 'max'=>20),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_anggota, nama_anggota, alamat_anggota, ttl_anggota, no_telp, identitas_anggota', 'safe', 'on'=>'search'),
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
		'namaanggota'=>array(self::BELONGS_TO,'Anggota','kode_anggota'),
		'kartu'=>array(self::BELONGS_TO,'KartuMember','kode_anggota'),
		
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_anggota' => 'Kode Anggota',
			'nama_anggota' => 'Nama Anggota',
			'alamat_anggota' => 'Alamat Anggota',
			'ttl_anggota' => 'Ttl Anggota',
			'no_telp' => 'No Telp',
			'identitas_anggota' => 'Identitas Anggota',
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
		$criteria->compare('nama_anggota',$this->nama_anggota,true);
		$criteria->compare('alamat_anggota',$this->alamat_anggota,true);
		$criteria->compare('ttl_anggota',$this->ttl_anggota,true);
		$criteria->compare('no_telp',$this->no_telp);
		$criteria->compare('identitas_anggota',$this->identitas_anggota,true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
		public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}