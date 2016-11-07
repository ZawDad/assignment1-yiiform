<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Registration extends Model
{
    public $fullname;
    public $gender;
    public $date_of_birth;
    public $years_of_experience;
    public $industry;
    public $location;
    public $about_me;
    public $profile_picture;
    public $professional_title;
    public $career_level;
    public $communication_level;
    public $organizational_level;
    public $job_related_level;
    public $address;
    public $phone_number;
    public $website;
    public $email;

    public function rules()
    {
        return [
            [['fullname', 'date_of_birth', 'address', 'email'], 'required'],
            ['email', 'email'],
            [['date_of_birth'], 'default', 'value' => null],
            [['gender'], 'default', 'value' => null],
            [['years_of_experience'], 'default', 'value' => null],
            [['industry'], 'default', 'value' => null],
            [['location'], 'default', 'value' => null],
            [['about_me'], 'default', 'value' => null],
            [['professional_title'], 'default', 'value' => null],
            [['career_level'], 'default', 'value' => null],
            [['communication_level'], 'default', 'value' => null],
            [['organizational_level'], 'default', 'value' => null],
            [['job_related_level'], 'default', 'value' => null],
            [['phone_number'], 'default', 'value' => null],
            [['website'], 'default', 'value' => null],
        ];
    }

}