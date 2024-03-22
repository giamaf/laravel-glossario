@extends('layouts.app')

@section('content')
    <form class="row row-gap-3 " action="{{ route('admin.words.update', $word->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="term" class="form-label">Termine</label>
            <input type="text" name="term" class="form-control" id="term" value="{{ old('term', $word->term) }}"
                placeholder="Inserisci un termine...">
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id="description" rows="10">{{ old('description', $word->description) }}</textarea>
        </div>
        <div class="col-12 d-flex justify-content-end gap-3">
            <button class="btn btn-sm btn-warning" type="reset">
                <i class="fa-solid fa-eraser"></i>
                Reset</button>
            <button type="submit" class="btn btn-sm btn-success ">
                <i class="fa-solid fa-floppy-disk"></i>
                Salva</button>
        </div>
    </form>
@endsection