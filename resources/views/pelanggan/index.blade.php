@extends('layouts.app')

@section('content')
    <h2>Daftar Pelanggan</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggan as $p)
                <tr>
                    <td>{{ $p['id'] }}</td>
                    <td>{{ $p['nama'] }}</td>
                    <td>{{ $p['email'] }}</td>
                    <td>{{ $p['telepon'] }}</td>
                    <td>
                        <a href="{{ route('pelanggan.show', $p['id']) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('pelanggan.edit', $p['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pelanggan.destroy', $p['id']) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
