@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Create New Product</h4>
        </div>

        <div>
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            {{-- product title --}}
                            <div class="form-group mb-2">
                                <label for="name" class="fw-bold">Product Title</label>
                                <input type="text" id="name" name="title" placeholder="Enter The Product Title" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="regular_price" class="fw-bold">Regular Price</label>
                                <input type="number" id="regular_price" name="regular_price" placeholder="Enter The Product Regular price" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="offer_price" class="fw-bold">Offer Price</label>
                                <input type="text" id="offer_price" name="offer_price" placeholder="Enter The Product offer price" class="form-control">
                            </div>

                            <div class="form-group mb-2">
                                <label for="tags" class="fw-bold"> Tags</label>
                                <input type="text" id="tags" name="tags" placeholder="Enter The Product Tags" class="form-control">
                            </div>

                            <div class="form-group mb-2">
                                <label for="quantity" class="fw-bold">Product Quantity</label>
                                <input type="number" id="quantity" name="quantity" placeholder="Enter The Product Quantiy" class="form-control">
                            </div>

                            <div class="form-group mb-2">
                                <label for="sku_code" class="fw-bold"> SKU code</label>
                                <input type="text" id="sku_code" name="sku_code" placeholder="Enter The Product sku code " class="form-control">
                            </div>
                            


                        </div>

                        <div class="col-md-4">
                           

                          


                            <div class="form-group mb-2">
                                <label for="featured" class="fw-bold"> Featured</label>
                                <select name="featured_item" id="featured"  class="form-select">
            
                                    <option selected> Please select the featured status</option>
                                    <option value="1"> Yes Featured</option>
                                    <option value="0"> Not Featured</option>
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

                                        <option value="{{$parentcategory->id}}">{{$parentcategory->name}}</option>

                                        @foreach (App\Models\Backend\Category::orderBy('name','asc')->where('is_parent', $parentcategory->id)->get() as $childcategory)

                                        <option value="{{$childcategory->id}}">--{{$childcategory->name}}</option>
                                    @endforeach
                                    @endforeach
                                    
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="brand_id" class="fw-bold"> Product Brand</label>
                                <select name="brand_id" id="brand_id"  class="form-select">
            
                                    <option selected> Please select the Product Brand </option>
                                    @foreach ($brands as $brand )
                                        
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="product_type" class="fw-bold"> Product Type</label>
                                <select name="product_type" id="product_type"  class="form-select">
            
                                    <option selected> Please select the Product Type </option>
                                    <option value="1"> New</option>
                                    <option value="0"> Pre-own</option>
                                    
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="status" class="fw-bold">Status</label>
                                <select name="status" id="status"  class="form-select">

                                    <option selected> Please select the  status</option>
                                    <option value="1"> Active</option>
                                    <option value="0"> InActive</option>
                                </select>
                            </div>
                                        
                        


                        </div>



                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <label for="short_description" class="fw-bold">Product Short Description</label>
                                <textarea type="text" id="short_description" name="short_describtion" placeholder="Enter The Brand Description" rows="3" class="form-control"> </textarea>
                            </div>

                            <div class="form-group mb-2">
                                <label for="description" class="fw-bold">Product Short Description</label>
                                <textarea type="text" id="description" name="description" placeholder="Enter The Brand Description" rows="3" class="form-control"> </textarea>
                            </div>

                           

                            <div class="form-group mb-3">
                                <label for="image" class="fw-bold">Product Image </label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                        </div>


                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="submit" name="addproduct" value="Add New Product" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>

        </div>

    </div>
</div>

@endsection
