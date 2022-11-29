<?php

namespace app\controllers;
use Yii;
use app\models\Product;

class ProductController extends AppController {
    
    public function actionView($id) {

        $product = Product::findOne($id); // Ленивая загрузка
        if (empty($product))
            throw new \yii\web\HttpException(404, 'Такого товара нет.');

        // $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one(); //Жадная загрузка
        $hits = Product::find()->where(['hit' => '1'])->all();
        $this->setMeta('E-SHOPPER | ' . $product->name, $product->keywords, $product->description);

        return $this->render('view', compact('product', 'hits'));
    }

}