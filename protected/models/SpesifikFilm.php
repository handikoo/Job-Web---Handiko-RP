<?php

/**
 * This is the model class for table "spesifik_film".
 *
 * The followings are the available columns in table 'spesifik_film':
 * @property string $kode_film
 * @property string $genre_film
 * @property string $aktor_film
 * @property string $rating_film
 * @property integer $tahun_rilis_film
 * @property string $production_house
 */
class SpesifikFilm extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return SpesifikFilm the static model class
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
		return 'spesifik_film';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_film, genre_film, aktor_film, rating_film, tahun_rilis_film, production_house', 'required'),
			array('tahun_rilis_film', 'numerical', 'integerOnly'=>true),
			array('kode_film', 'length', 'max'=>5),
			array('genre_film, rating_film', 'length', 'max'=>10),
			array('aktor_film', 'length', 'max'=>100),
			array('production_house', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_film, genre_film, aktor_film, rating_film, tahun_rilis_film, production_house', 'safe', 'on'=>'search'),
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
			'kode_film' => 'Kode Film',
			'genre_film' => 'Genre Film',
			'aktor_film' => 'Aktor Film',
			'rating_film' => 'Rating Film',
			'tahun_rilis_film' => 'Tahun Rilis Film',
			'production_house' => 'Production House',
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
		$criteria->compare('genre_film',$this->genre_film,true);
		$criteria->compare('aktor_film',$this->aktor_film,true);
		$criteria->compare('rating_film',$this->rating_film,true);
		$criteria->compare('tahun_rilis_film',$this->tahun_rilis_film);
		$criteria->compare('production_house',$this->production_house,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}