@extends('layouts.app')

@section('content')
    <div class="container">
    <h2 class="text-center">All Girls</h2>
    <div class="row">
    {{--@if($girls > 0)--}}

        @foreach($girls as $girl)
                <div class="card col-sm-3" style="width: 20rem;">
                    <img src="/storage/{{$girl->avatar}}" alt="girls avatar" class="card image top" height="180">
                    <h3 class="text-left">{{$girl->performerProfile->nickname}}</h3>
                    <p class="text-left">{{$girl->performerProfile->description}}</p>
            <a href="/profile/{{$girl->performerProfile->nickname}}" class="btn btn-primary">View Profile</a>

                </div>

        @endforeach


    {{--@endif--}}
    </div>
    {{$girls->links()}}
    </div>

@endsection