@if ($word->exists)
    <form class="row py-5 row-gap-3" action="{{ route('admin.words.update', $word->id) }}" method="POST">
        @method('PUT')
    @else
        <form class="row py-5 row-gap-3 " action="{{ route('admin.words.store') }}" method="POST">
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

<!-- Checkbox -->
<div class="col-6 d-flex align-items-center gap-2">
    @forelse($tags as $tag)
        <div class="form-check">
            <input name="tags[]" @if (in_array($tag->id, old('tags', $prev_tags ?? []))) checked @endif class="form-check-input"
                type="checkbox" value="{{ $tag->id }}" id="tag-{{ $tag->id }}">
            <label class="form-check-label" for="tag-{{ $tag->id }}">
                {{ $tag->label }}
            </label>
        </div>
    @empty
    @endforelse

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
<div class="col-6">
    {{-- # COLLAPSE 1 --}}
    <p class="d-inline-flex">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseLink" role="button" aria-expanded="false"
            aria-controls="collapseLink">
            Aggiungi Link
        </a>
    </p>
    <div class="collapse @error('links.*') show @enderror" id="collapseLink">
        {{-- Label 1 --}}
        <div class="mb-3">
            <label for="label" class="form-label">Label</label>
            <input type="text"
                class="form-control @error('links.0.label') is-invalid @elseif (old('links.0.label', '')) is-valid @enderror"
                id="label" name="links[0][label]" value="{{ old('links.0.label', '') }}">
            @error('links.0.label')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @else
                <div class="form-text">
                    <p>Inserisci il nome del link</p>
                </div>
            @enderror
        </div>
        {{-- URL 1 --}}
        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url"
                class="form-control @error('links.0.url') is-invalid @elseif (old('links.0.url', '')) is-valid @enderror"
                id="url" name="links[0][url]" value="{{ old('links.0.url', '') }}">
            @error('links.0.url')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @else
                <div class="form-text">
                    <p>Inserisci l'url</p>
                </div>
            @enderror
        </div>


        {{-- # COLLAPSE 2 --}}
        <p class="d-inline-flex">
            <a class="btn btn-sm btn-primary" data-bs-toggle="collapse" href="#collapseLink2" role="button"
                aria-expanded="false" aria-controls="collapseLink">
                <i class="fas fa-plus fa-lg"></i>
            </a>
        </p>
        <div class="collapse @error('links.*') show @enderror" id="collapseLink2">
            {{-- Label 2 --}}
            <div class="mb-3">
                <label for="label2" class="form-label">Label</label>
                <input type="text"
                    class="form-control @error('links.1.label') is-invalid @elseif (old('links.1.label', '')) is-valid @enderror"
                    id="label2" name="links[1][label]" value="{{ old('links.1.label', '') }}">
                @error('links.1.label')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @else
                    <div class="form-text">
                        <p>Inserisci il nome del link</p>
                    </div>
                @enderror
            </div>
            {{-- URL 2 --}}
            <div class="mb-3">
                <label for="url2" class="form-label">URL</label>
                <input type="url"
                    class="form-control @error('links.1.url') is-invalid @elseif (old('links.1.url', '')) is-valid @enderror"
                    id="url2" name="links[1][url]" value="{{ old('links.1.url', '') }}">
                @error('links.1.url')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @else
                    <div class="form-text">
                        <p>Inserisci l'url</p>
                    </div>
                @enderror
            </div>

            {{-- # COLLAPSE 3 --}}
            <p class="d-inline-flex">
                <a class="btn btn-sm btn-primary" data-bs-toggle="collapse" href="#collapseLink3" role="button"
                    aria-expanded="false" aria-controls="collapseLink">
                    <i class="fas fa-plus fa-lg"></i>
                </a>
            </p>
            <div class="collapse @error('links.*') show @enderror" id="collapseLink3">
                {{-- Label 3 --}}
                <div class="mb-3">
                    <label for="label3" class="form-label">Label</label>
                    <input type="text"
                        class="form-control @error('links.2.label') is-invalid @elseif (old('links.2.label', '')) is-valid @enderror"
                        id="label3" name="links[2][label]" value="{{ old('links.2.label', '') }}">
                    @error('links.2.label')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @else
                        <div class="form-text">
                            <p>Inserisci il nome del link</p>
                        </div>
                    @enderror
                </div>
                {{-- URL 3 --}}
                <div class="mb-3">
                    <label for="url3" class="form-label">URL</label>
                    <input type="url"
                        class="form-control @error('links.2.url') is-invalid @elseif (old('links.2.url', '')) is-valid @enderror"
                        id="url3" name="links[2][url]" value="{{ old('links.2.url', '') }}">
                    @error('links.2.url')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @else
                        <div class="form-text">
                            <p>Inserisci l'url</p>
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Buttons --}}
<div class="col-12">
    <div class="col-12 d-flex gap-2 justify-content-end">
        <a href="{{ route('admin.words.index') }}" class="btn btn-sm btn-secondary">
            <i class="fas fa-arrow-left"></i>
            Indietro</a>
        <button class="btn btn-sm btn-warning" type="reset">
            <i class="fa-solid fa-eraser"></i>
            Reset</button>
        <button type="submit" class="btn btn-sm btn-success ">
            <i class="fa-solid fa-floppy-disk"></i>
            Salva</button>
    </div>
</div>
</form>
