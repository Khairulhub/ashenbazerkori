@extends('frontend.layout.master')


@section('khairul')
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-4">
            <!-- Price Start -->
            <h5 class="  text-uppercase my-3 text-center"><span class="bg-secondary pr-3 ">Filter by price</span></h5>
            <div class="bg-light p-4 mb-30">
                <form>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" checked="" id="price-all">
                        <label class="custom-control-label" for="price-all">All Price</label>
                        <span class="badge border text-dark font-weight-normal text-dark">1000</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-1">
                        <label class="custom-control-label" for="price-1">$0 - $100</label>
                        <span class="badge border text-dark font-weight-normal text-dark">150</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-2">
                        <label class="custom-control-label" for="price-2">$100 - $200</label>
                        <span class="badge border text-dark font-weight-normal text-dark">295</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-3">
                        <label class="custom-control-label" for="price-3">$200 - $300</label>
                        <span class="badge border text-dark font-weight-normal text-dark">246</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-4">
                        <label class="custom-control-label" for="price-4">$300 - $400</label>
                        <span class="badge border text-dark font-weight-normal text-dark">145</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="price-5">
                        <label class="custom-control-label" for="price-5">$400 - $500</label>
                        <span class="badge border text-dark font-weight-normal text-dark">168</span>
                    </div>
                </form>
            </div>
            <!-- Price End -->
            
            <!-- Color Start -->
            <h5 class="  text-uppercase my-3 text-center"><span class="bg-secondary pr-3 ">Filter by color</span></h5>
            
            <div class="bg-light p-4 mb-30">
                <form>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" checked="" id="color-all">
                        <label class="custom-control-label" for="price-all">All Color</label>
                        <span class="badge border text-dark font-weight-normal">1000</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="color-1">
                        <label class="custom-control-label" for="color-1">Black</label>
                        <span class="badge border text-dark font-weight-normal">150</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="color-2">
                        <label class="custom-control-label" for="color-2">White</label>
                        <span class="badge border text-dark font-weight-normal">295</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="color-3">
                        <label class="custom-control-label" for="color-3">Red</label>
                        <span class="badge border text-dark font-weight-normal">246</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="color-4">
                        <label class="custom-control-label" for="color-4">Blue</label>
                        <span class="badge border text-dark font-weight-normal">145</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="color-5">
                        <label class="custom-control-label" for="color-5">Green</label>
                        <span class="badge border text-dark font-weight-normal">168</span>
                    </div>
                </form>
            </div>
            <!-- Color End -->

            <!-- Size Start -->
            <h5 class="  text-uppercase my-3 text-center"><span class="bg-secondary pr-3 ">Filter by size</span></h5>
           
            <div class="bg-light p-4 mb-30">
                <form>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" checked="" id="size-all">
                        <label class="custom-control-label" for="size-all">All Size</label>
                        <span class="badge border text-dark font-weight-normal">1000</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="size-1">
                        <label class="custom-control-label" for="size-1">XS</label>
                        <span class="badge border text-dark font-weight-normal">150</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="size-2">
                        <label class="custom-control-label" for="size-2">S</label>
                        <span class="badge border text-dark font-weight-normal">295</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="size-3">
                        <label class="custom-control-label" for="size-3">M</label>
                        <span class="badge border text-dark font-weight-normal">246</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="size-4">
                        <label class="custom-control-label" for="size-4">L</label>
                        <span class="badge border text-dark font-weight-normal">145</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="size-5">
                        <label class="custom-control-label" for="size-5">XL</label>
                        <span class="badge border text-dark font-weight-normal">168</span>
                    </div>
                </form>
            </div>
            <!-- Size End -->
        </div>
        <!-- Shop Sidebar End -->


        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-8">
            <div class="row pb-3">
                <div class="col-12 pb-1">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                            <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                        </div>


                        
                        <div class="ml-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                            <div class="btn-group ml-2">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">10</a>
                                    <a class="dropdown-item" href="#">20</a>
                                    <a class="dropdown-item" href="#">30</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @foreach ($allproducts as $value )
                    
              {{-- @dd($value) --}}
                <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                    {{-- <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            @if (!is_null($value->image))
                                <img class="img-fluid w-100" style="height: 300px;" src="{{asset('Backend/img/product/'.$value->image)}}" alt="">
                                
                            @endif
                           


                            <div class="allproduct-action">
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">{{$value->title}}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div> --}}
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
                                        {{-- <input type="hidden" name="product_quantity" value="1"> --}}
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






                <div class="col-12">
                    <div class="col-12">
                        <nav>
                            <ul class="pagination justify-content-center">
                                @if($allproducts->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $allproducts->previousPageUrl() }}">Previous</a></li>
                                @endif
                    
                                @foreach(range(1, $allproducts->lastPage()) as $page)
                                    @if($page == $allproducts->currentPage())
                                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $allproducts->url($page) }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach
                    
                                @if($allproducts->hasMorePages())
                                    <li class="page-item"><a class="page-link" href="{{ $allproducts->nextPageUrl() }}">Next</a></li>
                                @else
                                    <li class="page-item disabled"><span class="page-link">Next</span></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
@endsection




