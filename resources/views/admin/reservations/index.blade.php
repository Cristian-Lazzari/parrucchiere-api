@extends('layouts.base')

@section('contents')
    {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}


  
    <div class="row">
        <h1 >PRENOTAZIONI TAVOLI</h1>
        <a  href="{{ route('admin.dates.index') }}" class="btn btn-warning">Gestione date</a>
    </div>
        <table class="table table-striped">
            <thead>
                <tr>

                    <th style="max-width:60px">NOME</th>
                    <th class="expire-mobile-s">TELEFONO</th>
                    <th class="expire-mobile">SERVIZIO</th>
                    <th class="expire-mobile-s">DATA</th>
                    <th class="expire-mobile-s">ORARIO</th>

                    <th>STATUS</th>

                    <th class="expire-mobile-s"></th>

                </tr>
            </thead>
            <tbody class="body-cat">
                @foreach ($reservations as $reservation)
                    <tr>

                        <td class="name-mobile">
                            <a style="color:white; white-space:wrap" class="ts bs a-notlink badge bg-success rounded-pill " href="{{ route('admin.reservations.show', ['reservation' =>$reservation]) }}" > {{$reservation->name}}</a>                
                        </td>
                        <td class="expire-mobile-s">{{$reservation->phone}}</td>
                        <td class="expire-mobile-s">{{$reservation->service}}</td>
                        <td class="expire-mobile">{{$dates[$reservation->date_id]->day}}</td>
                        <td class="expire-mobile">{{$dates[$reservation->date_id]->time}}</td>
                       
                        <td>
                            @if($reservation->status)

                                <span class="badge bg-success">Confermato</span> 
                                
                                @else
                                
                                <span class="badge bg-danger">Da confermare</span> 
                                
                            @endif
                            
                        
                        </td>
                        <td class="expire-mobile-s">
                            <form action="{{ route('admin.reservations.updatestatus', $reservation->id) }}" method="post">
                                @csrf
                                <button class="btn btn-warning">Modifica Stuatus</button>
                            </form>
                        </td>

                        

                    </tr>
                @endforeach
            </tbody>
        </table>
    
    {{ $reservations->links() }}
@endsection