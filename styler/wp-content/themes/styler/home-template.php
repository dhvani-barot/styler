<?php
/**
 * Template name: home template
 */

?>
<?php get_header(); ?>

<script type="text/javascript" src="<?= get_stylesheet_directory_uri()  ?>/assets/plugins/sliderpro/js/jquery.sliderPro.min.js"></script>
<div id="sliderpro2" class="slider-pro main-slider">
    <div class="sp-slides">
        <div class="sp-slide"> <img class="sp-image"
                                    src="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/c.png"
                                    data-src="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/c.png"
                                    data-retina="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/c.png" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="865" data-vertical="300"
                 data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
                <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/c1.png"  alt="slide element"/>
            </div>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="777" data-vertical="380"
                 data-show-transition="bottom" data-hide-transition="up" data-show-delay="700" data-hide-delay="200">
                <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/c2.png"   alt="slide element"/>
            </div>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="1114" data-vertical="508"
                 data-show-transition="left" data-hide-transition="up" data-show-delay="500" data-hide-delay="300">
                <a href="category-1.html">
                    <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/c3.png"   alt="slide element"/>
                </a>
            </div>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="135" data-vertical="55"
                 data-show-transition="top" data-hide-transition="up" data-show-delay="500" data-hide-delay="300">
                <a href="category-1.html">
                    <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/logo-w.png"   alt="slide element"/>
                </a>
            </div>
        </div>
        <div class="sp-slide"> <img class="sp-image"
                                    src="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/c.png"
                                    data-src="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/c.png"
                                    data-retina="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/c.png" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="865" data-vertical="300"
                 data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
                <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/c1.png"  alt="slide element"/>
            </div>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="777" data-vertical="380"
                 data-show-transition="bottom" data-hide-transition="up" data-show-delay="700" data-hide-delay="200">
                <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/c2.png"   alt="slide element"/>
            </div>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="1114" data-vertical="508"
                 data-show-transition="left" data-hide-transition="up" data-show-delay="500" data-hide-delay="300">
                <a href="category-1.html">
                    <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/c3.png"   alt="slide element"/>
                </a>
            </div>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="135" data-vertical="55"
                 data-show-transition="top" data-hide-transition="up" data-show-delay="500" data-hide-delay="300">
                <a href="category-1.html">
                    <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/main-slider/logo-w.png"   alt="slide element"/>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <!-- end main-slider -->

            <ul class="category-images">

                <?php

                $taxonomy     = 'product_cat';
                $orderby      = 'name';
                $show_count   = 0;      // 1 for yes, 0 for no
                $pad_counts   = 0;      // 1 for yes, 0 for no
                $hierarchical = 1;      // 1 for yes, 0 for no
                $title        = '';
                $empty        = 1;

                $args = array(
                    'taxonomy'     => $taxonomy,
                    'orderby'      => $orderby,
                    'show_count'   => $show_count,
                    'pad_counts'   => $pad_counts,
                    'hierarchical' => $hierarchical,
                    'title_li'     => $title,
                    'hide_empty'   => $empty
                );
                $all_categories = get_categories( $args );
                $i = 1;
                foreach ($all_categories as $cat) {
                    if($cat->category_parent == 0) {
                        $category_id = $cat->term_id;

                        if($i == 1)
                            $animation = 'fadeInLeft';
                        elseif ($i == 2) {
                            $animation = 'fadeInUp';
                        }
                        elseif ($i == 3) {
                            $animation = 'fadeInRight';
                        }
                        $i ++;
                        ?>
                        <li class="grid">
                            <figure class="effect-bubba wow <?php echo $animation ?>" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: '<?php echo $animation ?>' ;">
                                <img class="img-responsive" src="<?= get_stylesheet_directory_uri()  ?>/assets/media/420x170/1.jpg" height="170" width="420" alt="Foto">
                                <figcaption>
                                    <span class="links-categories__inner"> <span class="links-categories__label">NEW</span> <span class="links-categories__name"><?php echo $cat->name ?></span> </span> <a href="'. get_term_link($cat->slug, 'product_cat') .'">View more</a>
                                </figcaption>
                            </figure>
                        </li>
                        <?php
                    }
                }
                ?>
                <!--                     <li class="grid">
                        <figure class="effect-bubba wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                            <img class="img-responsive" src="<?= get_stylesheet_directory_uri()  ?>/assets/media/420x170/1.jpg" height="170" width="420" alt="Foto">
                            <figcaption>
                                <span class="links-categories__inner"> <span class="links-categories__label">NEW</span> <span class="links-categories__name">FASHION COLLECTION</span> </span> <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid left-space right-space">
                        <figure class="effect-bubba wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"> <img class="img-responsive" src="<?= get_stylesheet_directory_uri()  ?>/assets/media/420x170/2.jpg" height="170" width="420" alt="Foto">
                            <figcaption> <span class="links-categories__inner"> <span class="links-categories__label">NEW</span> <span class="links-categories__name">PERFUMES COLLECTION</span> </span> <a href="#">View more</a> </figcaption>
                        </figure>
                    </li>
                    <li class="grid">
                        <figure class="effect-bubba wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;"> <img class="img-responsive" src="<?= get_stylesheet_directory_uri()  ?>/assets/media/420x170/1.jpg" height="170" width="420" alt="Foto">
                            <figcaption> <span class="links-categories__inner"> <span class="links-categories__label">NEW</span> <span class="links-categories__name">FASHION COLLECTION</span> </span> <a href="#">View more</a> </figcaption>
                        </figure>
                    </li>
 -->                </ul>

            <!-- end section-area -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="section-area">
                <ul id="filter" class="clearfix wow bounceInLeft" data-wow-duration="2s" data-wow-delay=".5s">
                    <li><a href="" data-filter="*" class="current">ALL PRODUCTS</a></li>
                    <li><a href="" data-filter=".best">BEST SELLERS</a></li>
                    <li><a href="" data-filter=".newest">NEWEST ADDED</a></li>
                </ul>
            </div>
            <!-- end section-area -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->
