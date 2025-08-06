@extends('layouts.app')
@section('content')
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
        <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td>{{ $banner->id }}</td>
                    <td><img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image" style="width: 100px; height: auto;"></td>
                    <td>
                        <form action="{{ route('banners.destroy', $banner->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </div>

@endsection
