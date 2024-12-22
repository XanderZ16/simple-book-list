@extends('layouts.main')

@section('title', 'Buku | Beranda')

@section('content')
    @include('partials.header')

    <div>
        <section>
            <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div class="relative h-64 rounded-lg sm:h-80 lg:order-last lg:h-full">
                        <img src="/images/hero.png" alt="Hero Image" class="absolute h-full w-full object-contain">
                    </div>

                    <div class="lg:py-24 flex flex-col">
                        @auth
                            <h1 class="py-3 text-3xl font-bold sm:text-5xl">Selamat Datang <span
                                    class="text-green-500">{{ auth()->user()->name }}</span></h1>
                            <a href="/dashboard/books"
                                class="order-last w-fit mt-8 rounded bg-green-500 px-8 py-3 text-sm font-semibold text-white transition hover:bg-green-600 focus:ring focus:ring-green-300">
                                Dashboard
                            </a>
                        @else
                            <div class="order-last">
                                <a href="/login"
                                    class="mt-8 inline-block rounded bg-green-500 px-12 py-3 text-sm font-semibold text-white transition hover:bg-green-600 focus:ring focus:ring-green-300">
                                    Login Sekarang
                                </a>
                            </div>
                        @endauth
                        <h2 class="text-3xl font-semibold mb-2 sm:text-4xl">Tempat menyimpan data buku</h2>

                        <p class="mt-4 text-gray-600">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
                            eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
                            quidem quam repellat.
                        </p>

                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
