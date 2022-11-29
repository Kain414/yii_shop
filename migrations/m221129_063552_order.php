<?php

use yii\db\Schema;
use yii\db\Migration;

class m221129_063552_order extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%order}}',
            [
                'id'=> $this->primaryKey()->unsigned(),
                'created_at'=> $this->integer()->unsigned()->notNull(),
                'updated_at'=> $this->integer()->unsigned()->notNull(),
                'qty'=> $this->integer()->unsigned()->notNull(),
                'sum'=> $this->float()->unsigned()->notNull(),
                'status'=> "enum('0', '1') NOT NULL DEFAULT '0'",
                'name'=> $this->string(255)->notNull(),
                'email'=> $this->string(255)->notNull(),
                'phone'=> $this->string(255)->notNull(),
                'address'=> $this->string(255)->notNull(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
