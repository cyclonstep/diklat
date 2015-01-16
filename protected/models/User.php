<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property integer $id_cat
 * @property integer $id_instansi
 * @property integer $id_institusi
 * @property integer $id_agama
 * @property integer $id_pangkat
 * @property string $email
 * @property string $password
 * @property string $nama
 * @property string $nip
 * @property string $lahir
 * @property string $tempatlahir
 * @property integer $alamat
 * @property integer $telp
 *
 * The followings are the available model relations:
 * @property Category $idCat
 * @property Intansi $idInstansi
 * @property Institusi $idInstitusi
 * @property Agama $idAgama
 * @property Pangkat $idPangkat
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cat, id_instansi, id_institusi, id_agama, id_pangkat, email, password, nama, nip, lahir, tempatlahir, alamat, telp', 'required'),
			array('id_cat, id_instansi, id_institusi, id_agama, id_pangkat, alamat, telp', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>60),
			array('password', 'length', 'max'=>15),
			array('nama, tempatlahir', 'length', 'max'=>50),
			array('nip', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_cat, id_instansi, id_institusi, id_agama, id_pangkat, email, password, nama, nip, lahir, tempatlahir, alamat, telp', 'safe', 'on'=>'search'),
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
			'idCat' => array(self::BELONGS_TO, 'Category', 'id_cat'),
			'idInstansi' => array(self::BELONGS_TO, 'Intansi', 'id_instansi'),
			'idInstitusi' => array(self::BELONGS_TO, 'Institusi', 'id_institusi'),
			'idAgama' => array(self::BELONGS_TO, 'Agama', 'id_agama'),
			'idPangkat' => array(self::BELONGS_TO, 'Pangkat', 'id_pangkat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_cat' => 'Id Cat',
			'id_instansi' => 'Id Instansi',
			'id_institusi' => 'Id Institusi',
			'id_agama' => 'Id Agama',
			'id_pangkat' => 'Id Pangkat',
			'email' => 'Email',
			'password' => 'Password',
			'nama' => 'Nama',
			'nip' => 'Nip',
			'lahir' => 'Lahir',
			'tempatlahir' => 'Tempatlahir',
			'alamat' => 'Alamat',
			'telp' => 'Telp',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('id_cat',$this->id_cat);
		$criteria->compare('id_instansi',$this->id_instansi);
		$criteria->compare('id_institusi',$this->id_institusi);
		$criteria->compare('id_agama',$this->id_agama);
		$criteria->compare('id_pangkat',$this->id_pangkat);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('lahir',$this->lahir,true);
		$criteria->compare('tempatlahir',$this->tempatlahir,true);
		$criteria->compare('alamat',$this->alamat);
		$criteria->compare('telp',$this->telp);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
