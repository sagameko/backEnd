@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit">Logout</button>
    </form>
@endsection
