@extends('layouts.app')
@section('title', 'Word')

@section('content')
<header class="mt-4">
    <h1 class="text-capitalize">{{$word->term}}</h1>
</header>



<p>{{$word->description}}</p>
<div>
    <strong>Data di creazione:</strong> {{$word->getFormattedDate('created_at')}}
    <strong class="ms-5">Ultima modifica:</strong> {{$word->getFormattedDate('updated_at')}}
</div>

<hr>
<footer class="d-flex justify-content-between align-items-center mt-5">
    <a href="{{route('admin.words.index')}}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i>
    </a>
    <div class="d-flex gap-2">
        <a href="{{route('admin.words.edit', $word)}}" class="btn btn-sm btn-warning">
            <i class="fas fa-pencil me-2"></i>Modifica
        </a>

        <form action="{{route('admin.words.destroy', $word)}}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')
            <button type='submit' class="btn btn-sm btn-danger">
                <i class="fas fa-trash me-2"></i>Elimina
            </button>
        </form>
    </div>
</footer>
@endsection