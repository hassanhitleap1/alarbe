<?php

use yii\db\Migration;

/**
 * Handles the creation of table `categories`.
 */
class m180716_052534_create_categories_table extends Migration
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
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'name_en'=>$this->string(),
            'name_ar'=>$this->string(),
            'create_at'=>$this->date(),
            'update_at'=>$this->date(),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('categories');
    }
}
