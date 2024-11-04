@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header">
            <h2 class="h4">Edit Pertanyaan</h2>
        </div>

        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.qnaguest.update', $qnaguest->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" value="{{ old('pertanyaan', $qnaguest->pertanyaan) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="jawaban">Jawaban</label>
                    <textarea class="form-control" id="jawaban" name="jawaban" rows="5" required>{{ old('jawaban', $qnaguest->jawaban) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Perbaharui Pertanyaan</button>
            </form>
        </div>
    </div>
</div>
@endsection
