@extends('master.layout')

@section('content')
<div class="container" style="padding-top: 100px;">
    <h1>Detail Kategori</h1>
    <p><strong>Nama:</strong> {{ $category->name }}</p>
    <p><strong>Slug:</strong> {{ $category->slug }}</p>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
