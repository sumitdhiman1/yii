<?php

namespace backend\models;

use yii\base\Model;
use common\models\record;


/**
 * ContactForm is the model behind the contact form.
 */
class SignupForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $gender;
    public $Hobbies;
     public $country;
    public $Address;
     public $uploadFile;

  


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email','password','gender','Hobbies','country','Address','uploadFile'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
          
        ];
    }
     public function create()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }

    
}

