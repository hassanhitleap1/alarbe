<?php

use yii\db\Migration;

/**
 * Handles the creation of table `posts`.
 */
class m180716_211355_create_posts_table extends Migration
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
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->string(),
            'sub_category_id'=>$this->integer(),
            'area_id' => $this->integer(),
            'for_what'=>$this->smallInteger(),
            'create_at' => $this->date(),
            'update_at' => $this->date(),

        ],$tableOptions);
        $this->addForeignKey(
            'fk-areas-sub_category_id',
            'posts',
            'sub_category_id',
            'sub_categories',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-areas-area_id',
            'posts',
            'area_id',
            'areas',
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
            'fk-areas-sub_category_id',
            'posts'
        );
        $this->dropForeignKey(
            'fk-areas-area_id',
            'posts'
        );
        $this->dropTable('posts');
    }
}