<?php 

	// echo do_shortcode('[products limit="3" columns="3" best_selling="true" ]'); //Best-selling
	// echo do_shortcode('[products limit="4" columns="4" orderby="id" order="DESC" visibility="visible"]'); // newest
	// echo do_shortcode('[products limit="4" columns="2" visibility="featured" ]'); // featured
	// echo do_shortcode('[products limit="4" columns="4" orderby="popularity" class="quick-sale" on_sale="true" ]'); // featured

?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="section-area">
                <div class="isotope-frame wow bounceInRight" data-wow-duration="2s">
                    <?php
					// All products
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 8
                    );

                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                        global $product;
						$html = '<li class="isotope-item best products__item">';
						$html .= '<a class="products__foto" href="'.get_permalink().'" rel="prettyPhoto">';
						$html .= '<img src="'. woocommerce_get_product_thumbnail() .'" height="260" width="260" alt="Goods"></a>';
						$html .= '<h4 class="products__name"><a href="'.get_permalink().'">'. woocommerce_get_product_thumbnail() .'</a></h4>';
						$html .= '<div class="products__category"><a href="'.get_permalink().'">'. woocommerce_get_product_thumbnail() .'</a></div>';
                        $html .= '<a href="'.get_permalink().'">' .  $product->get_categories( ', ',  _n( 'Category:', 'Categories:', sizeof( get_the_terms( get_the_ID(), 'product_cat' ) ), 'woocommerce' )) .' '.get_the_title().'</a>';
						echo $html;
					endwhile;

                    wp_reset_query();
					
					?>
					<?php
					//display some latest products
					/*	$args = array(
						'post_type' => 'product',
						'stock' => 1,
						'posts_per_page' => 8,
						'orderby' =>'date',
						'order' => 'DESC' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						<div class="span3">
						<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="My Image Placeholder" width="65px" height="115px" />'; ?>
						<h3><?php the_title(); ?></h3>
						<span class="price"><?php echo $product->get_price_html(); ?></span>
						</a>
						<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
						</div><!-- /span3 -->
						<?php endwhile; ?>
						<?php wp_reset_query(); */ ?>
                    
                    <ul class="isotope-filter products clearfix">
                        <li class="isotope-item best products__item">
						<a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/1.jpg" rel="prettyPhoto">
							<img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/1.jpg" height="260" width="260" alt="Goods">
						</a>
                            <h4 class="products__name"><a href="#">Montblanc Meisterstück</a></h4>
                            <div class="products__category"><a href="#">WATCHES</a></div>
                            <div class="products__inner clearfix"> <span class="products__price-new">$4500</span> <span class="products__price-old">$89.00</span>
                                <ul class="rating">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star disabled"></i></li>
                                </ul>
                            </div>
                            <footer class="products-btns clearfix">
                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                <span class="products-btns__other pull-right">
                  <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                  <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                  </span> </footer>
                            <span class="label-wrap"><span class="label label-danger">SALE</span></span> </li>
							
                        <li class="isotope-item newest products__item">
                            <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/2.jpg" rel="prettyPhoto">
                                <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/2.jpg" height="260" width="260" alt="Goods">
                            </a>
                            <h4 class="products__name"><a href="#">Samsung Galaxy S6 White</a></h4>
                            <div class="products__category"><a href="#">SMARTPHONES</a></div>
                            <div class="products__inner clearfix"> <span class="products__price-new">$720</span> <span class="products__price-old">$89.00</span>
                                <ul class="rating">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star disabled"></i></li>
                                </ul>
                            </div>
                            <footer class="products-btns clearfix">
                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                <span class="products-btns__other pull-right">
                  <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                  <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                  </span> </footer>
                            <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                        <li class="isotope-item hot products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/3.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
                            <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                            <div class="products__category"><a href="#">PERFUMES</a></div>
                            <div class="products__inner clearfix"> <span class="products__price-new">$235</span> <span class="products__price-old">$89.00</span>
                                <ul class="rating">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star disabled"></i></li>
                                </ul>
                            </div>
                            <footer class="products-btns clearfix">
                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                <span class="products-btns__other pull-right">
                  <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                  <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                  </span> </footer>
                            <span class="label-wrap"><span class="label label-info">HOT</span></span> </li>
                        <li class="isotope-item newest products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/4.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/4.jpg" height="260" width="260" alt="Goods"> </a>
                            <h4 class="products__name"><a href="#">Beats Solo Wireless</a></h4>
                            <div class="products__category"><a href="#">HEADPHONES</a></div>
                            <div class="products__inner clearfix"> <span class="products__price-new">$360</span> <span class="products__price-old">$89.00</span>
                                <ul class="rating">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star disabled"></i></li>
                                </ul>
                            </div>
                            <footer class="products-btns clearfix">
                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                <span class="products-btns__other pull-right">
                  <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                  <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                  </span> </footer>
                            <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                        <li class="isotope-item hot products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/9.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/9.jpg" height="260" width="260" alt="Goods"> </a>
                            <h4 class="products__name"><a href="#">Apple Macbook Air 13”</a></h4>
                            <div class="products__category"><a href="#">LAPTOPS</a></div>
                            <div class="products__inner clearfix"> <span class="products__price-new">$1.333</span> <span class="products__price-old">$89.00</span>
                                <ul class="rating">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star disabled"></i></li>
                                </ul>
                            </div>
                            <footer class="products-btns clearfix">
                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                <span class="products-btns__other pull-right">
                  <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                  <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                  </span> </footer>
                            <span class="label-wrap"><span class="label label-info">HOT</span></span> </li>
                        <li class="isotope-item best products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/10.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/10.jpg" height="260" width="260" alt="Goods"> </a>
                            <h4 class="products__name"><a href="#">Eye Shadow Makeup Kit</a></h4>
                            <div class="products__category"><a href="#">MAKEUP</a></div>
                            <div class="products__inner clearfix"> <span class="products__price-new">$80</span> <span class="products__price-old">$89.00</span>
                                <ul class="rating">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star disabled"></i></li>
                                </ul>
                            </div>
                            <footer class="products-btns clearfix">
                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                <span class="products-btns__other pull-right">
                  <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                  <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                  </span> </footer>
                            <span class="label-wrap"><span class="label label-danger">SALE</span></span> </li>
                        <li class="isotope-item best products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/5.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/5.jpg" height="260" width="260" alt="Goods"> </a>
                            <h4 class="products__name"><a href="#">MP3 Active 2 Neon Blue 4GB</a></h4>
                            <div class="products__category"><a href="#">Music Players</a></div>
                            <div class="products__inner clearfix"> <span class="products__price-new">$235</span> <span class="products__price-old">$89.00</span>
                                <ul class="rating">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star disabled"></i></li>
                                </ul>
                            </div>
                            <footer class="products-btns clearfix">
                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                <span class="products-btns__other pull-right">
                  <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                  <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                  </span> </footer>
                            <span class="label-wrap"><span class="label label-danger">SALE</span></span> </li>
                        <li class="isotope-item hot products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/7.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/7.jpg" height="260" width="260" alt="Goods"> </a>
                            <h4 class="products__name"><a href="#">Elekta 50” UHD 3D LED TV</a></h4>
                            <div class="products__category"><a href="#">LED TV’s</a></div>
                            <div class="products__inner clearfix"> <span class="products__price-new">$685</span> <span class="products__price-old">$89.00</span>
                                <ul class="rating">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star disabled"></i></li>
                                </ul>
                            </div>
                            <footer class="products-btns clearfix">
                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                <span class="products-btns__other pull-right">
                  <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                  <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                  </span> </footer>
                            <span class="label-wrap"><span class="label label-info">HOT</span></span> </li>
                    </ul>
                </div>
            </div>
            <!-- end section-area -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->

