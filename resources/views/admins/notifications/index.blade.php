@extends('layouts.default')

@section('content')

<p>
    id: {{ $admin->id }}<br>
    name: {{ $admin->name }}<br>
    email: {{ $admin->email }}<br>
</p>
<p>
    <a href="/admins/{{ $admin->id }}">admin page</a>
</p>
<p>
    <a href="/">home</a>
</p>

<p>
    <form action="/admins/{{ $admin->id }}/notifications" method="post">
        @csrf
        <button type="submit">create notifications(create model)</button>
    </form>
</p>
<p>
    <form action="/admins/{{ $admin->id }}/notify" method="post">
        @csrf
        <button type="submit">create notifications(notify AdminNotification)</button>
    </form>
</p>
<p>
    <form action="/admins/{{ $admin->id }}/notifications" method="post">
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
