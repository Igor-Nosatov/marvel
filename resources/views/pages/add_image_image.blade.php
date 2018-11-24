@extends('layout.app')

@section('main')
<div class="container-fluid mt-4 mb-7">
  <div class="row">
  <div class="col-md-12">


  @foreach
  <form action="{{route('image.save')}}" 
              method="post" enctype="multipart/form-data">  
               @csrf 
    <div class="d-flex flex-row">
         <div class="p-2">
         	<input type="hidden" name="hero_id">
            <div class="form-group">
              <label for="images">Image</label>
              <input type="file" class="form-control-file" name="images" id="images">
            </div>
         </div>
    </div>
    <div class="d-flex flex-row">
         <div class="p-2">
            <button type="submit" class="btn btn-success">Add</button>
         </div>
    </div>
    </form>







  </div>
 </div>
</div>
@endsection
