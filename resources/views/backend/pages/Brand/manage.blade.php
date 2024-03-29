@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Manage All Brand</h4>
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Description</th>
                <th scope="col">Is Featured</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach ( $brands as $brand )
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>
                        @if(!is_null($brand->image))
                        <img src="{{ asset('Backend/img/brand') }}/{{$brand -> image}}" alt="" width="40">
                        @else
                        No Thumbanil
                        @endif
                    </td>
                    <td>{{$brand -> name}}</td>
                    <td>{{$brand -> slug}}</td>
                    <td>{{$brand -> description}}</td>
                    {{-- {{$brand -> is_featured}} --}}
                    <td>
                        @if ($brand -> is_featured == 1)
                            <span class="badge bg-success">Yes</span>
                        @else
                            <span class="badge bg-warning">No</span>
                        @endif
                    </td>
                    {{-- {{$brand -> status}} --}}
                    <td>
                        @if ($brand -> status == 1)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">InActive</span>
                        @endif
                    </td>
                    <td >
                        <a href="{{ route('brand.edit',$brand->id) }}"><i class="fa-solid fa-pen-to-square text-success me-2"></i></a>
    
                        <a href="{{ route('brand.delete',$brand->id) }}"><i class="fa-solid fa-trash text-danger ms-2"></i></a>
                    </td>
                  </tr>

                  @php $i++; @endphp
                @endforeach
              
              
            </tbody>
          </table>
    </div>
</div>

@endsection
