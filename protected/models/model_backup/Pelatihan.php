<?php

/**
 * This is the model class for table "pelatihan".
 *
 * The followings are the available columns in table 'pelatihan':
 * @property integer $id_pelatihan
 * @property string $nama
 * @property string $waktu
 * @property integer $tarif
 */
class Pelatihan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pelatihan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, waktu, tarif', 'required'),
			array('tarif', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>250),
			array('waktu', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pelatihan, nama, waktu, tarif', 'safe', 'on'=>'search'),
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
			'id_pelatihan' => 'Id Pelatihan',
			'nama' => 'Nama',
			'waktu' => 'Waktu',
			'tarif' => 'Tarif',
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

		$criteria->compare('id_pelatihan',$this->id_pelatihan);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('waktu',$this->waktu,true);
		$criteria->compare('tarif',$this->tarif);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pelatihan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
