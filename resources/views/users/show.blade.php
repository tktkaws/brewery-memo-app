@extends('app')

@section('title', $user->name)

@section('content')
@include('nav')
<div class="container">
    @include('users.user')
    @include('users.tabs', ['hasBreweries' => true, 'hasLikes' => false])
    @foreach($breweries as $brewery)
    @include('breweries.card')
    @endforeach
</div>
@endsection