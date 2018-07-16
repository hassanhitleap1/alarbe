<?php

use yii\db\Migration;

/**
 * Handles the creation of table `countries`.
 */
class m180716_052607_create_countries_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('countries', [
            'id' => $this->primaryKey(),
            'name_en'=>$this->string(),
            'name_ar'=>$this->string(),
            'create_at'=>$this->date(),
            'update_at'=>$this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('countries');
    }
}
