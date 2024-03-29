@extends('layouts.app')
@section('title', 'Word')

@section('content')
    {{-- Term --}}
    <header class="mt-4">
        <h1 class="text-capitalize">{{ $word->term }}</h1>
    </header>


    {{-- Descrizione --}}
    <p class="fs-5">{{ $word->description }}</p>
    <div>
        <small>
            {{-- Data creazione --}}
            <strong>Data di creazione:</strong> {{ $word->getFormattedDate('created_at') }}
            {{-- Data ultima modifica --}}
            <strong class="ms-5">Ultima modifica:</strong> {{ $word->getFormattedDate('updated_at') }}
        </small>
    </div>
    <div class="mt-4">
        <strong class="me-2">Link collegati:</strong>

        {{-- Lista links --}}
        <div class="links-wrapper my-3">

            <ul class="list-group list-group-flush  d-flex flex-column align-items-start flex-wrap">

                @forelse ($word->links as $link)
                    {{-- Label --}}
                    <li class="ps-0 list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <a href="{{ $link->url }}" class="me-2" target="_blank">{{ $link->label }}</a>
                        </div>

                        {{-- Bottoni Link --}}
                        <div class="d-flex align-items-center column-gap-2">
                            {{-- # Edit Link --}}
                            <span class="btn btn-sm btn-outline-warning text-bg-dark ">
                                <a href="{{ route('admin.links.edit', $link->id) }}" class="text-warning">
                                    <i class="fas fa-pencil"></i>
                                </a>
                            </span>
                            {{-- Destroy Link --}}
                            <form action="{{ route('admin.links.destroy', $link->id) }}" method="POST" class="delete-form"
                                onclick="this.submit()">
                                @csrf
                                @method('DELETE')
                                <span type='submit' class="btn btn-sm btn-outline-danger text-bg-dark text-danger ">
                                    <i class="fas fa-trash"></i>
                                </span>
                            </form>
                        </div>
                    </li>
                @empty
                    <li class="list-group-item ps-0">Nessuno</li>
                @endforelse
            </ul>
        </div>
    </div>

    <hr>
    <footer class="d-flex justify-content-between align-items-center mt-5">
        <a href="{{ route('admin.words.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i>
        </a>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.words.edit', $word) }}" class="btn btn-sm btn-warning">
                <i class="fas fa-pencil me-2"></i>Modifica
            </a>

            <form action="{{ route('admin.words.destroy', $word) }}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button type='submit' class="btn btn-sm btn-danger">
                    <i class="fas fa-trash me-2"></i>Elimina
                </button>
            </form>
        </div>
    </footer>
@endsection

@section('scripts')
    @vite('resources/js/delete_confirmation.js')
@endsection
