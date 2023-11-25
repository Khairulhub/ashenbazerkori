@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Manage All Slider</h4>
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Sub Title</th>
                <th scope="col">Description</th>
                <th scope="col">Button Text</th>
                <th scope="col">Button URL</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
                @foreach ( $sliders as $slider )
              
                @if ($slider->is_parent == 0)
                       
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>
                        @if(!is_null($slider->image))
                        <img src="{{ asset('Backend/img/slider') }}/{{$slider -> image}}" alt="" width="40">
                        @else
                        No Thumbanil
                        @endif
                    </td>
                    <td ><b>{{$slider -> title}}</b> </td>
                    <td>{{$slider -> sub_title}}</td>
                    <td>{{$slider -> description}}</td>
                    {{-- {{$brand -> is_featured}} --}}
                    <td>{{$slider -> button_text}}</td>
                    <td>{{$slider -> button_url}}</td>
                    {{-- {{$brand -> status}} --}}
                    <td >
                        <a href="{{ route('slider.edit',$slider->id) }}"><i class="fa-solid fa-pen-to-square text-success me-2"></i></a>
    
                        <a href="{{ route('slider.delete',$slider->id) }}"><i class="fa-solid fa-trash text-danger ms-2"></i></a>
                    </td>
                </tr>
               


            @endif




                
            @endforeach
              
              
            </tbody>
          </table>
    </div>
</div>

@endsection
