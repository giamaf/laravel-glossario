@extends('layouts.app')

@section('content')
    <h1>Edit Word</h1>
    <form action="{{ route('update', $word->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="name">Word:</label>
            <input type="text" name="name" value="{{ $word->name }}">
        </div>
        <label for="name">Word:</label>
        <input type="text" name="name" value="{{ $word->name }}">
        
        <!-- Button Update -->
        <button type="submit" class="btn btn-sm btn-success">Update</button>
    </form>
@endsection