<?php

use yii\db\Schema;
use yii\db\Migration;

class m221129_063550_category extends Migration
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
            '{{%category}}',
            [
                'id'=> $this->primaryKey()->unsigned(),
                'parent_id'=> $this->integer()->unsigned()->notNull()->defaultValue(0),
                'name'=> $this->string(255)->notNull(),
                'keywords'=> $this->string(255)->null()->defaultValue(null),
                'description'=> $this->string(255)->null()->defaultValue(null),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
