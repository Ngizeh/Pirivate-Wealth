@extends('layouts.app')

@section('content')

    <main class="pri-pad">  
        <div class="container"> 
              <form method="post" class="property-submit" action="" >
                 @include('form_partials.media')
              </form>
        </div> 
    </main>

@endsection
