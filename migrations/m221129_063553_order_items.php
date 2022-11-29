<?php

use yii\db\Schema;
use yii\db\Migration;

class m221129_063553_order_items extends Migration
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
            '{{%order_items}}',
            [
                'id'=> $this->primaryKey()->unsigned(),
                'order_id'=> $this->integer()->unsigned()->notNull(),
                'product_id'=> $this->integer()->unsigned()->notNull(),
                'name'=> $this->string(255)->notNull(),
                'price'=> $this->float()->notNull(),
                'qty_item'=> $this->integer()->notNull(),
                'sum_item'=> $this->float()->notNull(),
            ],$tableOptions
        );
        $this->createIndex('fk-order_items-order_id-shop_order-id','{{%order_items}}',['order_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('fk-order_items-order_id-shop_order-id', '{{%order_items}}');
        $this->dropTable('{{%order_items}}');
    }
}
