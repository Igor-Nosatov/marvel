@extends('layout.app')

@section('main')
<div class="container-fluid mt-4 mb-7">
<div class="row">
  <div class="col-md-3">
                 @if ($heroes->image_id === null)
                     You don't have image please add !

                 @else
  	<img class="img-fluid hero-image" src="{{asset($heroes->image->name)}}" alt="Card image cap">
                 @endif
  </div>
  <div class="col-md-9">
  	<div class="d-flex flex-column bd-highlight mb-3">
     <div class="p-2 bd-highlight">
     	<span class="font-weight-bold">Nick name:</span> {{$heroes->nick}}</div>
     <div class="p-2 bd-highlight">
     	<span class="font-weight-bold">Real name: </span>{{$heroes->real_name​}}</div>
     <div class="p-2 bd-highlight">
     	<span class="font-weight-bold">Description:</span> {{$heroes->origin_description​}}
     </div>
     <div class="p-2 bd-highlight">
     	<span class="font-weight-bold">Superpowers:</span>
     	{{$heroes->superpowers}}</div>
     <div class="p-2 bd-highlight">
     	<span class="font-weight-bold">Catch phrase:</span>
     	"{{$heroes->catch_phrase}}."</div>
   </div>
  </div>
</div>

<div class="row mb-5">
  <div class="col-md-1 mr-auto">
    <div class="d-flex flex-row">
      <div class="p-2">
           <button class="btn btn-warning"><a href="{{route('hero.edit', $heroes->id)}}">Update</a></button>
      </div>
      <div class=" pl-4 p-2">   
          <form action= "{{ route('hero.destroy', $heroes->id) }}" method= "post">
                  @csrf
                  {{ method_field('DELETE') }}
             <button type= "submit" class="btn  btn-danger">  
                 Delete
            </button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection