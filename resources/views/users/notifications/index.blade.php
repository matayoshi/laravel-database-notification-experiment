@extends('layouts.default')

@section('content')

<p>
    id: {{ $user->id }}<br>
    name: {{ $user->name }}<br>
    email: {{ $user->email }}<br>
</p>
<p>
    <a href="/users/{{ $user->id }}">user page</a>
</p>
<p>
    <a href="/">home</a>
</p>

<p>
    <form action="/users/{{ $user->id }}/notifications" method="post">
        @csrf
        <button type="submit">create notifications(create model)</button>
    </form>
</p>
<p>
    <form action="/users/{{ $user->id }}/notify" method="post">
        @csrf
        <button type="submit">create notifications(notify UserNotification)</button>
    </form>
</p>
<p>
    <form action="/users/{{ $user->id }}/notifications" method="post">
        @csrf
        @method('delete')
        <button type="submit">truncate notifications</button>
    </form>
</p>
<p>
    <ul>
        @foreach ($notifications as $notification)
            <li>{{ $notification->id }}: {{ $notification->title }}<br>{{ $notification->body }}</li>
        @endforeach
    </ul>
</p>

@endsection
