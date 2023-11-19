@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Update Information of Product</h4>
        </div>

        <div>
            <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            {{-- product title --}}
                            <div class="form-group mb-2">
                                <label for="name" class="fw-bold">Product Title</label>
                                <input type="text" id="name" name="title" value="{{$product->title}}" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="regular_price" class="fw-bold">Regular Price</label>
                                <input type="number" id="regular_price" name="regular_price"  value="{{$product->regular_price}}"class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="offer_price" class="fw-bold">Offer Price</label>
                                <input type="text" id="offer_price" name="offer_price" value="{{$product->offer_price}}" class="form-control">
                            </div>

                            <div class="form-group mb-2">
                                <label for="tags" class="fw-bold"> Tags</label>
                                <input type="text" id="tags" name="tags" value="{{$product->tags}}" class="form-control">
                            </div>

                            <div class="form-group mb-2">
                                <label for="quantity" class="fw-bold">Product Quantity</label>
                                <input type="number" id="quantity" name="quantity" value="{{$product->quantity}}" class="form-control">
                            </div>

                            <div class="form-group mb-2">
                                <label for="sku_code" class="fw-bold"> SKU code</label>
                                <input type="text" id="sku_code" name="sku_code" value="{{$product->sku_code}}" class="form-control">
                            </div>
                            


                        </div>

                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <label for="featured" class="fw-bold"> Featured</label>
                                <select name="featured_item" id="featured"  class="form-select">
            
                                    <option selected> Please select the featured status</option>
                                    <option value="1" @if($product->featured_item==1) selected @endif> Yes Featured</option>
                                    <option value="0" @if($product->featured_item==0) selected @endif> Not Featured</option>
                                   
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="category_id" class="fw-bold"> Product Category</label>
                                <select name="category_id" id="category_id"  class="form-select">
            
                                    <option selected> Please select the Product Category </option>
                                    {{-- show all the category  --}}
                                    {{-- @foreach ($categories as $category )
                                        
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach --}}


                                    {{-- show category as parent and child  --}}
                                    @foreach (App\Models\Backend\Category::orderBy('name','asc')->where('is_parent', 0)->get() as $parentcategory)

                                        <option value="{{$parentcategory->id}}"  
                                            @if ($parentcategory->is_parent == 0 && $product->category_id == $parentcategory->id)
                                            selected
                                            @endif>{{$parentcategory->name}}</option>

                                        @foreach (App\Models\Backend\Category::orderBy('name','asc')->where('is_parent', $parentcategory->id)->get() as $childcategory)

                                        <option value="{{$childcategory->id}}"
                                            @if ($product->category_id == $childcategory->id)
                                            selected
                                            @endif>--{{$childcategory->name}}</option>
                                    @endforeach
                                    @endforeach
                                    
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="brand_id" class="fw-bold"> Product Brand</label>
                                <select name="brand_id" id="brand_id"  class="form-select">
            
                                    <option selected> Please select the Product Brand </option>
                                    @foreach ($brands as $brand )
                                        
                                    <option value="{{$brand->id}}"
                                        @if($brand->id== $product->brand_id)
                                        selected
                                        @endif
                                        >{{$brand->name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="product_type" class="fw-bold"> Product Type</label>
                                <select name="product_type" id="product_type"  class="form-select">
            
                                    <option selected> Please select the Product Type </option>
                                    <option value="1"@if($product->product_type==1) selected @endif> New</option>
                                    <option value="0" @if($product->product_type==0) selected @endif> Pre-own</option>
                                    
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="status" class="fw-bold">Status</label>
                                <select name="status" id="status"  class="form-select">

                                    <option selected> Please select the  status</option>
                                    <option value="1"@if($product->status==1) selected @endif> Active</option>
                                    <option value="0"@if($product->status==0) selected @endif> InActive</option>
                                </select>
                            </div>

                           
                        


                        </div>

                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <label for="short_description" class="fw-bold">Product Short Description</label>
                                <textarea type="text" id="short_description" name="short_describtion"  rows="3" class="form-control">{{$product->short_describtion}} </textarea>
                            </div>

                            <div class="form-group mb-2">
                                <label for="description" class="fw-bold">Product Long Description</label>
                                <textarea type="text" id="description" name="description"   rows="3" class="form-control"> {{$product->describtion}} </textarea>
                            </div>

                           

                            <div class="form-group mb-3">
                                <label for="image" class="fw-bold">Product Image </label><br>
            
                                @if(!is_null($product->image))
                                <img src="{{ asset('Backend/img/product') }}/{{$product -> image}}" alt="" width="40">
                                @else
                                No Thumbanil
                                @endif
                                <br> <br>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                        </div>

                    </div>
                </div>

              

            
               

                


             


                <div class="form-group">
                    <input type="submit" name="updateproduct" value="Save Changes" class="btn btn-primary">
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
