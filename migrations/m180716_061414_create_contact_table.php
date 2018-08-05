<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact`.
 */
class m180716_061414_create_contact_table extends Migration
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
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'email'=>$this->string(),
            'subject'=>$this->text(),
            'body'=>$this->text(),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contact');
    }
}
