<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "images_post".
 *
 * @property int $id
 * @property string $image_path
 * @property int $prime
 * @property int $post_id
 *
 * @property Posts $post
 */
class ImagesPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prime', 'post_id'], 'integer'],
            [['image_path'], 'string', 'max' => 300],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Posts::className(), 'targetAttribute' => ['post_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image_path' => Yii::t('app', 'Image Path'),
            'prime' => Yii::t('app', 'Prime'),
            'post_id' => Yii::t('app', 'Post ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Posts::className(), ['id' => 'post_id']);
    }

    /**
     * @inheritdoc
     * @return ImagesPostQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ImagesPostQuery(get_called_class());
    }
}
