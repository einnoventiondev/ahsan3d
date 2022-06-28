@extends('layouts.auth.app')

@section('chat-content')

<div class="container">
    <chat-component :user="{{ auth()->user() }}"></chat-component>
</div>

@endsection 
