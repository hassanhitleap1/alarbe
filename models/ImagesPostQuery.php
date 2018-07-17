<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ImagesPost]].
 *
 * @see ImagesPost
 */
class ImagesPostQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ImagesPost[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ImagesPost|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
