@if ($word->exists)
    <form class="row row-gap-3 " action="{{ route('admin.words.update', $word->id) }}" method="POST">
        @method('PUT')
    @else
        <form class="row row-gap-3 " action="{{ route('admin.words.store') }}" method="POST">
@endif
@csrf

<div class="col-md-6">
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

<div class="col-12">
    <label for="description" class="form-label">Descrizione</label>
    <textarea name="description"
        class="form-control @error('description') is-invalid @elseif (old('description', '')) is-valid @enderror"
        id="description" rows="10">{{ old('description', $word->description) }}</textarea>
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

<div class="col-12 d-flex justify-content-end gap-3">
    <button class="btn btn-sm btn-warning" type="reset">
        <i class="fa-solid fa-eraser"></i>
        Reset</button>
    <button type="submit" class="btn btn-sm btn-success ">
        <i class="fa-solid fa-floppy-disk"></i>
        Salva</button>
</div>
</form>
