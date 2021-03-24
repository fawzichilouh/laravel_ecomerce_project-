@extends('layouts.template')

@section('content')
<div class="container">
    @section('brodcump')
    @endsection
    <!--====== Section 1 ======-->
   
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-p">
                        <div class="shop-p__toolbar u-s-m-b-30">
                            @isset(request()->id_cat)
                            <div class="shop-p__meta-wrap u-s-m-b-60">

                                <span class="shop-p__meta-text-1">FOUND  RESULTS</span>
                                <div class="shop-p__meta-text-2 mt-2">
                                           
                                
                                     <span>Categorie :</span>
                                    <span class="gl-tag btn--e-brand-shadow" href="#">{{$cat[0]->name}}</span>
                               
                                </div>
                            </div>
                            @endisset 
                            <div class="shop-p__tool-style">
                                <div class="tool-style__group u-s-m-b-8">


                                    <span class="js-shop-grid-target is-active">Grid</span>

                                    <span class="js-shop-list-target">List</span></div>
                                <form action="" method="POST">
                                    @csrf
                                    <div class="tool-style__form-wrap">
                                        <div class="u-s-m-b-8"><select name="show_numbers" onchange="this.form.submit()" class="select-box select-box--transparent-b-2">
                                                <option
                                                @if($products->count() <= 8)
                                                selected
                                                @endif
                                                value="8">Show: 8</option>
                                                <option 
                                                @if($products->count() <= 12 && $products->count() > 8  )
                                                selected
                                                @endif
                                                value="12">Show: 12</option>
                                                <option
                                                @if($products->count() <= 16 && $products->count() > 12)
                                                selected
                                                @endif
                                                value="16">Show: 16</option>
                                                <option
                                                @if($products->count() == 24 && $products->count() > 16)
                                                selected
                                                @endif
                                                value="24">Show: 24</option>
                                            </select></div>
                                        <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                                <option selected>Sort By: Newest Items</option>
                                                <option>Sort By: Latest Items</option>
                                                <option>Sort By: Best Selling</option>
                                                <option>Sort By: Best Rating</option>
                                                <option>Sort By: Lowest Price</option>
                                                <option>Sort By: Highest Price</option>
                                            </select></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="shop-p__collection">
                            <div class="row is-grid-active">
                               
                                @foreach ($products as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-m">
                                        <div class="product-m__thumb">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="{{$product->image}}" alt=""></a>
                                            <div class="product-m__quick-look">

                                                <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                            <div class="product-m__add-cart">

                                                <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                        </div>
                                        <div class="product-m__content">
                                            <div class="product-m__category">

                                                <a href="shop-side-version-2.html">{{$product->Category->name}}</a></div>
                                            <div class="product-m__name">

                                                <a href="product-detail.html">{{$product->title}}</a></div>
                                            <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                </div>
                                            <div class="product-m__price">${{$product->price}}.00</div>
                                            <div class="product-m__hover">
                                                <div class="product-m__preview-description">

                                                    <span>{{$product->description}}</span></div>
                                                <div class="product-m__wishlist">

                                                    <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                              
                                
                            </div>
                        </div>
                        <div class="u-s-p-y-60">

                            <!--====== Pagination ======-->
                            <ul class="shop-p__pagination">
                                <li class="is-active">

                                    <a href="shop-grid-full.html">1</a></li>
                                <li>

                                    <a href="shop-grid-full.html">2</a></li>
                                <li>

                                    <a href="shop-grid-full.html">3</a></li>
                                <li>

                                    <a href="shop-grid-full.html">4</a></li>
                                <li>

                                    <a class="fas fa-angle-right" href="shop-grid-full.html"></a></li>
                            </ul>
                            <!--====== End - Pagination ======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!--====== End - Section 1 ======-->


   
</div>
@endsection
