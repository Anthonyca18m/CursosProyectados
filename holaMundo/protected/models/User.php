<?php 

class User extends CActiveRecord
{
    public static function model($model = __CLASS__)
    {
        return parent::model(__CLASS__);
    }

    public function tableName()
    {
        return 'tbl_users';
    }
}