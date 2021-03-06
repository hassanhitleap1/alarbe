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
    const RENT = 1;
    const SELL= 2;
    
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
           [['files'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 10],
           // [['files'], 'file'],
           // ['files', 'image', 'minWidth' => 250, 'maxWidth' => 250, 'minHeight' => 250, 'maxHeight' => 250, 'extensions' => 'jpg, gif, png', 'maxSize' => 1024 * 1024 * 2, 'maxFiles' => 10],
            [['sub_category_id', 'for_what', 'area_id'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['title', 'description'], 'string', 'max' => 255],
            [['sub_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubCategories::className(), 'targetAttribute' => ['sub_category_id' => 'id']],
           // [['files'], 'file',  'extensions' => 'png, jpg', 'maxFiles' => 10],
            [['title', 'description', 'sub_category_id', 'for_what', 'area_id'], 'required'],
          
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
            'sub_category_id' => Yii::t('app', 'Sub_Category'),
            'area_id'=> Yii::t('app', 'Area'),
            'for_what' => Yii::t('app', 'For_What'),
            'create_at' => Yii::t('app', 'Create_At'),
            'update_at' => Yii::t('app', 'Update_At'),
            'files'=> Yii::t('app', 'Image'),
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagesPosts()
    {
        return $this->hasMany(ImagesPost::className(), ['post_id' => 'id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagePosts()
    {
        return $this->hasMany(ImagesPost::className(), ['post_id' => 'id'])->where(['images_post.prime'=>1])->one();
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
