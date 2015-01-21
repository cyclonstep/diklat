<?php

/**
 * This is the model class for table "tbl_status_pelatihan".
 *
 * The followings are the available columns in table 'tbl_status_pelatihan':
 * @property integer $id
 * @property integer $pelatihan_id
 * @property string $nama
 * @property string $status_daftar
 * @property string $status_selesai
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 *
 * The followings are the available model relations:
 * @property Pelatihan $pelatihan
 */
class TblStatusPelatihan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_status_pelatihan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pelatihan_id, nama, status_daftar, status_selesai, tgl_mulai, tgl_selesai', 'required'),
			array('pelatihan_id', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>255),
			array('status_daftar, status_selesai', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pelatihan_id, nama, status_daftar, status_selesai, tgl_mulai, tgl_selesai', 'safe', 'on'=>'search'),
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
			'pelatihan' => array(self::BELONGS_TO, 'Pelatihan', 'pelatihan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pelatihan_id' => 'Tipe Pelatihan',
			'nama' => 'Judul Pelatihan',
			'status_daftar' => 'Status Daftar',
			'status_selesai' => 'Status Selesai',
			'tgl_mulai' => 'Tanggal Mulai',
			'tgl_selesai' => 'Tanggal Selesai',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('pelatihan_id',$this->pelatihan_id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('status_daftar',$this->status_daftar,true);
		$criteria->compare('status_selesai',$this->status_selesai,true);
		$criteria->compare('tgl_mulai',$this->tgl_mulai,true);
		$criteria->compare('tgl_selesai',$this->tgl_selesai,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblStatusPelatihan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getStatusDaftar()
	{
    return array('dibuka' => 'Dibuka', 'ditutup' => 'Ditutup');
	}	
	
	public function getStatusSelesai()	
	{
    return array('daftar'=>'Pendaftaran', 'berjalan' => 'Berjalan', 'selesai' => 'Selesai');
	}
}
