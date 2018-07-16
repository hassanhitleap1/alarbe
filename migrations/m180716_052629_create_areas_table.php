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
            'id_country'=>$this->integer(11),
            'create_at'=>$this->date(),
            'update_at'=>$this->date(),
            
        ]);
        $this->addForeignKey(
            'fk-areas-id_country',
            'areas',
            'id_country',
            'countries',
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
            'fk-areas-id_country',
            'areas'
        );
        $this->dropTable('areas');
       
    }
}
