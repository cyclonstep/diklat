<?php

/**
 * This is the model class for table "peserta".
 *
 * The followings are the available columns in table 'peserta':
 * @property integer $id_peserta
 * @property string $nama
 * @property string $nip
 * @property string $pangkat
 * @property string $tgl_lahir
 * @property string $instansi
 * @property string $institusi
 * @property string $agama
 */
class Peserta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'peserta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, nip, pangkat, tgl_lahir, instansi, institusi, agama', 'required'),
			array('nama', 'length', 'max'=>75),
			array('nip', 'length', 'max'=>30),
			array('pangkat, instansi, institusi, agama', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_peserta, nama, nip, pangkat, tgl_lahir, instansi, institusi, agama', 'safe', 'on'=>'search'),
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
			'id_peserta' => 'Id Peserta',
			'nama' => 'Nama',
			'nip' => 'Nip',
			'pangkat' => 'Pangkat',
			'tgl_lahir' => 'Tgl Lahir',
			'instansi' => 'Instansi',
			'institusi' => 'Institusi',
			'agama' => 'Agama',
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

		$criteria->compare('id_peserta',$this->id_peserta);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('pangkat',$this->pangkat,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('instansi',$this->instansi,true);
		$criteria->compare('institusi',$this->institusi,true);
		$criteria->compare('agama',$this->agama,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Peserta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
