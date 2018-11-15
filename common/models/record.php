<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;


class User extends ActiveRecord implements IdentityInterface
{
    

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%record}}';
    }

   }