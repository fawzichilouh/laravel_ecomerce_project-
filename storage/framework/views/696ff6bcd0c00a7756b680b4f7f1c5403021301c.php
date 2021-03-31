<?php $__env->startSection('content'); ?>
<div class="container">
    <?php $__env->startSection('brodcump'); ?>
    <?php $__env->stopSection(); ?>


        <!--====== Section 1 ======-->

        <!--====== Electronic Category ======-->
        <div class="u-s-p-y-60" id="electronic-01">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="block">
                                <span class="block__title"
                                    >TOP CATEGORY</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30"
                        >                                                             
                            <div class="category-o">
                                <div
                                    class="aspect aspect--bg-grey aspect--square category-o__img-wrap"
                                >
                                    <img
                                        class="aspect__img category-o__img"
                                        src="<?php echo e($cat->image); ?>"
                                        alt=""
                                    />
                                </div>
                                <div class="category-o__info">
                                    <a
                                        class="category-o__shop-now btn--e-white-brand"
                                        href="<?php echo e(Route('items_cats',
                                        ['id_cat' =>$cat->id
                                        ])); ?>"
                                        ><?php echo e($cat->name); ?></a
                                    >
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>

        <!--====== Electronic Category ======-->
        <!--====== End - Section 1 ======-->
        <!--====== Section 2 ======-->

        <!--====== End - Section 2 ======-->
        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-16">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1
                                    class="section__heading u-c-secondary u-s-m-b-12"
                                >
                                    TOP TRENDING
                                </h1>

                                <span class="section__span u-c-silver"
                                    >CHOOSE CATEGORY</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="filter-category-container">
                                <div class="filter__category-wrapper">
                                    <button
                                        class="btn filter__btn filter__btn--style-1 js-checked"
                                        type="button"
                                        data-filter="*"
                                    >
                                        ALL
                                    </button>
                                </div>
                                <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="filter__category-wrapper">
                                    <button
                                        class="btn filter__btn filter__btn--style-1"
                                        type="button"
                                        data-filter=".<?php echo e($cat->name); ?>"
                                    >
                                      
                                         <?php echo e($cat->name); ?> 
                                      
                                    </button>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                               
                            </div>
                            <div
                                class="filter__grid-wrapper u-s-m-t-30"
                            >
                            <div class="row">

                         <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <div
                         class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item <?php echo e($product->Category->name); ?>">
                         <div
                             class="product-o product-o--hover-on product-o--radius"
                         >
                             <div
                                 class="product-o__wrap"
                             >
                                 <a
                                     class="aspect aspect--bg-grey aspect--square u-d-block"
                                     href="<?php echo e(Route('product', $product->id)); ?>"
                                 >
                                     <img
                                         class="aspect__img"
                                         src="<?php echo e($product->image); ?>"
                                         alt=""
                                 /></a>
                                 <div
                                     class="product-o__action-wrap"
                                 >
                                     <ul
                                         class="product-o__action-list"
                                     >
                                         <li>
                                             <a
                                                 data-modal="modal"
                                                 data-modal-id="#quick-look<?php echo e($product->id); ?>"
                                                 data-tooltip="tooltip"
                                                 data-placement="top"
                                                 title="Quick View"
                                                 ><i
                                                     class="fas fa-search-plus"
                                                 ></i
                                             ></a>
                                         </li>
                                         <li>
                                             <form action="<?php echo e(Route('cart-store')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                               
                                             <a
                                             data-modal="modal"
                                             data-tooltip="tooltip"
                                             data-placement="top"
                                             title="Add to Cart"
                                             class="add_to_cart_form"
                                             onclick="$(this).closest('form').submit();"
                                             ><i
                                                 class="fas fa-plus-circle"
                                             ></i
                                         ></a>
                                            </form>
                                           
                                         </li>
                                       
                                        
                                     </ul>
                                 </div>
                             </div>

                             <span
                                 class="product-o__category"
                             >
                                 <a
                                 href="<?php echo e(Route('items_cats',
                                 ['id_cat' =>$cat->id
                                 ])); ?>"
                                     ><?php echo e($product->Category->name); ?></a
                                 ></span
                             >

                             <span
                                 class="product-o__name"
                             >
                                 <a
                                     href="<?php echo e(Route('product', $product->id)); ?>"
                                     ><?php echo e($product->title); ?></a
                                 ></span
                             >
                             <div
                                 class="product-o__rating gl-rating-style"
                             >
                                 <i
                                     class="fas fa-star"
                                 ></i
                                 ><i
                                     class="fas fa-star"
                                 ></i
                                 ><i
                                     class="fas fa-star"
                                 ></i
                                 ><i
                                     class="fas fa-star"
                                 ></i
                                 ><i
                                     class="fas fa-star-half-alt"
                                 ></i>

                             </div>

                             <span
                                 class="product-o__price"
                                 ><?php echo e(getPrice($product->price)); ?>


                                 <span
                                     class="product-o__discount"
                                     ><?php echo e(getPrice($product->last_price)); ?></span
                                 ></span
                             >
                         </div>
                         </div>
                      
            <!--====== Quick Look Modal cats ======-->
            <div class="modal fade quick-look" id="quick-look<?php echo e($product->id); ?>">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content modal--shadow">
                        <button
                            class="btn dismiss-button fas fa-times"
                            type="button"
                            data-dismiss="modal"
                        ></button>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <!--====== Product Breadcrumb ======-->
                                    <div class="pd-breadcrumb u-s-m-b-30">
                                        <ul class="pd-breadcrumb__list">
                                            <li class="has-separator">
                                                <a href="<?php echo e(Route('home')); ?>">Home</a>
                                            </li>                                      
                                            <li class="is-marked">
                                                <a
                                                href="<?php echo e(Route('items_cats',
                                                ['id_cat' =>$cat->id
                                                ])); ?>"
                                                    ><?php echo e($product->Category->name); ?></a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                    <!--====== End - Product Breadcrumb ======-->

                                    <!--====== Product Detail ======-->
                                    <div class="pd u-s-m-b-30" style="margin-bottom: 0 !important;height: 80%;">
                                        <div class="pd-wrap" style="height: 100%">
                                            <div id="js-product-detail-modal" style="height: 100%">
                                                <div  style="height: 100%">
                                                    <img
                                                    style="height: 100%"
                                                        class="u-img-fluid"
                                                        src="<?php echo e($product->image); ?>"
                                                        alt=""
                                                    />
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="u-s-m-t-15">
                                            <div
                                                id="js-product-detail-modal-thumbnail"
                                            >
                                               
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!--====== End - Product Detail ======-->
                                </div>
                                <div class="col-lg-7">
                                    <!--====== Product Right Side Details ======-->
                                    <div class="pd-detail">
                                        <div>
                                            <span class="pd-detail__name"
                                                ><?php echo e($product->title); ?></span
                                            >
                                        </div>
                                        <div>
                                            <div class="pd-detail__inline">
                                                <span class="pd-detail__price"
                                                    ><?php echo e(getPrice($product->price)); ?></span
                                                >

                                               <del class="pd-detail__del"
                                                    ><?php echo e(getPrice($product->last_price)); ?></del
                                                >
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div
                                                class="pd-detail__rating gl-rating-style"
                                            >
                                                <i class="fas fa-star"></i
                                                ><i class="fas fa-star"></i
                                                ><i class="fas fa-star"></i
                                                ><i class="fas fa-star"></i
                                                ><i
                                                    class="fas fa-star-half-alt"
                                                ></i>

                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">
                                                <?php echo e(checkquantity($product->quantity)); ?>


                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <span
                                                class="pd-detail__preview-desc"
                                                ><?php echo e($product->description); ?></span
                                            >
                                        </div>
                                       

                                        <div class="u-s-m-b-15">
                                            <form class="pd-detail__form" action="<?php echo e(Route('cart-store')); ?>" method="POST">
                                                
                                                    <?php echo csrf_field(); ?>
                                                <div class="pd-detail-inline-2">
                                                    <div class="u-s-m-b-15">
                                                        <!--====== Input Counter ======-->
                                                        <div
                                                            class="input-counter"
                                                        >
                                                            <span
                                                                class="input-counter__minus fas fa-minus"
                                                            ></span>

                                                            <input
                                                                class="input-counter__text input-counter--text-primary-style"
                                                                type="text"
                                                                value="1"
                                                                data-min="1"
                                                                data-max="1000"
                                                                name="qntty"
                                                            />

                                                            <span
                                                                class="input-counter__plus fas fa-plus"
                                                            ></span>
                                                        </div>
                                                        <!--====== End - Input Counter ======-->
                                                    </div>
                                                    <div class="u-s-m-b-15">
                                                        
                                                            <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                                         <a
                                                         data-modal="modal"
                                                         data-tooltip="tooltip"
                                                         data-placement="top"
                                                         title="Add to Cart"
                                                         class="btn btn--e-brand-b-2"
                                                         onclick="$(this).closest('form').submit();"

                                                         >
                                                         Add to Cart
                                                        </a>
                                                        
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <span
                                                class="pd-detail__label u-s-m-b-8"
                                                >Product Policy:</span
                                            >
                                            <ul class="pd-detail__policy-list">
                                                <li>
                                                    <i
                                                        class="fas fa-check-circle u-s-m-r-8"
                                                    ></i>

                                                    <span
                                                        >Buyer Protection.</span
                                                    >
                                                </li>
                                                <li>
                                                    <i
                                                        class="fas fa-check-circle u-s-m-r-8"
                                                    ></i>

                                                    <span
                                                        >Full Refund if you
                                                        don't receive your
                                                        order.</span
                                                    >
                                                </li>
                                                <li>
                                                    <i
                                                        class="fas fa-check-circle u-s-m-r-8"
                                                    ></i>

                                                    <span
                                                        >Returns accepted if
                                                        product not as
                                                        described.</span
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--====== End - Product Right Side Details ======-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Quick Look Modal ======-->
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                    </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="load-more">
                                <a
                                    class="btn btn--e-brand"
                                    type="button"
                                    href="<?php echo e(Route('items_cats')); ?>"
                                >
                                    Load More
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->

        <!--====== Section 4 ======-->
        <div class="u-s-p-b-60">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1
                                    class="section__heading u-c-secondary u-s-m-b-12"
                                >
                                    LAST ADDED
                                </h1>

                                <span class="section__span u-c-silver"
                                    >GET UP FOR NEW ARRIVALS</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="slider-fouc">
                        <div
                            class="owl-carousel product-slider"
                            data-item="4"
                        >
                        <?php $__currentLoopData = $last_added; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="u-s-m-b-30">
                            <div
                                class="product-o product-o--hover-on"
                            >
                                <div class="product-o__wrap">
                                    <a
                                        class="aspect aspect--bg-grey aspect--square u-d-block"
                                        href="<?php echo e(Route('product', $product->id)); ?>"
                                    >
                                        <img
                                            class="aspect__img"
                                            src="<?php echo e($item->image); ?>"
                                            alt=""
                                    /></a>
                                    <div
                                        class="product-o__action-wrap"
                                    >
                                        <ul
                                            class="product-o__action-list"
                                        >
                                            
                                            <li>
                                                <form action="<?php echo e(Route('cart-store')); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($item->id); ?>">                                                  
                                                 <a
                                                 data-modal="modal"
                                                 data-tooltip="tooltip"
                                                 data-placement="top"
                                                 title="Add to Cart"
                                                 class="add_to_cart_form"
                                                 onclick="$(this).closest('form').submit();"
                                                 ><i
                                                     class="fas fa-plus-circle"
                                                 ></i
                                             ></a>
                                                </form>
                                            </li>
                                           
                                            
                                        </ul>
                                    </div>
                                </div>

                                <span class="product-o__category">
                                    <a
                                    href="<?php echo e(Route('items_cats',
                                    ['id_cat' =>$cat->id
                                    ])); ?>"
                                        ><?php echo e($item->Category->name); ?></a
                                    ></span
                                >

                                <span class="product-o__name">
                                    <a   href="<?php echo e(Route('product', $item->id)); ?>"
                                        ><?php echo e($item->title); ?></a
                                    ></span
                                >
                                <div
                                    class="product-o__rating gl-rating-style"
                                >
                                    <i class="far fa-star"></i
                                    ><i class="far fa-star"></i
                                    ><i class="far fa-star"></i
                                    ><i class="far fa-star"></i
                                    ><i class="far fa-star"></i>

                                   
                                </div>

                                <span class="product-o__price"
                                    ><?php echo e(getPrice($item->price)); ?>


                                    <span
                                        class="product-o__discount"
                                        ><?php echo e(getPrice($item->last_price)); ?></span
                                    ></span
                                >
                            </div>
                                                      
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                         
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 4 ======-->

        <!--====== Section 6 ======-->
        <div class="u-s-p-y-60">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1
                                    class="section__heading u-c-secondary u-s-m-b-12"
                                >
                                    FEATURED PRODUCTS
                                </h1>

                                <span class="section__span u-c-silver"
                                    >FIND NEW FEATURED PRODUCTS</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <?php $__currentLoopData = $best_offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30" >
                            <div
                                class="product-o product-o--hover-on u-h-100"
                            >
                                <div class="product-o__wrap">
                                    <a
                                        class="aspect aspect--bg-grey aspect--square u-d-block"
                                        href="<?php echo e(Route('product', $offer->id)); ?>"
                                    >
                                        <img
                                            class="aspect__img"
                                            src="<?php echo e($offer->image); ?>"
                                            alt=""
                                    /></a>
                                    <div class="product-o__action-wrap">
                                        <ul
                                            class="product-o__action-list"
                                        >
                                            <li>
                                                <a
                                                    data-modal="modal"
                                                    data-modal-id="#quick-look<?php echo e($offer->id); ?>"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Quick View"
                                                    ><i
                                                        class="fas fa-search-plus"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <form action="<?php echo e(Route('cart-store')); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($offer->id); ?>">
                                                   
                                                 <a
                                                 data-modal="modal"
                                                 data-tooltip="tooltip"
                                                 data-placement="top"
                                                 title="Add to Cart"
                                                 class="add_to_cart_form"
                                                 onclick="$(this).closest('form').submit();"
                                                 ><i
                                                     class="fas fa-plus-circle"
                                                 ></i
                                             ></a>
                                                </form>
                                            </li>
                                           
                                          
                                        </ul>
                                    </div>
                                </div>

                                <span class="product-o__category">
                                    <a  href="<?php echo e(Route('items_cats',
                                    ['id_cat' =>$cat->id
                                    ])); ?>"
                                        ><?php echo e($offer->Category->name); ?></a
                                    ></span
                                >

                                <span class="product-o__name">
                                    <a   href="<?php echo e(Route('product', $offer->id)); ?>"
                                        ><?php echo e($offer->title); ?></a
                                    ></span
                                >
                                <div
                                    class="product-o__rating gl-rating-style"
                                >
                                    <i class="fas fa-star"></i
                                    ><i class="fas fa-star"></i
                                    ><i class="fas fa-star"></i
                                    ><i class="fas fa-star"></i
                                    ><i
                                        class="fas fa-star-half-alt"
                                    ></i>

                                   
                                </div>

                                <span class="product-o__price"
                                    ><?php echo e(getPrice($offer->price)); ?>


                                    <span class="product-o__discount"
                                        ><?php echo e(getPrice($offer->last_price)); ?></span
                                    ></span
                                >
                            </div>
                        </div>
                          <!--====== Quick Look Modal cats ======-->
            <div class="modal fade quick-look" id="quick-look<?php echo e($offer->id); ?>">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content modal--shadow">
                        <button
                            class="btn dismiss-button fas fa-times"
                            type="button"
                            data-dismiss="modal"
                        ></button>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <!--====== Product Breadcrumb ======-->
                                    <div class="pd-breadcrumb u-s-m-b-30">
                                        <ul class="pd-breadcrumb__list">
                                            <li class="has-separator">
                                                <a href="<?php echo e(Route('home')); ?>">Home</a>
                                            </li>                                      
                                            <li class="is-marked">
                                                <a
                                                href="<?php echo e(Route('items_cats',
                                                ['id_cat' =>$cat->id
                                                ])); ?>"
                                                    ><?php echo e($offer->Category->name); ?></a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                    <!--====== End - Product Breadcrumb ======-->

                                    <!--====== Product Detail ======-->
                                    <div class="pd u-s-m-b-30" style="margin-bottom: 0 !important;height: 80%;">
                                        <div class="pd-wrap" style="height: 100%">
                                            <div id="js-product-detail-modal" style="height: 100%">
                                                <div  style="height: 100%">
                                                    <img
                                                    style="height: 100%"
                                                        class="u-img-fluid"
                                                        src="<?php echo e($offer->image); ?>"
                                                        alt=""
                                                    />
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="u-s-m-t-15">
                                            <div
                                                id="js-product-detail-modal-thumbnail"
                                            >
                                               
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!--====== End - Product Detail ======-->
                                </div>
                                <div class="col-lg-7">
                                    <!--====== Product Right Side Details ======-->
                                    <div class="pd-detail">
                                        <div>
                                            <span class="pd-detail__name"
                                                ><?php echo e($offer->title); ?></span
                                            >
                                        </div>
                                        <div>
                                            <div class="pd-detail__inline">
                                                <span class="pd-detail__price"
                                                    ><?php echo e(getPrice($offer->price)); ?></span
                                                >

                                               <del class="pd-detail__del"
                                                    ><?php echo e(getPrice($offer->last_price)); ?></del
                                                >
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div
                                                class="pd-detail__rating gl-rating-style"
                                            >
                                                <i class="fas fa-star"></i
                                                ><i class="fas fa-star"></i
                                                ><i class="fas fa-star"></i
                                                ><i class="fas fa-star"></i
                                                ><i
                                                    class="fas fa-star-half-alt"
                                                ></i>

                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">
                                                <?php echo e(checkquantity($offer->quantity)); ?>


                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <span
                                                class="pd-detail__preview-desc"
                                                ><?php echo e($offer->description); ?></span
                                            >
                                        </div>
                                       

                                        <div class="u-s-m-b-15">
                                            <form class="pd-detail__form" action="<?php echo e(Route('cart-store')); ?>" method="POST">
                                                
                                                    <?php echo csrf_field(); ?>
                                                <div class="pd-detail-inline-2">
                                                    <div class="u-s-m-b-15">
                                                        <!--====== Input Counter ======-->
                                                        <div
                                                            class="input-counter"
                                                        >
                                                            <span
                                                                class="input-counter__minus fas fa-minus"
                                                            ></span>

                                                            <input
                                                                class="input-counter__text input-counter--text-primary-style"
                                                                type="text"
                                                                value="1"
                                                                data-min="1"
                                                                data-max="1000"
                                                                name="qntty"
                                                            />

                                                            <span
                                                                class="input-counter__plus fas fa-plus"
                                                            ></span>
                                                        </div>
                                                        <!--====== End - Input Counter ======-->
                                                    </div>
                                                    <div class="u-s-m-b-15">
                                                        
                                                            <input type="hidden" name="id" value="<?php echo e($offer->id); ?>">
                                                         <a
                                                         data-modal="modal"
                                                         data-tooltip="tooltip"
                                                         data-placement="top"
                                                         title="Add to Cart"
                                                         class="btn btn--e-brand-b-2"
                                                         onclick="$(this).closest('form').submit();"

                                                         >
                                                         Add to Cart
                                                        </a>
                                                        
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <span
                                                class="pd-detail__label u-s-m-b-8"
                                                >Product Policy:</span
                                            >
                                            <ul class="pd-detail__policy-list">
                                                <li>
                                                    <i
                                                        class="fas fa-check-circle u-s-m-r-8"
                                                    ></i>

                                                    <span
                                                        >Buyer Protection.</span
                                                    >
                                                </li>
                                                <li>
                                                    <i
                                                        class="fas fa-check-circle u-s-m-r-8"
                                                    ></i>

                                                    <span
                                                        >Full Refund if you
                                                        don't receive your
                                                        order.</span
                                                    >
                                                </li>
                                                <li>
                                                    <i
                                                        class="fas fa-check-circle u-s-m-r-8"
                                                    ></i>

                                                    <span
                                                        >Returns accepted if
                                                        product not as
                                                        described.</span
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--====== End - Product Right Side Details ======-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Quick Look Modal ======-->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
       
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 6 ======-->
        <!--====== Section 9 ======-->
        <div class="u-s-p-b-60">
            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <div class="service__info-wrap">
                                    <span class="service__info-text-1"
                                        >Free Shipping</span
                                    >

                                    <span class="service__info-text-2"
                                        >Free shipping on all US order
                                        or order above $200</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon">
                                    <i class="fas fa-redo"></i>
                                </div>
                                <div class="service__info-wrap">
                                    <span class="service__info-text-1"
                                        >Shop with Confidence</span
                                    >

                                    <span class="service__info-text-2"
                                        >Our Protection covers your
                                        purchase from click to
                                        delivery</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon">
                                    <i
                                        class="fas fa-headphones-alt"
                                    ></i>
                                </div>
                                <div class="service__info-wrap">
                                    <span class="service__info-text-1"
                                        >24/7 Help Center</span
                                    >

                                    <span class="service__info-text-2"
                                        >Round-the-clock assistance for
                                        a smooth shopping
                                        experience</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 9 ======-->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fawzi\Downloads\Compressed\laravel_ecomerce_project-main\laravel_ecomerce_project-main\resources\views/home.blade.php ENDPATH**/ ?>