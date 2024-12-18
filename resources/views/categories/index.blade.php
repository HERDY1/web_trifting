@extends('master.layout')

@section('content')
<div class="container" style="padding-top: 100px;">
    <h1>Daftar Kategori</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <!-- Tombol Show -->
                        <a href="{{ route('categories.show', $category) }}" class="btn btn-sm btn-primary">Show</a>
                        
                        <!-- Tombol Edit -->
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-warning">Edit</a>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
</div>
@endsection
