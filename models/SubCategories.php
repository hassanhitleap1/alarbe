<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_categories".
 *
 * @property int $id
 * @property string $name_en
 * @property string $name_ar
 * @property string $create_at
 * @property string $update_at
 * @property int $category_id
 *
 * @property Categories $category
 */
class SubCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_at', 'update_at'], 'safe'],
            [['category_id'], 'integer'],
            [['name_en', 'name_ar'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_ar' => Yii::t('app', 'Name Ar'),
            'create_at' => Yii::t('app', 'Create At'),
            'update_at' => Yii::t('app', 'Update At'),
            'category_id' => Yii::t('app', 'Category'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     * @return SubCategoriesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SubCategoriesQuery(get_called_class());
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
