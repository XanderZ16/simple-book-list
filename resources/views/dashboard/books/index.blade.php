@extends('layouts.main')

@section('title', 'Buku | Dashboard')

@section('content')
    <div class="w-screen min-h-screen pt-20">
        <table class="w-full max-w-xl mx-auto rounded-md shadow-md overflow-hidden">
            <thead class="bg-green-500">
                <tr class="*:text-start *:px-6 *:py-2">
                    <th>No</th>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (count($books) != 0)
                    @foreach ($books as $book)
                        <tr class="*:px-6 *:py-2">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book->book_id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>
                                <div class="flex">
                                    <a href="/dashboard/books/{{ $book->id }}/edit">Edit</a>
                                    <form action="/dashboard/books/{{ $book->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-red-500 hover:text-red-600">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada buku</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
