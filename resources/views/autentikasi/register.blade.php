@extends('layouts.main')

@section('title', 'Buku | Register')


@section('content')

    <style>
        input:focus+ label,
        input:active+ label,
        input:not(:placeholder-shown)+ label  {
            font-size: .8rem;
            top: -0.6rem;
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

    <div class="flex">
        <div class="flex flex-col w-[45%]">
            <a href="/" class="w-fit">
                <img src="/logo/brand.png" alt="Brand Logo" class="w-[150px] p-4">
            </a>
            <form action="/register" method="post"
                class="self-center flex flex-col items-center w-[95%] max-w-[450px] my-auto py-2 px-5 border-2 border-green-600 rounded-md">
                @csrf
                <h2 class="font-semibold text-2xl">Daftar Akun</h2>
                <hr class="w-full my-2 border-green-500">

                <div class="relative flex flex-col justify-center mt-4 mb-6 w-full">
                    <input type="text" id="name" name="name" placeholder="" autofocus
                        class="peer w-full px-3 pt-3 pb-2 rounded-md border border-gray-300">
                    <label for="name"
                        class="absolute top-[0.7rem] left-0 ml-3 leading-tight text-md duration-200">Name</label>
                    @error('name')
                        <h6 class="text-red-500">{{ $message }}</h6>
                    @enderror
                </div>

                <div class="relative flex flex-col justify-center mb-6 w-full">
                    <input type="email" id="email" name="email" placeholder="" autofocus
                        class="peer w-full px-3 pt-3 pb-2 rounded-md border border-gray-300">
                    <label for="email"
                        class="absolute top-[0.7rem] left-0 ml-3 leading-tight text-md duration-200">Email</label>
                    @error('email')
                        <h6 class="text-red-500">{{ $message }}</h6>
                    @enderror
                </div>

                <div class="relative flex flex-col justify-center mb-6 w-full">
                    <input type="password" id="password" name="password" placeholder=""
                        class="peer w-full px-3 pt-3 pb-2 rounded-md border border-gray-300">
                    <label for="password"
                        class="absolute top-[0.7rem] left-0 ml-3 leading-tight text-md duration-200">Password</label>
                    @error('password')
                        <h6 class="text-red-500">{{ $message }}</h6>
                    @enderror
                </div>

                <div class="relative flex flex-col justify-center mb-6 w-full">
                    <input type="password" id="password-confirmation" name="password_confirmation" placeholder=""
                        class="peer w-full px-3 pt-3 pb-2 rounded-md border border-gray-300">
                    <label for="password-confirmation"
                        class="absolute top-[0.7rem] left-0 ml-3 leading-tight text-md duration-200">Konfirmasi
                        Password</label>
                    @error('password-confirmation')
                        <h6 class="text-red-500">{{ $message }}</h6>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full py-2 rounded-md bg-green-500 font-semibold text-xl text-white hover:bg-green-600 active:bg-green-700">Daftar</button>
                <p class="mt-4">Sudah punya akun? <a href="/login" class="text-green-500 hover:underline">Login</a></p>
            </form>
        </div>
        <div class="w-[55%]">
            <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 10% 100%);" class="h-screen">
        </div>
    </div>

@endsection
