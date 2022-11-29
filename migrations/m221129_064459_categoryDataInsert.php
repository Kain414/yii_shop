<?php

use yii\db\Schema;
use yii\db\Migration;

class m221129_064459_categoryDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%category}}',
                           ["id", "parent_id", "name", "keywords", "description"],
                            [
    [
        'id' => 1,
        'parent_id' => 0,
        'name' => 'Sportwear',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 2,
        'parent_id' => 0,
        'name' => 'Mens',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 3,
        'parent_id' => 0,
        'name' => 'Womens',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 4,
        'parent_id' => 1,
        'name' => 'Nike',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 5,
        'parent_id' => 1,
        'name' => 'Under armour',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 6,
        'parent_id' => 1,
        'name' => 'Adidas',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 7,
        'parent_id' => 1,
        'name' => 'Puma',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 8,
        'parent_id' => 1,
        'name' => 'Asics',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 9,
        'parent_id' => 2,
        'name' => 'Fendi',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 10,
        'parent_id' => 2,
        'name' => 'Guess',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 11,
        'parent_id' => 2,
        'name' => 'Valentino',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 12,
        'parent_id' => 2,
        'name' => 'Dior',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 13,
        'parent_id' => 2,
        'name' => 'Versace',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 14,
        'parent_id' => 2,
        'name' => 'Armani',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 15,
        'parent_id' => 2,
        'name' => 'Prada',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 16,
        'parent_id' => 2,
        'name' => 'Dolce and Gabbana',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 17,
        'parent_id' => 2,
        'name' => 'Chanel',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 18,
        'parent_id' => 2,
        'name' => 'Gucci',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 19,
        'parent_id' => 3,
        'name' => 'Fendi',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 20,
        'parent_id' => 3,
        'name' => 'Guess',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 21,
        'parent_id' => 3,
        'name' => 'Valentino',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 22,
        'parent_id' => 3,
        'name' => 'Dior',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 23,
        'parent_id' => 3,
        'name' => 'Versace',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 24,
        'parent_id' => 0,
        'name' => 'Kids',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 25,
        'parent_id' => 0,
        'name' => 'Fashion',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 26,
        'parent_id' => 0,
        'name' => 'Households',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 27,
        'parent_id' => 0,
        'name' => 'Interiors',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 28,
        'parent_id' => 0,
        'name' => 'Clothing',
        'keywords' => null,
        'description' => null,
    ],
    [
        'id' => 29,
        'parent_id' => 0,
        'name' => 'Bags',
        'keywords' => 'Сумки ключевики',
        'description' => 'Сумки описание',
    ],
    [
        'id' => 30,
        'parent_id' => 0,
        'name' => 'Shoes',
        'keywords' => null,
        'description' => null,
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%category}} CASCADE');
    }
}
