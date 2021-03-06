<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "areas".
 *
 * @property int $id
 * @property string $name_en
 * @property string $name_ar
 * @property int $id_country
 * @property string $create_at
 * @property string $update_at
 *
 * @property Countries $country
 */
class Areas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'areas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_country'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['name_en', 'name_ar'], 'string', 'max' => 255],
            [['id_country'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['id_country' => 'id']],
            [['name_en', 'name_ar', 'id_country'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_en' => Yii::t('app', 'Name_En'),
            'name_ar' => Yii::t('app', 'Name_Ar'),
            'id_country' => Yii::t('app', 'Country'),
            'create_at' => Yii::t('app', 'Create_At'),
            'update_at' => Yii::t('app', 'Update_At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'id_country']);
    }

    /**
     * @inheritdoc
     * @return AreasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AreasQuery(get_called_class());
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Posts::className(), ['area_id' => 'id']);
    }
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->create_at = date('Y-m-d h:m:s');
            } else {
                $this->update_at = date('Y-m-d h:m:s');
            }

            return true;
        } else {
            return false;
        }
    }
}
