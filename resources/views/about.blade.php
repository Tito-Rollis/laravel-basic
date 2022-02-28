@extends('layouts.main')
@section('content')
    <ul >
        <li>My name is: {{  $name }}</li>
        <li>I'm a {{ $as }}</li>
        <li><img src="{{ $image }}" alt="foto" width="100px"></li>
    </ul>
@endsection