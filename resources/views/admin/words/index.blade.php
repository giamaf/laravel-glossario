@extends('layouts.app')

@section('title', 'Glossario')

@section('content')
    <div class="d-flex justify-content-between align-items-center">

      <h1 class="py-3">Glossario</h1>

      <div>
        {{--# CREATE --}}
        <a href="{{route('admin.words.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Aggiungi termine</a>

        {{--# Cestino --}}
        <a href="{{route('admin.words.trash')}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Cestino</a>
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
                    {{--# SHOW --}}
                    <a href="{{ route('admin.words.show', $word->id)}}" class="btn btn-sm btn-primary">
                      <i class="far fa-eye"></i>
                    </a>

                    {{--# EDIT --}}
                    <a href="{{ route('admin.words.edit', $word->id)}}" class="btn btn-sm btn-secondary">
                      <i class="fas fa-pencil"></i>
                    </a>

                    {{--# DESTROY --}}
                    <form action="{{ route('admin.words.destroy', $word->id) }}" method="POST" id="delete-form">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-sm btn-danger"><i class="far fa-trash-can"></i></button>
                    </form>
                  </div>
                </td>
              </tr>
            @empty
               <tr>
                <td colspan="6">
                  <h3 class="text-center">Non ci sono termini nel glossario.</h3>
                </td>
               </tr>
            
            @endforelse
          
        </tbody>
      </table>
@endsection


@section('scripts')
        <script>
        const deleteForm = document.getElementById('delete-form');

        deleteForm.addEventListener('submit', e => {
            e.preventDefault();

            const confirmation = confirm('Sei sicuro di voler spostare questo termine nel cestino?');

            if(confirmation) deleteForm.submit();
        });
    </script>
@endsection