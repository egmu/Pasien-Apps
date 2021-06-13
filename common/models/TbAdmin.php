<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_admin".
 *
 * @property int $id_admin
 * @property string $username
 * @property string $password
 * @property string $nama_admin
 * @property string $hak_akses
 * @property string $last_login
 * @property int $status
 */
class TbAdmin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nama_admin', 'hak_akses', 'last_login', 'status'], 'required'],
            [['last_login'], 'safe'],
            [['status'], 'integer'],
            [['username'], 'string', 'max' => 25],
            [['password', 'nama_admin'], 'string', 'max' => 50],
            [['hak_akses'], 'string', 'max' => 20],
            [['nama_admin'], 'unique'],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_admin' => 'Id Admin',
            'username' => 'Username',
            'password' => 'Password',
            'nama_admin' => 'Nama Admin',
            'hak_akses' => 'Hak Akses',
            'last_login' => 'Last Login',
            'status' => 'Status',
        ];
    }
}
