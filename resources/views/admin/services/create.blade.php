@extends('layouts.base')

@section('contents')

<form class="cont_a" method="POST" action="{{ route('admin.services.store') }} " enctype="multipart/form-data" novalidate>
    @csrf

    <div class="mb-3 nome_">
        <label for="name" class="form-label">Titolo del Post</label>
        <input
            type="text"
            class="form-control @error('name') is-invalid @enderror"
            id="name"
            name="name"
            value="{{ old('name') }}"
        >
        <div class="invalid-feedback">
            @error('name') {{ $message }} @enderror
        </div>
    </div>

    <div class="mb-3 price_">
        <label for="price" class="form-label">price</label>
        <input
            type="number"
            class="form-control @error('price') is-invalid @enderror"
            id="price"
            name="price"
            value="{{ old('price') }}"
        >
        <div class="invalid-feedback">
            @error('price') {{ $message }} @enderror
        </div>
    </div>




    <div class="mb-3 slot_ ">
        <h3>Slot</h3>
        <div class="mb-3 form-check">
            <label for="slot" class="form-label">slot</label>
            <input
                type="number"
                class="form-control @error('slot') is-invalid @enderror"
                id="slot"
                name="slot"
                value="{{ old('slot')}}"
            >
        </div>
    </div>





    <button class="btn btn-primary">Salva</button>
</form>

@endsection