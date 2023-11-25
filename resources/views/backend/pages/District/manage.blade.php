@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Manage All District</h4>
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
               
                <th scope="col">District Name</th>
                <th scope="col">Division Name</th>
                
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach ( $districts as $district )
                <tr>
                    <th scope="row">{{$i}}</th>
                   
                    <td>{{$district -> name}}</td>
                    <td>{{$district -> divisions -> name}}</td>
                    
                    <td >
                        <a href="{{ route('district.edit',$district->id) }}"><i class="fa-solid fa-pen-to-square text-success me-2"></i></a>
    
                        <a href="{{ route('district.delete',$district->id) }}"><i class="fa-solid fa-trash text-danger ms-2"></i></a>
                    </td>
                  </tr>

                  @php $i++; @endphp
                @endforeach
              
              
            </tbody>
          </table>
    </div>
</div>

@endsection
