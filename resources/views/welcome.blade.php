@extends('layouts.default')

@section('content')

<h1>Database notification experiment</h1>

<p>
    users<br>
    <ul>
        @foreach ($users as $user)
            <li>
                <a href="/users/{{ $user->id }}">{{ $user->id }}: {{ $user->name }} {{ $user->email }}</a><br>
                <a href="/users/{{ $user->id }}/notifications">notifications</a><br>
            </li>
        @endforeach
    </ul>
</p>

<p>
    admins<br>
    <ul>
        @foreach ($admins as $admin)
            <li>
                <a href="/admins/{{ $admin->id }}">{{ $admin->id }}: {{ $admin->name }} {{ $admin->email }}</a><br>
                <a href="/admins/{{ $admin->id }}/notifications">notifications</a><br>
            </li>
        @endforeach
    </ul>
</p>

@endsection
