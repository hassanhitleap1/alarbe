<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sub_categories`.
 */
class m180716_171013_create_sub_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sub_categories', [
            'id' => $this->primaryKey(),
            'name_en'=>$this->string(),
            'name_ar'=>$this->string(),
            'create_at'=>$this->date(),
            'update_at'=>$this->date(),
            'category_id'=>$this->integer(),
        ]);
        $this->addForeignKey(
            'fk-sub_categories-category_id',
            'sub_categories',
            'category_id',
            'categories',
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
            'fk-sub_categories-category_id',
            'sub_categories'
        );
        $this->dropTable('sub_categories');
    }
}
