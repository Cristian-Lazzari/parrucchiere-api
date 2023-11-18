@extends('layouts.base')

@section('contents')
    {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}


  

    <h1>PRENOTAZIONI TAVOLI</h1>
        <table class="table table-striped">
            <thead>
                <tr>

                    <th style="max-width:60px">NOME</th>
                    <th class="expire-mobile-s">TELEFONO</th>
                    <th class="expire-mobile">MESSAGGIO</th>
                    <th class="expire-mobile-s">N OSPITI</th>
                    <th class="expire-mobile-s">ORARIO</th>
                    <th class="expire-mobile-s">GIORNO</th>

                    <th>STATUS</th>

                    <th class="expire-mobile-s"></th>

                </tr>
            </thead>
            <tbody class="body-cat">
                @foreach ($reservations->reverse() as $reservation)
                    <tr>

                        <td class="name-mobile">
                            <a style="color:white; white-space:wrap" class="ts bs a-notlink badge bg-success rounded-pill " href="{{ route('admin.reservations.show', ['reservation' =>$reservation]) }}" > {{$reservation->name}}</a>
                           
                        </td>
                        <td class="expire-mobile-s">{{$reservation->phone}}</td>
                        <td class="expire-mobile-s">{{$reservation->message}}</td>
                        <td class="expire-mobile">{{$reservation->n_person}}</td>
                        <td class="expire-mobile-s">{{$reservation->date}}</td>
                        <td class="expire-mobile-s">{{$reservation->time}}</td>
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