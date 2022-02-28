@extends('layouts.main')

@section('content')
<div class="flex flex-col gap-y-9">
    @foreach ($blogs as $blog)
    <div class="flex flex-col gap-y-2">
        <a href="/blogs/{{ strtolower(join("-",explode(" ",$blog["title"]))) }}" class="text-lg text-blue-500 font-medium">{{ $blog["title"] }}</a>
        <p>by: {{ $blog["by"] }}</p>
    </div>
    @endforeach
</div>
@endsection