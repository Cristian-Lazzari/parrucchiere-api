@extends('layouts.base')

@section('contents')
<a href="{{ route('admin.setting') }}" class="btn btn-dark my-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/></svg>
</a>

<h4 class="mt-4" >Orari disponoibili per le prenotazioni al tavolo</h4>
<div class="orari" >
    @foreach ($slots as $slot)
        <form action="{{ route('admin.slots.toggleTimeVisibility', $slot->id) }}" method="post">
            @csrf
            <input 
                id="visible{{$slot->time_slot}}"
                style="display: none; user-select: none;"
                type="checkbox" 
                name="visible" 
                value="1"
                {{ $slot->visible ? 'checked' : '' }} 
                onChange="this.form.submit()"
            >
            <label class=" {{ $slot->visible ? 'mybadge bg-primary' : 'mybadge bg-danger' }}" for="visible{{$slot->time_slot}}">
                {{ $slot->time_slot }}
            </label>
        </form>
    @endforeach
</div>


    



@endsection
