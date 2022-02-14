<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Aula".
 *
 * @property int $id
 * @property string $Modalidade
 * @property string $Professor
 * @property string $Nome
 * @property int $Valor
 * @property string $DataHora
 */
class Aula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Aula';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Modalidade', 'Professor', 'Nome', 'Valor', 'DataHora'], 'required'],
            [['Valor'], 'integer'],
            [['DataHora'], 'safe'],
            [['Modalidade', 'Nome'], 'string', 'max' => 30],
            [['Professor'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Modalidade' => 'Modalidade',
            'Professor' => 'Professor',
            'Nome' => 'Nome',
            'Valor' => 'Valor',
            'DataHora' => 'Data Hora',
        ];
    }
}
