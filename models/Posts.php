<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $sub_category_id
 * @property int $for_what
 * @property string $create_at
 * @property string $update_at
 *
 * @property SubCategories $subCategory
 */
class Posts extends \yii\db\ActiveRecord
{
    public $files;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_category_id', 'for_what'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['title', 'description'], 'string', 'max' => 255],
            [['sub_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubCategories::className(), 'targetAttribute' => ['sub_category_id' => 'id']],
            [['files'], 'file',  'extensions' => 'png, jpg', 'maxFiles' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'sub_category_id' => Yii::t('app', 'Sub Category ID'),
            'for_what' => Yii::t('app', 'For What'),
            'create_at' => Yii::t('app', 'Create At'),
            'update_at' => Yii::t('app', 'Update At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubCategory()
    {
        return $this->hasOne(SubCategories::className(), ['id' => 'sub_category_id']);
    }

    /**
     * @inheritdoc
     * @return PostsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PostsQuery(get_called_class());
    }


    /*
    * upload images for post
    */
    public function upload()
    {
        if ($this->validate()) { 
            foreach ($this->files as $file) {
                $path='images/images-post/' . md5(uniqid(rand(), true)) . '.' . $file->extension;
                $file->saveAs($path);
               $paths[]= $path;
            }
            return $paths;
        } else {
            return false;
        }
    }
}
