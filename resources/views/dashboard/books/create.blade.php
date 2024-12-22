@extends('layouts.main')

@section('title', 'Buku | Tambah')

@section('content')
    <style>
        input:focus+label,
        input:active+label,
        input:not(:placeholder-shown)+label {
            font-size: .8rem;
            top: -0.5rem;
            background-color: #fff;
            color: #22c55e;
            padding: 0 5px;
        }

        input:focus {
            border: 2px solid #22c55e;
            outline: none;
        }

        label {
            transition: all 0.2s;
            pointer-events: none;
        }
    </style>

    <div class="h-screen flex justify-center items-center">
        <div class="w-[95%] max-w-screen-sm p-4 border-2 border-green-600 rounded-md shadow-md">
            <h1 class="font-semibold text-3xl text-center">Tambah Buku</h1>
            <hr class="border-green-500 my-4">
            <form action="/dashboard/books" method="post" class="flex flex-col items-center px-6 *:w-[95%]">
                @csrf
                <div class="relative flex flex-col justify-center mt-4 mb-6">
                    <input type="text" id="book-id" name="book_id" placeholder="" autofocus value="{{ old('book_id') }}"
                        class="peer w-full px-3 pt-4 pb-3 rounded-md border border-gray-300">
                    <label for="book-id"
                        class="absolute top-[0.9rem] left-0 ml-3 leading-tight text-lg duration-200">ID buku</label>
                    @error('book_id')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative flex flex-col justify-center mt-4 mb-6">
                    <input type="text" id="title" name="title" placeholder="" autofocus value="{{ old('title') }}"
                        class="peer w-full px-3 pt-4 pb-3 rounded-md border border-gray-300">
                    <label for="title"
                        class="absolute top-[0.9rem] left-0 ml-3 leading-tight text-lg duration-200">Judul buku</label>
                    @error('title')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative flex flex-col justify-center mt-4 mb-6">
                    <input type="text" id="author" name="author" placeholder="" autofocus value="{{ old('author') }}"
                        class="peer w-full px-3 pt-4 pb-3 rounded-md border border-gray-300">
                    <label for="author"
                        class="absolute top-[0.9rem] left-0 ml-3 leading-tight text-lg duration-200">Penulis buku</label>
                    @error('author')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex w-full">
                    <button type="submit" class="ml-auto font-semibold text-xl text-white rounded-md px-4 py-2 bg-green-500 hover:bg-green-600 active:bg-green-700">
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
