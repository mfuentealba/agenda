<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_oferente}}".
 *
 * @property int $id
 * @property string $rut
 * @property string $nombres
 * @property string $ap_paterno
 * @property string $ap_materno
 * @property string $mail
 * @property string $user
 * @property string $pass
 * @property string $fecha_ingreso
 *
 * @property TblHorarioSetup[] $tblHorarioSetups
 */
class TblOferente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $repeat_password;

    public static function tableName()
    {
        return '{{%tbl_oferente}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rut', 'nombres', 'ap_paterno', 'ap_materno', 'mail', 'user', 'pass', 'fecha_ingreso', 'repeat_password'], 'required'],
            [['fecha_ingreso'], 'safe'],
            [['rut'], 'string', 'max' => 10],
            [['nombres'], 'string', 'max' => 70],
            [['ap_paterno', 'ap_materno'], 'string', 'max' => 30],
            [['mail'], 'string', 'max' => 50],
            [['user'], 'string', 'max' => 20],
            [['pass'], 'string', 'max' => 100],
            [['repeat_password'], 'string', 'max' => 100],
            [['mail'], 'unique'],
            [['user'], 'unique'],            
            array('pass', 'compare', 'compareAttribute'=>'repeat_password'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rut' => 'Rut',
            'nombres' => 'Nombres',
            'ap_paterno' => 'Ap Paterno',
            'ap_materno' => 'Ap Materno',
            'mail' => 'Mail',
            'user' => 'User',
            'pass' => 'Pass',
            //'passRep' => 'Pass Rep',
            'fecha_ingreso' => 'Fecha Ingreso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblHorarioSetups()
    {
        return $this->hasMany(TblHorarioSetup::className(), ['id_oferente' => 'id']);
    }
}
