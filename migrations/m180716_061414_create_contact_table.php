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
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'email'=>$this->string(),
            'subject'=>$this->string(),
            'body'=>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contact');
    }
}
