@extends('layouts.app')

@section('content')

    <main class="pri-pad">  
        <div class="container"> 
            @include('property.create')
              <form method="post" class="property-submit" action="" >
                 @include('form_partials.location',[
                   'submitButton' => 'Create Locataion '
                 ])
              </form>
        </div> 
    </main>

@endsection
