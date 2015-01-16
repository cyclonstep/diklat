<?php

class LevelLookUp {
	const MEMBER = 3;
	const LECTURER = 1;
	const STAFF = 2
	const ADMIN = 0;
	// For CGridView, CListView Purposes
	
	public static function getLabel ($level){
		if($level == self::MEMBER)	
			return 'Member';
		if($level == self::ADMIN)
			return 'Administrator';
		if($level == self::LECTURER)
			return 'Pengajar';
		return false;
	}
}

	//for dropdown lists purpose
	public static function getLevelList(){
		return array(
			self::MEMBER=>'Member',
			self::ADMIN=>'Administrator',
			self::LECTURER=>'Pengajar'		
		);	
	}
?>