@extends('layout.app')

@section('main')
   <main role="main">
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">     
            @foreach($heroes as $hero)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <a href="{{route('hero.show', $hero->id)}}">

                        
                    <img class="card-img-top img-fluid" src="{{asset($hero->name)}}" alt="Card image cap"> 
                      
                </a>
                <div class="card-body">
                  <p class="font-weight-bold card-text"><a href="{{route('hero.show', $hero->id)}}">{{$hero->nick}}</a></p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
           {{ $heroes->links() }}
        </div>
      </div>
    </main>
    @endsection