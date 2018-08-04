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
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('areas', [
            'id' => $this->primaryKey(),
            'name_en'=>$this->string(),
            'name_ar'=>$this->string(),
            'id_country'=>$this->integer(11),
            'create_at'=>$this->date(),
            'update_at'=>$this->date(),

        ], $tableOptions);
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
