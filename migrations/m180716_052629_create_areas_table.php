<?php

use yii\db\Migration;

/**
 * Handles the creation of table `areas`.
 */
class m180716_052629_create_areas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('areas', [
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
        $this->dropTable('areas');
    }
}
