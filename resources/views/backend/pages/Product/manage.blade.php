@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div class="d-flex justify-content-between">
            <h4 class=" mb-3">Manage All Categories</h4>

            <a href="{{route('product.create')}}" class="btn btn-primary">Create New Product</a>
        </div>
<hr>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Category</th>
                <th scope="col">Quantity</th>
                <th scope="col">Regular Price</th>
                <th scope="col">Offer Price</th>
                <th scope="col">Featured</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
                @foreach ( $products as $product )
              
                @if ($product->is_parent == 0)
                       
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <th scope="row">{{$product -> title}}</th>
                    <td>
                        @if(!is_null($product->image))
                        <img src="{{ asset('Backend/img/product') }}/{{$product -> image}}" alt="" width="40">
                        @else
                        No Thumbanil
                        @endif
                    </td>
                  
                    <td>{{$product -> category_id}}</td>
                    <td>{{$product -> quantity}}</td>
                    <td>{{$product -> regular_price}}</td>
                    <td>{{$product -> offer_price}}</td>
                 
                    <td>
                        @if ($product -> featured_item == 1)
                            <span class="badge bg-success">Yes Featured</span>
                        @else
                            <span class="badge bg-warning">Not Featured</span>
                        @endif
                    </td>
                   
                    <td>
                        @if ($product -> status == 1)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">InActive</span>
                        @endif
                    </td>
                    <td >
                        <a href="{{ route('product.edit',$product->id) }}"><i class="fa-solid fa-pen-to-square text-success me-2"></i></a>
    
                        <a href="{{ route('product.delete',$product->id) }}"><i class="fa-solid fa-trash text-danger ms-2"></i></a>
                    </td>
                </tr>
               


            @endif




                
            @endforeach
              
              
            </tbody>
          </table>
    </div>
</div>

@endsection
