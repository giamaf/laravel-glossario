    <form class="row py-5 row-gap-3" action="{{ route('admin.links.update', $link->id) }}" method="POST">
        @method('PUT')
        @csrf

        {{-- * Label  --}}
        <div class="col-6">
            <label for="label" class="form-label">Label</label>
            <input type="text" name="label"
                class="form-control  @error('label') is-invalid @elseif (old('label', '')) is-valid @enderror"
                id="label" value="{{ old('label', $link->label) }}" placeholder="Inserisci un label...">
            @error('label')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @else
                <div class="form-text">
                    <p>Inserisci la label</p>
                </div>
            @enderror
        </div>
        {{-- URL  --}}
        <div class="col-12">
            <label for="url" class="form-label">URL</label>
            <input type="url"
                class="form-control @error('url') is-invalid @elseif (old('url', '')) is-valid @enderror"
                id="url" name="url" value="{{ old('url', $link->url) }}">
            @error('url')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @else
                <div class="form-text">
                    <p>Inserisci l'url</p>
                </div>
            @enderror
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
