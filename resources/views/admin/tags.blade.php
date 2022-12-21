@extends('admin/a-nav')
@section('admin/a-content')
    <div class="flex m-6 gap-4">
        <div class="flex flex-col gap-4">
            @foreach($tags as $tag)
                <div class="border border-neutral-400 flex gap-4 rounded shadow p-2 bg-neutral-300">
                    <div>{{ $tag->id }}</div>
                    <div>{{ $tag->identifier }}</div>
                    <input value="{{ $tag->content }}" class="bg-neutral-50 border border-neutral-400 rounded w-[50em]">
                </div>
            @endforeach
        </div>
    </div>
@stop
