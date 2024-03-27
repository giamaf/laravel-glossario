@extends('layouts.app')

@section('title', 'Cestino')

@section('content')
    <div class="d-flex justify-content-between align-items-center">

      <h1 class="py-3">Cestino</h1>

      <div>
       

        {{--# Cestino --}}
        <a href="{{route('admin.words.index')}}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Glossario</a>
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
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa-solid fa-rotate-left"></i></button>
                    </form>
                    
                     <a href="{{ route('admin.words.edit', $word->id)}}" class="btn btn-sm btn-secondary">
                      <i class="fa-solid fa-pencil"></i>
                    </a> 
                   
                    <form action="{{ route('admin.words.drop', $word->id) }}" method="POST" id="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></button>
                    </form>
                  </div>
                </td>
              </tr>
            @empty
               <tr>
                <td colspan="7">
                  <h3 class="text-center">Non ci sono termini nel cestino.</h3>
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

            const confirmation = confirm('Sei sicuro di voler eliminare definitivamente questo termine?');

            if(confirmation) deleteForm.submit();
        });
    </script>
@endsection