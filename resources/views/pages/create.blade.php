@extends('layout.app')

@section('main')
<div class="container-fluid mt-4 mb-7">
  <div class="row">
    <div class="col-md-6">
   <form action="{{route('hero.save')}}" method="post" >  
    @csrf 
    <div class="d-flex flex-row">
         <div class="p-2">
            <div class="form-group">
              <label for="nick_name​">Nick Name​</label>
              <input type="text" class="form-control" name="nick" id="nick_name​" placeholder="Nick Name​">
            </div>
         </div>
         <div class="p-2">
              <div class="form-group">
               <label for="real_name​">Real Name​</label>
               <input type="text" class="form-control" name="real_name​" id="real_name​" placeholder="Real Name​">
              </div>
         </div>
    </div>
    <div class="d-flex flex-row">
         <div class="p-2">
            <div class="form-group">
               <label for="origin_description​">Description</label>
               <textarea class="form-control" name="origin_description​" id="origin_description​" rows="3"></textarea>
            </div>
         </div>
         <div class="p-2">
            <div class="form-group">
              <label for="superpowers">Superpowers</label>
              <textarea class="form-control" name="superpowers" id="superpowers" rows="3">
              </textarea>
            </div>
         </div>
    </div>
    <div class="d-flex flex-row">
         <div class="p-2">
            <div class="form-group">
              <label for="catch_phrase">Catch Phrase</label>
              <input type="text" class="form-control" name="catch_phrase" id="catch_phrase" placeholder="Catch Phrase">
            </div>
         </div>
    </div>
    <div class="d-flex flex-row">
         <div class="p-2">
            <button type="submit" class="btn btn-success">Submit</button>
         </div>
    </div>
   </form>
  </div>
 </div>
</div>
@endsection
