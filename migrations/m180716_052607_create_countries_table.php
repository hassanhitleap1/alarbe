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
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('countries', [
            'id' => $this->primaryKey(11),
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
        $this->dropTable('countries');
    }
}
