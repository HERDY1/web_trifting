@extends('master.layout')

@section('content')
<div class="container mt-4 pt-5">
    <h1 class="mb-4">Hasil Pencarian</h1>

    @if($posts->isEmpty())
        <p>Tidak ada hasil untuk kata kunci <strong>{{ $query }}</strong>.</p>
    @else
        <p>Menampilkan hasil untuk <strong>{{ $query }}</strong>:</p>
        <div class="list-group">
            @foreach($posts as $post)
                <a href="{{ route('posts.show', $post->id) }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">{{ $post->title }}</h5>
                    <p class="mb-1">{{ Str::limit($post->content, 100) }}</p>
                    <small>Diposting pada {{ $post->created_at->format('d M Y') }}</small>
                </a>
            @endforeach
        </div>
    @endif
</div>
@endsection
