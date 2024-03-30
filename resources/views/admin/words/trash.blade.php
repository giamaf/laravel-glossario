@extends('layouts.app')

@section('title', 'Cestino')

@section('content')
    <div class="d-flex justify-content-between align-items-center">

        <h1 class="py-3">Cestino</h1>

        <div class="d-flex justify-content-between align-items-center gap-2">
            {{-- # Cestino --}}
            <a href="{{ route('admin.words.index') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-left"></i>
                Glossario</a>
            <form method="POST" action="{{ route('admin.words.massive-restore') }}" class="btn btn-success btn-sm"
                onclick="this.submit()">
                <i class="fa-solid fa-rotate-left"></i>
                @csrf
                @method('PATCH')
                Ripristina tutti
            </form>
            <form method="POST" action="{{ route('admin.words.massive-drop') }}" class="delete-form" data-bs-toggle="modal"
                data-bs-target="#modal">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fa-regular fa-trash-can"></i>
                    Svuota
                    cestino</button>
            </form>
        </div>
    </div>

    <table class="table table-striped table-hover mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Termine</th>
                <th scope="col">Descrizione</th>
                <th scope="col" class="text-center">Links</th>
                <th scope="col" class="text-center">Data creazione</th>
                <th scope="col" class="text-center">Ultima modifica</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($words as $word)
                <tr>
                    <th scope="row">{{ $word->id }}</th>
                    <td class="text-capitalize">{{ $word->term }}</td>
                    <td class="w-50">{{ $word->description }}</td>
                    <td>
                        <div class="d-flex flex-column text-center">
                            @forelse ($word->links as $link)
                                <a href="{{ $link->url }}">{{ $link->label }}</a>
                            @empty
                                <span></span>
                            @endforelse
                        </div>
                    </td>
                    <td class="text-center">{{ $word->getFormattedDate('created_at') }}</td>
                    <td class="text-center">{{ $word->getFormattedDate('updated_at') }}</td>
                    <td>
                        <div class="d-flex gap-2 justify-content-end">
                            <form action="{{ route('admin.words.restore', $word->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success btn-sm"><i
                                        class="fa-solid fa-rotate-left"></i></button>
                            </form>

                            <a href="{{ route('admin.words.edit', $word->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa-solid fa-pencil"></i>
                            </a>

                            <form class="delete-form" action="{{ route('admin.words.drop', $word->id) }}" method="POST"
                                data-bs-toggle="modal" data-bs-target="#modal" data-term="{{ $word->term }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i
                                        class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">
                        <h3 class="text-center" id="trash-title">Non ci sono termini nel cestino.</h3>
                    </td>
                </tr>

            @endforelse

        </tbody>
    </table>
@endsection

@section('scripts')
    @vite('resources/js/delete_confirmation.js')
@endsection
