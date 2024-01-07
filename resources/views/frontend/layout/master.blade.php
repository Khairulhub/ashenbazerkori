@extends('frontend.frontend')

@section('khairul')

    
<div>

    {{-- carousel  --}}
    {{-- @dd($sliders) --}}
   {{-- carousel  --}}
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($sliders as $key => $slider)
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach ($sliders as $key => $slider)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="5000">
                <img src="{{ asset('Backend/img/slider/' . $slider->image) }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $slider->sub_title }}</h5>
                    <h1>{{ $slider->title }}</h1>
                    <p>{{ $slider->description }}</p>
                    <button type="button" class="btn btn-primary"><a href="{{ $slider->button_url }}" class="text-decoration-none text-white">{{ $slider->button_text }}</a></button>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    









    

 <!-- Start Product Area -->
 <div class="product-area section">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="section-title">
                         <h2>Trending Item</h2>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <div class="product-info">
                         <div class="nav-main">
                             <!-- Tab Nav -->
                             <ul class="nav nav-tabs" id="myTab" role="tablist">
                                 <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#all" role="tab">All</a></li>


                                 @foreach ( App\Models\Backend\Category::orderBy('name', 'asc')->where('featured',1)->get() as $featured )

                                 <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#{{$featured->slug}}" role="tab">{{$featured->name}}</a></li>

                                 @endforeach

                                 
                             </ul>
                             <!--/ End Tab Nav -->
                         </div>

                         <div class="tab-content" id="myTabContent">
                             <!-- Start Single Tab -->
                             <div class="tab-pane fade show active" id="all" role="tabpanel">
                                 <div class="tab-single">
                                     <div class="row">
                                        @foreach ($hotProducts as $value )
                                         <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('product.show', $value-> slug)}}">
                                                        @if (!is_null($value->image))
                                                        <img class="img-fluid w-100" style="height: 300px !important; " src="{{asset('Backend/img/product/'.$value->image)}}" alt="#">
                                                        @else 
                                                            <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">   
                                                        @endif
                                                        
                        
                                                        @if ($value->featured_item==1)
                                                        <span class="sale">Sale</span>
                        
                                                            @else
                        
                        
                                                            @if ($value-> product_type == 1)
                                                            <span class="new">New</span>
                                                            @else 
                                                            <span class="out-of-stock">Hot</span>
                                                            @endif
                                                        @endif
                        
                        
                                                      
                                                    </a>
                                                    <div class="button-head d-flex justify-content-between ">
                                                        <div class="product-action pe-2">
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2 ps-2">
                                                            <form action="{{route('cart.store')}}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{$value->id}}">
                                                                <input type="hidden" name="product_quantity" value="1">
                                                                <button title="Add to cart" class="addtocart" style="background:transparent; border:none;"><i class="ti-shopping-cart"></i><span>Add to cart</span></button>
                                                            </form>
                                                            {{-- <a title="Add to cart" href="#">Add to cart</a> --}}

                                                        </div>
                                                    </div>
                                                </div>
                        
                        
                                                <div class="product-content">
                                                    <h3><a href="{{route('product.show', $value-> slug)}}">{{$value->title}}</a></h3>
                                                    <div class="product-price">
                                                        @if (!is_null($value->offer_price))
                                                        <span >৳{{$value->offer_price}} BDT</span>
                                                        <span class="old">৳{{$value->regular_price}} BDT</span>
                                                        @else
                                                        <span >৳{{$value->regular_price}} BDT</span>
                                                        @endif
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                         @endforeach
                                     </div>
                                 </div>
                             </div>
                             <!--/ End Single Tab -->

                             <!-- Start Single Tab -->
                             @foreach ( App\Models\Backend\Category::orderBy('name', 'asc')->where('featured',1)->get() as $featured )

                             <div class="tab-pane fade" id="{{$featured->slug}}" role="tabpanel">
                                 <div class="tab-single">
                                     <div class="row">
                                        @foreach (App\Models\Backend\Product::orderBy('title','asc')->where('category_id',$featured->id)->get() as $value )
                                         <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('product.show', $value-> slug)}}">
                                                        @if (!is_null($value->image))
                                                        <img class="img-fluid w-100" style="height: 300px !important; " src="{{asset('Backend/img/product/'.$value->image)}}" alt="#">
                                                        @else 
                                                            <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">   
                                                        @endif
                                                        
                         
                                                        @if ($value->featured_item == 1)
                                                        <span class="sale">Sale</span>
                         
                                                            @else
                         
                         
                                                            @if ($value-> product_type == 1)
                                                            <span class="new">New  </span>
                                                            @else 
                                                            <span class="out-of-stock ">old</span>
                                                            @endif
                                                        @endif
                         
                         
                                                      
                                                    </a>
                                                    <div class="button-head d-flex justify-content-between">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                         
                         
                                                <div class="product-content">
                                                    <h3><a href="{{route('product.show', $value-> slug)}}">{{$value->title}}</a></h3>
                                                    <div class="product-price">
                                                        @if (!is_null($value->offer_price))
                                                        <span >৳{{$value->offer_price}} BDT</span>
                                                        <span class="old">৳{{$value->regular_price}} BDT</span>
                                                        @else
                                                        <span >৳{{$value->regular_price}} BDT</span>
                                                        @endif
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                         </div>

                                         @endforeach
                                        
                                     </div>
                                 </div>
                             </div>
                             @endforeach
                             <!--/ End Single Tab -->


                            
                         
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 </div>
 <!-- End Product Area -->


 <!-- Start featured item  -->
 <div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Featured Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{--   --}}
                <div class="owl-carousel popular-slider"> 
                    @foreach($featuredProducts as $value)

                      <!-- Start Single Product -->
                      
                   <div class="single-product">
                       <div class="product-img">
                           <a href="{{route('product.show', $value-> slug)}}">
                               @if (!is_null($value->image))
                               <img class="img-fluid w-100" style="height: 300px !important; " src="{{asset('Backend/img/product/'.$value->image)}}" alt="#">
                               @else 
                                   <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">   
                               @endif
                               

                               @if ($value->featured_item == 1)
                               <span class="sale">Sale</span>

                                   @else


                                   @if ($value-> product_type == 1)
                                   <span class="new">New  </span>
                                   @else 
                                   <span class="out-of-stock ">old</span>
                                   @endif
                               @endif


                             
                           </a>
                           <div class="button-head d-flex justify-content-between ">
                            <div class="product-action pe-2">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                            </div>
                            <div class="product-action-2 ps-2">
                                <form action="{{route('cart.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$value->id}}">
                                    <input type="hidden" name="product_quantity" value="1">
                                    <button title="Add to cart" class="addtocart" style="background:transparent; border:none;"><i class="ti-shopping-cart"></i><span>Add to cart</span></button>
                                </form>
                                {{-- <a title="Add to cart" href="#">Add to cart</a> --}}

                            </div>
                        </div>
                       </div>


                       <div class="product-content">
                           <h3><a href="{{route('product.show', $value-> slug)}}">{{$value->title}}</a></h3>
                           <div class="product-price">
                               @if (!is_null($value->offer_price))
                               <span >৳{{$value->offer_price}} BDT</span>
                               <span class="old">৳{{$value->regular_price}} BDT</span>
                               @else
                               <span >৳{{$value->regular_price}} BDT</span>
                               @endif
                               
                               
                           </div>
                       </div>
                   </div>
                   <!-- End Single Product -->
                    @endforeach
                   
                   
                 



                </div>
            </div>
        </div>
    </div>
