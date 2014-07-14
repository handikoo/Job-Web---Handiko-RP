<?php

/**
 * This is the model class for table "film".
 *
 * The followings are the available columns in table 'film':
 * @property string $kode_film
 * @property string $judul_film
 * @property string $harga_film
 * @property string $durasi_sewa
 * @property string $denda_telat
 * @property integer $stock_film
 * @property string $status_film
 */
class Film extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Film the static model class
	 */
	

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'film';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_film, genre_film', 'required'),
			array('kode_film, genre_film', 'length','max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_film, genre_film', 'safe', 'on'=>'search'),
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
		'genre'=>array(self::BELONGS_TO,'SpesifikFilm','genre_film'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_film' => 'Kode Film',
			'judul_film' => 'Judul Film',
			'harga_film' => 'Harga Film',
			'durasi_sewa' => 'Durasi Sewa',
			'denda_telat' => 'Denda Telat',
			'stock_film' => 'Stock Film',
			'status_film' => 'Status Film',
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

		$criteria->compare('kode_film',$this->kode_film,true);
		$criteria->compare('judul_film',$this->judul_film,true);
		$criteria->compare('harga_film',$this->harga_film,true);
		$criteria->compare('durasi_sewa',$this->durasi_sewa,true);
		$criteria->compare('denda_telat',$this->denda_telat,true);
		$criteria->compare('stock_film',$this->stock_film);
		$criteria->compare('status_film',$this->status_film,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}