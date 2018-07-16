<?php

use yii\db\Migration;

/**
 * Handles the creation of table `posts`.
 */
class m180716_184858_create_posts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'description'=>$this->text(),
            'for_what'=>$this->smallInteger(),//0 for sell 1  for rent
            'sub_category_id'=>$this->integer(),
            'create_at'=>$this->date(),
            'update_at'=>$this->date(),
        ]);
        $this->addForeignKey(
            'fk-posts-sub_category_id',
            'posts',
            'sub_category_id',
            'sub_categories',
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
            'fk-posts-sub_category_id',
            'posts'
        );
        $this->dropTable('posts');
    }
}
