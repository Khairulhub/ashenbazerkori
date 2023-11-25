@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Manage All Division</h4>
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
               
                <th scope="col">Division Name</th>
                <th scope="col">Division Priority</th>
                
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach ( $divisions as $division )
                <tr>
                    <th scope="row">{{$i}}</th>
                 
                    <td>{{$division -> name}}</td>
                    <td>{{$division -> priority}}</td>
                    
                    <td >
                        <a href="{{ route('division.edit',$division->id) }}"><i class="fa-solid fa-pen-to-square text-success me-2"></i></a>
    
                        <a href="{{ route('division.delete',$division->id) }}"><i class="fa-solid fa-trash text-danger ms-2"></i></a>
                    </td>
                  </tr>

                  @php $i++; @endphp
                @endforeach
              
              
            </tbody>
          </table>
    </div>
</div>

@endsection
