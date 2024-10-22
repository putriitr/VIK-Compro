@extends('layouts.admin.master')

@section('content')
    <h1>Slider List</h1>
    <a href="{{ route('sliders.create') }}" class="btn btn-primary">Add Slider</a>
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Heading</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sliders as $slider)
                <tr>
                    <td><img src="{{ asset($slider->image) }}" alt="{{ $slider->heading }}" style="width: 100px;"></td>
                    <td>{{ $slider->heading }}</td>
                    <td>{{ $slider->description }}</td>
                    <td>
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
