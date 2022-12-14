<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\LinkPager;
use app\components\MenuWidget;
?>
	<section id="advertisement">
		<div class="container">
			<img src="/images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<ul class="catalog category-products">
							<?= MenuWidget::widget([
								'tpl' => 'menu',
							])?>
						</ul>
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b>$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
                <?php if (!empty($products)): ?>
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"><?= $category->name ?></h2>
                        <?php foreach ($products as $product): ?>
						    <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
                                            <?= Html::img('/images/products/' . $product->img, ['style' => 'width: 268px; height: 249px; object-fit: contain', 'alt' => $product->name]) ?>
											<h2><?= $product->price ?>$</h2>
											<p><a href="<?= Url::to(['product/view','id' => $product->id]) ?>"><?= $product->name ?></a></p>
											<a href="<?= Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
                                        <?php if ($product->new): ?>
									    <img src="/images/home/new.png" class="new" alt="Новинка" />
                                        <?php endif; ?>
                                        <?php if ($product->sale): ?>
									    <img src="/images/home/sale.png" class="new" alt="Распродажа" />
                                        <?php endif; ?>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						    </div>
                        <?php endforeach; ?>
                        <div class="clearfix"></div>
                        <?= LinkPager::widget([
                            'pagination' => $pages,
                        ]); ?>
					</div><!--features_items-->
                <?php else: ?>
                    <h2>Здесь товаров пока нет...</h2>
                <?php endif;?>
				</div>
			</div>
		</div>
	</section>