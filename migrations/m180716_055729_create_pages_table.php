<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pages`.
 */
class m180716_055729_create_pages_table extends Migration
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
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'title'=>$this->string(100),
            'content'=>$this->text(),
            'create_at'=>$this->date(),
            'update_at'=>$this->date(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pages');
    }
}