<div class="row">
    <div class="col-xs-12">
        <div class="section-area section-banner">
            <div class="banner banner-full-w   banner_w-btn wow bounceInUp" data-wow-duration="2s">
                <div class="pix-parallax-elements"></div>
                <div class="container">
                    <div class="section-area section-default">
                        <div class="subscribe subscribe_mod-a"> <i class="subscribe__icon icon-envelope-open"></i>
                            <div class="subscribe__inner"> <span class="subscribe__title">Grab the Best Deals</span> <span class="subscribe__description">Get Latest Deals, Offers & Products updates via Email</span> </div>
                            <form class="subscribe__form form-inline">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email ...">
                                    <input class="ui-btn ui-btn_warning" type="submit" value="SUBSCRIBE">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="border-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <section class="section-area section-default wow bounceInRight" data-wow-duration="2s">
                                <h3 class="ui-title-block"><i class="icon fa fa-bars"></i>SPECIAL PRODUCTS</h3>
                                <div class="wrap-slider">
                                    <ul class="products clearfix owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
                                        data-min480="1"
                                        data-min768="2"
                                        data-min992="2"
                                        data-min1200="2"
                                        data-pagination="false"
                                        data-navigation="true"
                                        data-auto-play="4000"
                                        data-stop-on-hover="true">
                                        <li class="products__item">
                                            <a class="products__foto" href="assets/media/catalog/5.jpg" rel="prettyPhoto">
                                                <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/2.jpg" height="260" width="260" alt="Goods">
                                            </a>
                                            <h4 class="products__name"><a href="#">Samsung Galaxy S6 White</a></h4>
                                            <div class="products__category"><a href="#">SMARTPHONES</a></div>
                                            <div class="products__inner clearfix"> <span class="products__price-new">$720</span> <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span>               </footer>
                                        </li>
                                        <li class="products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/6.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                                            <div class="products__category"><a href="#">PERFUMES</a></div>
                                            <div class="products__inner clearfix"> <span class="products__price-new">$129</span> <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                                <span class="products-btns__other pull-right">
                                                        <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                                                        <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                                                    </span>
                                            </footer>
                                            <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                                        <li class="products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/7.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/4.jpg" height="260" width="260" alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Beats Solo Wireless</a></h4>
                                            <div class="products__category"><a href="#">HEADPHONES</a></div>
                                            <div class="products__inner clearfix"> <span class="products__price-new">$360</span> <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span> </footer>
                                        </li>
                                        <li class="products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/6.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                                            <div class="products__category"><a href="#">PERFUMES</a></div>
                                            <div class="products__inner clearfix"> <span class="products__price-new">$129</span> <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span> </footer>
                                            <span class="label-wrap"><span class="label label-warning">NEW</span></span> </li>
                                    </ul>
                                    <!-- end products -->
                                </div>
                                <!-- end wrap-slider -->
                            </section>
                            <!-- end section-area -->

                        </div>
                        <div class="col-md-6 col-xs-12">
                            <section class="section-area section-default wow bounceInRight" data-wow-duration="2s">
                                <h3 class="ui-title-block"><i class="icon fa fa-bars"></i>HOT DEALS</h3>
                                <div class="wrap-slider">
                                    <div class="products clearfix owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
                                         data-min480="1"
                                         data-min768="2"
                                         data-min992="2"
                                         data-min1200="2"
                                         data-pagination="false"
                                         data-navigation="true"
                                         data-auto-play="400000"
                                         data-stop-on-hover="true">
                                        <div class="products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/6.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/3.jpg" height="260" width="260" alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Perfume de Toilet</a></h4>
                                            <div class="products__category"><a href="#">PERFUMES</a></div>
                                            <div class="products__inner clearfix"> <span class="products__price-new">$235</span> <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span> </footer>
                                            <span class="label-wrap"><span class="label label-info">HOT</span></span> </div>
                                        <div class="products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/9.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/9.jpg" height="260" width="260" alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Apple Macbook Air 13”</a></h4>
                                            <div class="products__category"><a href="#">LAPTOPS</a></div>
                                            <div class="products__inner clearfix"> <span class="products__price-new">$1.333</span> <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span> </footer>
                                            <span class="label-wrap"><span class="label label-info">HOT</span></span> </div>
                                        <div class="products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/7.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/7.jpg" height="260" width="260" alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Elekta 50” UHD 3D LED TV</a></h4>
                                            <div class="products__category"><a href="#">LED TV’s</a></div>
                                            <div class="products__inner clearfix"> <span class="products__price-new">$685</span> <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span> </footer>
                                            <span class="label-wrap"><span class="label label-info">HOT</span></span> </div>
                                        <div class="products__item"> <a class="products__foto" href="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/9.jpg" rel="prettyPhoto"> <img src="<?= get_stylesheet_directory_uri()  ?>/assets/media/catalog/9.jpg" height="260" width="260" alt="Goods"> </a>
                                            <h4 class="products__name"><a href="#">Apple Macbook Air 13”</a></h4>
                                            <div class="products__category"><a href="#">LAPTOPS</a></div>
                                            <div class="products__inner clearfix"> <span class="products__price-new">$1.333</span> <span class="products__price-old">$89.00</span>
                                                <ul class="rating">
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star"></i></li>
                                                    <li><i class="icon fa fa-star disabled"></i></li>
                                                </ul>
                                            </div>
                                            <footer class="products-btns clearfix">
                                                <button class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i> Add to cart</button>
                                                <span class="products-btns__other pull-right">
                          <button class="products-btns__btn"><i class="icon icon-shuffle"></i></button>
                          <button class="products-btns__btn"><i class="icon icon-heart"></i></button>
                          </span> </footer>
                                            <span class="label-wrap"><span class="label label-info">HOT</span></span> </div>
                                    </div>
                                    <!-- end products -->
                                </div>
                                <!-- end wrap-slider -->
                            </section>
                            <!-- end section-area -->

                        </div>
                    </div>
					<ul>
						<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
								<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
								<li><?php the_excerpt(__('(more…)')); ?></li>
						<?php 
							endwhile;
							wp_reset_postdata();
						?>
					</ul>
					
                    <section class="section-area section-list-posts wow bounceInRight" data-wow-duration="2s">
                        <h3 class="ui-title-block"><i class="icon fa fa-bars"></i>LATEST BLOG POSTS</h3>
                        <div class="wrap-slider">
                            <div class="list-posts_mod-a list-posts_carusel list-unstyled owl-carousel owl-theme_mod-b owl-theme enable-owl-carousel"
                                 data-min480="1"
                                 data-min768="3"
                                 data-min992="3"
                                 data-min1200="3"
                                 data-pagination="false"
                                 data-navigation="true"
                                 data-auto-play="4000"
                                 data-stop-on-hover="true">
                                <article class="list-posts__article clearfix">
                                    <div class="img-hover-effect"><img class="img-responsive" src="<?= get_stylesheet_directory_uri()  ?>/assets/media/420x250/1.png" height="250" width="420" alt="Foto"></div>
                                    <div class="list-posts__info"> <i class="icon icon-user"></i><span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">MEX</a></span> <i class="icon icon-calendar"></i><span class="list-posts__date"> June 20, 2015 </span> </div>
                                    <h2 class="list-posts__title">Praesent auctor justo et pulvinar</h2>
                                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a> </article>
                                <article class="list-posts__article clearfix">
                                    <div class="img-hover-effect"><img class="img-responsive" src="<?= get_stylesheet_directory_uri()  ?>/assets/media/420x250/2.png" height="250" width="420" alt="Foto"></div>
                                    <div class="list-posts__info"> <i class="icon icon-user"></i><span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">MEX</a></span> <i class="icon icon-calendar"></i><span class="list-posts__date">June 20, 2015 </span> </div>
                                    <h2 class="list-posts__title">Nam volutpat ornare enim cras</h2>
                                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a> </article>
                                <article class="list-posts__article clearfix">
                                    <div class="img-hover-effect"><img class="img-responsive" src="<?= get_stylesheet_directory_uri()  ?>/assets/media/420x250/1.png" height="250" width="420" alt="Foto"></div>
                                    <div class="list-posts__info"> <i class="icon icon-user"></i><span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">MEX</a></span> <i class="icon icon-calendar"></i><span class="list-posts__date">June 20, 2015 </span> </div>
                                    <h2 class="list-posts__title">Praesent auctor justo et pulvinar</h2>
                                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a> </article>
                                <article class="list-posts__article clearfix">
                                    <div class="img-hover-effect"><img class="img-responsive" src="<?= get_stylesheet_directory_uri()  ?>/assets/media/420x250/2.png" height="250" width="420" alt="Foto"></div>
                                    <div class="list-posts__info"> <i class="icon icon-user"></i><span class="list-posts__autor">By <a class="color_primary" href="javascript:void(0);">MEX</a></span> <i class="icon icon-calendar"></i><span class="list-posts__date">June 20, 2015 </span> </div>
                                    <h2 class="list-posts__title">Nam volutpat ornare enim cras</h2>
                                    <p>Crabitur venenatis lacus nec erat. Sed velit urna sollicitu euismo nec hendrerit vel velit. Mauris dolor. Aliquam erat volutpat ipsum In lorem felis sollicitudin sed.</p>
                                    <a class="btn btn-info pull-right" href="javascript:void(0);">READ MORE</a> </article>
                            </div>
                        </div>
                        <!-- end wrap-slider -->
                    </section>
                    <!-- end section-area -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end border-main -->

    <div class="section-area section-default section-list-clients padding-bottom wow bounceInUp" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="list-clients list-unstyled owl-carousel owl-theme_mod-a owl-theme enable-owl-carousel"
                         data-min480="2"
                         data-min768="4"
                         data-min992="4"
                         data-min1200="5"
                         data-pagination="false"
                         data-navigation="true"
                         data-auto-play="4000"
                         data-stop-on-hover="true">
                        <div class="list-clients__item"> <img class="img-responsive" src="http://localhost/styler/wp-content/uploads/2018/04/angelrock_logo_200.jpg" height="197" width="200" alt="Clients"> </div>
                        <div class="list-clients__item"> <img class="img-responsive" src="http://localhost/styler/wp-content/uploads/2018/04/Keli_Logo200.png" height="227" width="300" alt="Clients"> </div>
                        <div class="list-clients__item"> <img class="img-responsive" src="http://localhost/styler/wp-content/uploads/2018/04/kids-group-cm-.jpg" height="200" width="300" alt="Clients"> </div>
                        <div class="list-clients__item"> <img class="img-responsive" src="http://localhost/styler/wp-content/uploads/2018/04/logo_200_x_200.png" height="200" width="200" alt="Clients"> </div>
                        <div class="list-clients__item"> <img class="img-responsive" src="http://localhost/styler/wp-content/uploads/2018/04/mysql-logo-3d-model-8DVLk15Rl_200.jpg" height="140" width="248" alt="Clients"> </div>
                        <div class="list-clients__item"> <img class="img-responsive" src="http://localhost/styler/wp-content/uploads/2018/04/angelrock_logo_200.jpg" height="197" width="200" alt="Clients"> </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section-area -->

    <!-- end section-social-links -->

    <?php get_footer(); ?>
