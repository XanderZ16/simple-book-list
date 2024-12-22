@extends('layouts.main')

{{-- @section('title', 'Buku | Daftar Akun') --}}

@section('content')

<div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection

