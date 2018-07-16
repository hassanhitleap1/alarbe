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
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'title'=>$this->string(100),
            'content'=>$this->text(),
            'create_at'=>$this->date(),
            'update_at'=>$this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pages');
    }
}
