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
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('images_post', [
            'id' => $this->primaryKey(),
            'image_path'=>$this->string(300),
            'prime'=>$this->smallInteger()->defaultValue(0),// prime 1 not prime 0
            'post_id'=>$this->integer(),
        ],$tableOptions);
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
