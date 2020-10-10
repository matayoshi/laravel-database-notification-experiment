@extends('layouts.default')

@section('content')

<p>
    id: {{ $admin->id }}<br>
    name: {{ $admin->name }}<br>
    email: {{ $admin->email }}<br>
</p>
<p>
    <a href="/admins/{{ $admin->id }}/notifications">notifications</a>
</p>
<p>
    <a href="/">home</a>
</p>

@endsection
