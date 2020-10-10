@extends('layouts.default')

@section('content')

<p>
    id: {{ $user->id }}<br>
    name: {{ $user->name }}<br>
    email: {{ $user->email }}<br>
</p>
<p>
    <a href="/users/{{ $user->id }}/notifications">notifications</a>
</p>
<p>
    <a href="/">home</a>
</p>

@endsection
