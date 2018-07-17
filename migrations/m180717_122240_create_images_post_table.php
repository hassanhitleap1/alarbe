<?php

use yii\db\Migration;

/**
 * Handles the creation of table `images_post`.
 */
class m180717_122240_create_images_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('images_post', [
            'id' => $this->primaryKey(),
            'image_path'=>$this->string(300),
            'prime'=>$this->smallInteger()->defaultValue(0),// prime 1 not prime 0
            'post_id'=>$this->integer(),
        ]);
        $this->addForeignKey(
            'fk-images_post-post_id',
            'images_post',
            'post_id',
            'posts',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-images_post-post_id',
            'images_post'
        );
        $this->dropTable('images_post');
    }
}
