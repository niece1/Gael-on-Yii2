<?php

namespace app\models;

//use app\models\User;
use yii\base\Model;

class SignupForm extends Model
{
    public $name;
    public $email;
    public $password;
    
    public function rules()
    {
        return [
            [['name','email','password'], 'required'],
            [['name','email'], 'trim'],
            [['name'], 'string', 'min' => 2, 'max' => 20],
            [['email'], 'email'],
            [['email'], 'unique', 'targetClass'=>'app\models\User', 'targetAttribute'=>'email']
        ];
    }
    
    public function signup()
    {
        if($this->validate())
        {
            $user = new User();
            $user->attributes = $this->attributes;
           
            if ($user->create()) {
                return $user;
            }
        }
        return false;
    }
}