@if ($word->exists)
    <form class="row py-5" action="{{ route('admin.words.update', $word->id) }}" method="POST">
        @method('PUT')
    @else
        <form class="row py-5" action="{{ route('admin.words.store') }}" method="POST">
@endif
@csrf

{{-- * TERM  --}}
<div class="col-6">
    <label for="term" class="form-label">Termine</label>
    <input type="text" name="term"
        class="form-control  @error('term') is-invalid @elseif (old('term', '')) is-valid @enderror"
        id="term" value="{{ old('term', $word->term) }}" placeholder="Inserisci un termine...">
    @error('term')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @else
        <div class="form-text">
            <p>Inserisci il termine</p>
        </div>
    @enderror
</div>

{{-- * DESCRIPTION  --}}
<div class="col-12">
    <label for="description" class="form-label">Descrizione</label>
    <textarea name="description"
        class="form-control @error('description') is-invalid @elseif (old('description', '')) is-valid @enderror"
        id="description" rows="5">{{ old('description', $word->description) }}</textarea>
    @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @else
        <div class="form-text">
            <p>Inserisci la descrizione</p>
        </div>
    @enderror
</div>

{{-- * LINKS  --}}
<div class="col-12">
    {{-- # COLLAPSE 1 --}}
    <p class="d-inline-flex">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseLink" role="button" aria-expanded="false"
            aria-controls="collapseLink">
            Aggiungi Link
        </a>
    </p>
    <div class="collapse" id="collapseLink">
        <div class="mb-3">
            <label for="label" class="form-label">Label</label>
            <input type="text" class="form-control" id="label" name="label">
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url" class="form-control" id="url" name="url">
        </div>


        {{-- # COLLAPSE 2 --}}
        {{-- <p class="d-inline-flex">
            <a class="btn btn-sm btn-primary" data-bs-toggle="collapse" href="#collapseLink2" role="button"
                aria-expanded="false" aria-controls="collapseLink">
                <i class="fas fa-plus fa-lg"></i>
            </a>
        </p>
        <div class="collapse" id="collapseLink2">
            <div class="mb-3">
                <label for="label2" class="form-label">Label</label>
                <input type="text" class="form-control" id="label2" name="labels[]" disabled>
            </div>
            <div class="mb-3">
                <label for="url2" class="form-label">URL</label>
                <input type="url" class="form-control" id="url2" name="urls[]" disabled>
            </div>

            <p class="d-inline-flex">
                <a class="btn btn-sm btn-primary" data-bs-toggle="collapse" href="#collapseLink3" role="button"
                    aria-expanded="false" aria-controls="collapseLink">
                    <i class="fas fa-plus fa-lg"></i>
                </a>
            </p>
            <div class="collapse" id="collapseLink3">
                <div class="mb-3">
                    <label for="label3" class="form-label">Label</label>
                    <input type="text" class="form-control" id="label3" name="labels[]" disabled>
                </div>
                <div class="mb-3">
                    <label for="url3" class="form-label">URL</label>
                    <input type="url" class="form-control" id="url3" name="urls[]" >
                </div>
            </div>
        </div> --}}
    </div>
</div>

<div class="col-12 d-flex gap-3 justify-content-end">
    <button class="btn btn-sm btn-warning" type="reset">
        <i class="fa-solid fa-eraser"></i>
        Reset</button>
    <button type="submit" class="btn btn-sm btn-success ">
        <i class="fa-solid fa-floppy-disk"></i>
        Salva</button>
</div>
</form>
