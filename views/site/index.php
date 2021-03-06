<?php

/* @var $this yii\web\View */

namespace frontend\assets;
use Yii;
use app\assets\GaelAsset;
use yii\helpers\Url;
use yii\helpers\Html;

GaelAsset::register($this);
$this->registerJsFile('@web/markup/js/counter.js', ['depends'=>[
    GaelAsset::className()
]]);
$this->title = 'Gael';

//for SEO needs
$this->registerMetaTag([
    'name'=>'description',
    'content'=>'Description of this page'
]);
?>
	<section class="main">
		
		<div class="left_hand">
			<ul id="login">
                            <?php if(Yii::$app->user->isGuest):?>
				<li><a href="<?= Url::to(['registration/login']);?>"><?php echo Yii::t('menu', 'login'); ?></a></li>
				<li><a href="<?= Url::to(['registration/signup']);?>"><?php echo Yii::t('menu', 'sign up'); ?></a></li>
                                <?php else: ?>
                                <?= Html::beginForm(['/registration/logout'], 'post')
                       .  '<li>'   . Html::submitButton(
                                Yii::t('menu', 'Logout ({username})', ['username' => Yii::$app->user->identity->name]),
                                ['class' => 'logout_button'])
                            . Html::endForm() . '</li>' ?>
                                 <?php endif;?>
			</ul>

			<ul id="choose_language">
                            <li>
                                <?=Html::beginForm(['/site/language']) ?>
                                 <?=Html::dropDownList('language', Yii::$app->language, ['en-US' => 'eng', 'ru-RU' => 'rus']) ?>
                                 <?= Html::submitButton('Go<span>Go</span>', ['class' => 'button_language_header button_language_header-swap_language_header']) ?>
                                 <?=Html::endForm() ?>
                            </li>
				
			</ul>

			<p id="vertical_line">Adventures live here</p>

			<h1>Lorem ipsum dolor sit gael.</h1>
			<p class="main_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ipsum, dolor consequuntur quisquam quibusdam delectus, vitae ratione molestias dolorem dolorum tenetur minima esse modi provident cum iste blanditiis porro, dolore repudiandae non nemo voluptate reprehenderit. Possimus asperiores itaque, repudiandae qui perspiciatis voluptate nostrum? Odit, nobis ut optio nulla aperiam blanditiis?</p>
			<a href="<?= Url::to(['site/about']);?>" class="button button-swap">Read more<span>Read more</span></a>

			<ul id="follow">
				<li>Folow me:</li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
				<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
			</ul>
		</div>

		<div class="right_hand">

			<div class="menu">
				<a href="<?= Url::to(['site/index']);?>">Gael</a>			
				
				<div id="trigger-overlay" class="hamburger_wrapper">
					<div class="hamburger_menu"></div>	  
				</div>	  
			</div>

			<div class="main_slider">
				<div class="slide_item">
					<figure>
						<img src="/markup/img/IMG_2809.jpg" alt="Granada">
						<figcaption>

						</figcaption>
					</figure>

				</div>
				<div class="slide_item">
					<figure>
						<img src="/markup/img/IMG_3993.jpg" alt="Granada">
						<figcaption>

						</figcaption>
					</figure>

				</div>
				<div class="slide_item">
					<figure>
						<img src="/markup/img/IMG_0805.jpg" alt="Granada">
						<figcaption>

						</figcaption>
					</figure>

				</div>
				<div class="slide_item">
					<figure>
						<img src="/markup/img/IMG_7463.jpg" alt="Granada">
						<figcaption>

						</figcaption>
					</figure>

				</div>
			</div>

			<div class="slider_arrows">
				<div id="left_arrow" class="arrow_left">
					<i class="fas fa-long-arrow-alt-left"></i>
				</div>
				<div id="right_arrow" class="arrow_right">
					<i class="fas fa-long-arrow-alt-right"></i>
				</div>
			</div>

		</div>
	</section>
	
	<section class="about">
		
		<div class="about_wrapper">
			<div class="about_content">
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, quaerat.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident voluptatibus saepe omnis dolor optio in minus excepturi quod earum accusamus incidunt quo, quas voluptatum dolore ex qui blanditiis est iure dolorem nostrum. Veritatis nostrum pariatur labore, voluptatem quae. Quaerat cupiditate, quia aspernatur vitae adipisci nesciunt? Consequatur facilis inventore cupiditate nam optio aliquam aspernatur commodi nihil ipsa quas dolor, similique.</p>
				<a href="<?= Url::to(['site/about']);?>"><span>More about me</span></a>
				<div class="qualities">
					<div class="qualities_block">
						<div class="quality_holder">
							<h4><span class="count_number">8</span> years</h4>
							<p>Web Development</p>
						</div>

						<div class="quality_holder">
							<h4>over <span class="count_number">127</span></h4>
							<p>Web Development</p>
						</div>
					</div>
					<hr>
					<div class="qualities_block">
						<div class="quality_holder">
							<h4><span class="count_number">165</span>+</h4>
							<p>Web Development</p>
						</div>

						<div class="quality_holder">
							<h4><span class="count_number">25</span></h4>
							<p>Web Development</p>
						</div>
					</div>
				</div>
			</div>

			<div class="about_box">
				<div class="about_box_item">
					<h4>What we do?</h4>
					<ul class="what_we_do">
						<li>Design</li>
						<li>Development</li>
						<li>Wordpress</li>
						<li>E-commerce</li>
						<li>E-booking</li>
						<li>Plugins</li>
						<li>Blogs</li>
					</ul>
				</div>
			</div>

			<div class="clear"></div>
		</div>
		
	</section><!--/.About section-->

	<!--Portfolio section-->

	<section class="portfolio">
		
		<h6>Choose an album</h6>
		<h5>I chose the very best of my shots.</h5>
		
		<div class="portfolio_container aware_direction">
                    <?php foreach($shots as $album):?>
			<div class="portfolio_item">
				<a href="<?= Url::to(['site/album_view', 'id'=>$album->id]); ?>">
					<img src="<?= $album->getImage();?>" alt="board">
					<div>
						<div class="caption"><?= $album->title; ?></div>
					</div>
				</a>
			</div>
	
                 <?php endforeach; ?>
		</div>

	</section><!--/.Portfolio section-->

	<!--Blog section-->

	<section class="blog">
		<h6>Latest post</h6>
		<h5>News and Events</h5>
		<div class="blog_wrapper">
 <?php foreach($recent as $article):?>
			<div class="blog_item">
				<div class="thumbnail">
					<a href="<?= Url::to(['site/blog_view', 'id'=>$article->id]); ?>">
						<img src="<?= $article->getImage();?>" alt="Blogpost">
						<div class="thumbnail_overlay">

						</div>
					</a>
				</div>

				<div class="blogpost_content">
					<div class="blog_date">
						<a href="<?= Url::to(['site/blog_view', 'id'=>$article->id]); ?>">
							<span id="date"><?= $article->dayDate(); ?></span>
							<span><?= $article->monthDate(); ?></span>
							<span><?= $article->yearDate(); ?></span>
						</a>
					</div>
					<div class="blogpost_info">
						<a href="<?= Url::to(['site/blog_view', 'id'=>$article->id]); ?>"><h5><?= $article->title; ?></h5></a>
						<div class="blog_line"></div>
						<p>
							By <a href="<?= Url::to(['site/author','id'=>$article->author->id]); ?>"><?= $article->author->name; ?></a><i class="fas fa-circle"></i>In <a href="<?= Url::to(['site/category','id'=>$article->category->id]); ?>"><?= $article->category->title; ?></a>
						</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, fugiat!</p>
						<a href="<?= Url::to(['site/blog_view', 'id'=>$article->id]); ?>" class="button_blog button_blog-swap_blog">Read more<span>Read more</span></a>
					</div>
				</div>
			</div>
<?php endforeach; ?>
			
		
		</div>
	</section><!--/.Blog section-->
