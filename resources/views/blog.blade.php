@extends('layouts.main')

@section('content')
<div class="flex flex-col gap-y-9">
    <div class="flex flex-col gap-y-2">
        <h1 class="text-lg text-blue-500 font-medium">{{ $blog["title"] }}</h1>
        <p class="text-sm font-medium text-gray-700">by: {{ $blog["by"] }}</p>
        <p class="text-base ">{{ $blog["content"] }}</p>
    </div>
</div>
@endsection