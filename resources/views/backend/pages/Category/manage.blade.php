@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Manage All Categories</h4>
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Description</th>
                <th scope="col">Is Parent</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach ( $categories as $category )
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>
                        @if(!is_null($category->image))
                        <img src="{{ asset('Backend/img/category') }}/{{$category -> image}}" alt="" width="40">
                        @else
                        No Thumbanil
                        @endif
                    </td>
                    <td>{{$category -> name}}</td>
                    <td>{{$category -> slug}}</td>
                    <td>{{$category -> description}}</td>
                    {{-- {{$brand -> is_featured}} --}}
                    <td>
                        @if ($category -> is_parent == 0)
                            <span class="badge bg-success">Primary Category</span>
                        @else
                            <span class="badge bg-warning">-/-</span>
                        @endif
                    </td>
                    {{-- {{$brand -> status}} --}}
                    <td>
                        @if ($category -> status == 1)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">InActive</span>
                        @endif
                    </td>
                    <td >
                        <a href="{{ route('category.edit',$category->id) }}"><i class="fa-solid fa-pen-to-square text-success me-2"></i></a>
    
                        <a href="{{ route('category.delete',$category->id) }}"><i class="fa-solid fa-trash text-danger ms-2"></i></a>
                    </td>
                  </tr>

                  @php $i++; @endphp
                @endforeach
              
              
            </tbody>
          </table>
    </div>
</div>

@endsection