</div>
<!-- End featured item  Area -->


 <!-- Start Midium Banner  -->
 <div class="midium-banner">
     <div class="container">
         <div class="row">
             <!-- Single Banner  -->
             <div class="col-lg-6 col-md-6 col-12">
                 <div class="single-banner">
                     <img src="https://via.placeholder.com/600x370" alt="#">
                     <div class="content">
                         <p>Man's Collectons</p>
                         <h3>Man's items <br>Up to<span> 50%</span></h3>
                         <a href="#">Shop Now</a>
                     </div>
                 </div>
             </div>
             <!-- /End Single Banner  -->
             <!-- Single Banner  -->
             <div class="col-lg-6 col-md-6 col-12">
                 <div class="single-banner">
                     <img src="https://via.placeholder.com/600x370" alt="#">
                     <div class="content">
                         <p>shoes women</p>
                         <h3>mid season <br> up to <span>70%</span></h3>
                         <a href="#" class="btn">Shop Now</a>
                     </div>
                 </div>
             </div>
             <!-- /End Single Banner  -->
         </div>
     </div>
 </div>
 <!-- End Midium Banner -->



 <!-- Start Most Popular -->
 <div class="product-area most-popular section">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="section-title">
                     <h2>Hot Item</h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-12">
                 <div class="owl-carousel popular-slider">
                     @foreach($hotProducts as $value)

                       <!-- Start Single Product -->
                       
                    <div class="single-product">
                        <div class="product-img">
                            <a href="{{route('product.show', $value-> slug)}}">
                                @if (!is_null($value->image))
                                <img class="img-fluid w-100" style="height: 300px !important; " src="{{asset('Backend/img/product/'.$value->image)}}" alt="#">
                                @else 
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">   
                                @endif
                                

                                @if ($value->featured_item==1)
                                <span class="sale">Sale</span>

                                    @else


                                    @if ($value-> product_type == 1)
                                    <span class="new">New</span>
                                    @else 
                                    <span class="out-of-stock">Hot</span>
                                    @endif
                                @endif


                              
                            </a>
                            <div class="button-head d-flex justify-content-between ">
                                <div class="product-action pe-2">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                </div>
                                <div class="product-action-2 ps-2">
                                    <form action="{{route('cart.store')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$value->id}}">
                                        <input type="hidden" name="product_quantity" value="1">
                                        <button title="Add to cart" class="addtocart" style="background:transparent; border:none;"><i class="ti-shopping-cart"></i><span>Add to cart</span></button>
                                    </form>
                                    {{-- <a title="Add to cart" href="#">Add to cart</a> --}}

                                </div>
                            </div>
                        </div>


                        <div class="product-content">
                            <h3><a href="{{route('product.show', $value-> slug)}}">{{$value->title}}</a></h3>
                            <div class="product-price">
                                @if (!is_null($value->offer_price))
                                <span >৳{{$value->offer_price}} BDT</span>
                                <span class="old">৳{{$value->regular_price}} BDT</span>
                                @else
                                <span >৳{{$value->regular_price}} BDT</span>
                                @endif
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                     @endforeach
                    
                    
                  


 
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Most Popular Area -->




 <div class="section free-version-banner">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-md-8 offset-md-2 col-xs-12">
                 <div class="section-title mb-60">
                     <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Eshop Free Lite version</span>
                     <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Currently You are using free<br> lite Version of Eshop.</h2>
                     <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Please, purchase full version of the template to get all pages,<br> features and commercial license.</p>

                     <div class="button">
                         <a href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/" target="_blank" rel="nofollow" class="btn wow fadeInUp" data-wow-delay=".8s">Purchase Now</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Start Shop Home List  -->
 <div class="shop-home-list section">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-6 col-12">
                 <div class="row">
                     <div class="col-12">
                         <div class="shop-section-title">
                             <h1>On sale</h1>
                         </div>
                     </div>
                 </div>
                 <!-- Start Single List  -->
                 <div class="single-list">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-12">
                             <div class="list-image overlay">
                                 <img src="https://via.placeholder.com/115x140" alt="#">
                                 <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-12 no-padding">
                             <div class="content">
                                 <h4 class="title"><a href="#">Licity jelly leg flat Sandals</a></h4>
                                 <p class="price with-discount">$59</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End Single List  -->
                 <!-- Start Single List  -->
                 <div class="single-list">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-12">
                             <div class="list-image overlay">
                                 <img src="https://via.placeholder.com/115x140" alt="#">
                                 <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-12 no-padding">
                             <div class="content">
                                 <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                 <p class="price with-discount">$44</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End Single List  -->
                 <!-- Start Single List  -->
                 <div class="single-list">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-12">
                             <div class="list-image overlay">
                                 <img src="https://via.placeholder.com/115x140" alt="#">
                                 <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-12 no-padding">
                             <div class="content">
                                 <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                 <p class="price with-discount">$89</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End Single List  -->
             </div>
             <div class="col-lg-4 col-md-6 col-12">
                 <div class="row">
                     <div class="col-12">
                         <div class="shop-section-title">
                             <h1>Best Seller</h1>
                         </div>
                     </div>
                 </div>
                 <!-- Start Single List  -->
                 <div class="single-list">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-12">
                             <div class="list-image overlay">
                                 <img src="https://via.placeholder.com/115x140" alt="#">
                                 <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-12 no-padding">
                             <div class="content">
                                 <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                 <p class="price with-discount">$65</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End Single List  -->
                 <!-- Start Single List  -->
                 <div class="single-list">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-12">
                             <div class="list-image overlay">
                                 <img src="https://via.placeholder.com/115x140" alt="#">
                                 <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-12 no-padding">
                             <div class="content">
                                 <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                 <p class="price with-discount">$33</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End Single List  -->
                 <!-- Start Single List  -->
                 <div class="single-list">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-12">
                             <div class="list-image overlay">
                                 <img src="https://via.placeholder.com/115x140" alt="#">
                                 <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-12 no-padding">
                             <div class="content">
                                 <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                 <p class="price with-discount">$77</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End Single List  -->
             </div>
             <div class="col-lg-4 col-md-6 col-12">
                 <div class="row">
                     <div class="col-12">
                         <div class="shop-section-title">
                             <h1>Top viewed</h1>
                         </div>
                     </div>
                 </div>
                 <!-- Start Single List  -->
                 <div class="single-list">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-12">
                             <div class="list-image overlay">
                                 <img src="https://via.placeholder.com/115x140" alt="#">
                                 <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-12 no-padding">
                             <div class="content">
                                 <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                 <p class="price with-discount">$22</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End Single List  -->
                 <!-- Start Single List  -->
                 <div class="single-list">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-12">
                             <div class="list-image overlay">
                                 <img src="https://via.placeholder.com/115x140" alt="#">
                                 <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-12 no-padding">
                             <div class="content">
                                 <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                 <p class="price with-discount">$35</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End Single List  -->
                 <!-- Start Single List  -->
                 <div class="single-list">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-12">
                             <div class="list-image overlay">
                                 <img src="https://via.placeholder.com/115x140" alt="#">
                                 <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-12 no-padding">
                             <div class="content">
                                 <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                 <p class="price with-discount">$99</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End Single List  -->
             </div>
         </div>
     </div>
 </div>
 <!-- End Shop Home List  -->

 <!-- Start Shop Blog  -->
 <div class="shop-blog section">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="section-title">
                     <h2>From Our Blog</h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-4 col-md-6 col-12">
                 <!-- Start Single Blog  -->
                 <div class="shop-single-blog">
                     <img src="https://via.placeholder.com/370x300" alt="#">
                     <div class="content">
                         <p class="date">22 July , 2020. Monday</p>
                         <a href="#" class="title">Sed adipiscing ornare.</a>
                         <a href="#" class="more-btn">Continue Reading</a>
                     </div>
                 </div>
                 <!-- End Single Blog  -->
             </div>
             <div class="col-lg-4 col-md-6 col-12">
                 <!-- Start Single Blog  -->
                 <div class="shop-single-blog">
                     <img src="https://via.placeholder.com/370x300" alt="#">
                     <div class="content">
                         <p class="date">22 July, 2020. Monday</p>
                         <a href="#" class="title">Man’s Fashion Winter Sale</a>
                         <a href="#" class="more-btn">Continue Reading</a>
                     </div>
                 </div>
                 <!-- End Single Blog  -->
             </div>
             <div class="col-lg-4 col-md-6 col-12">
                 <!-- Start Single Blog  -->
                 <div class="shop-single-blog">
                     <img src="https://via.placeholder.com/370x300" alt="#">
                     <div class="content">
                         <p class="date">22 July, 2020. Monday</p>
                         <a href="#" class="title">Women Fashion Festive</a>
                         <a href="#" class="more-btn">Continue Reading</a>
                     </div>
                 </div>
                 <!-- End Single Blog  -->
             </div>
         </div>
     </div>
 </div>
 <!-- End Shop Blog  -->

 <!-- Start Shop Services Area -->
 <div class="shop-services section home">
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-6 col-12">
                 <!-- Start Single Service -->
                 <div class="single-service">
                     <i class="ti-rocket"></i>
                     <h4>Free shiping</h4>
                     <p>Orders over $100</p>
                 </div>
                 <!-- End Single Service -->
             </div>
             <div class="col-lg-3 col-md-6 col-12">
                 <!-- Start Single Service -->
                 <div class="single-service">
                     <i class="ti-reload"></i>
                     <h4>Free Return</h4>
                     <p>Within 30 days returns</p>
                 </div>
                 <!-- End Single Service -->
             </div>
             <div class="col-lg-3 col-md-6 col-12">
                 <!-- Start Single Service -->
                 <div class="single-service">
                     <i class="ti-lock"></i>
                     <h4>Sucure Payment</h4>
                     <p>100% secure payment</p>
                 </div>
                 <!-- End Single Service -->
             </div>
             <div class="col-lg-3 col-md-6 col-12">
                 <!-- Start Single Service -->
                 <div class="single-service">
                     <i class="ti-tag"></i>
                     <h4>Best Peice</h4>
                     <p>Guaranteed price</p>
                 </div>
                 <!-- End Single Service -->
             </div>
         </div>
     </div>
 </div>
 <!-- End Shop Services Area -->

 <!-- Start Shop Newsletter  -->
 <div class="shop-newsletter section">
     <div class="container">
         <div class="inner-top">
             <div class="row">
                 <div class="col-lg-8 offset-lg-2 col-12">
                     <!-- Start Newsletter Inner -->
                     <div class="inner">
                         <h4>Newsletter</h4>
                         <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                         <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                             <input name="EMAIL" placeholder="Your email address" required="" type="email">
                             <button class="btn">Subscribe</button>
                         </form>
                     </div>
                     <!-- End Newsletter Inner -->
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Shop Newsletter -->

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                 </div>
                 <div class="modal-body">
                     <div class="row no-gutters">
                         <div class="col-lg-6 offset-lg-3 col-12">
                             <h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;">Eshop Free Lite</h4>
                             <h3 style="font-size:30px;color:#333;">Currently You are using free lite Version of Eshop.<h3>
                             <p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">Please, purchase full version of the template to get all pages, features and commercial license</p>
                             <div class="button" style="margin-top:30px;">
                                 <a href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/" target="_blank" class="btn" style="color:#fff;">Buy Now!</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 </div>
 <!-- Modal end -->
</div>
@endsection