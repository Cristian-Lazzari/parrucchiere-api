@extends('layouts.base')

@section('contents')
    {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}


        <h2>
            Servizi disponibili
        </h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="expire-mobile">ID</th>
                    <th>NOME SERVIZIO</th>
                    <th class="expire-mobile-s">PREZZO</th>
                    <th class="expire-mobile-s">SLOT</th>
                  
                    <th>
                        <div class="btn-cont">
                            <a class="btn btn-success" href="{{ route('admin.services.create') }}">nuovo</a>


                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <th class="expire-mobile">{{$service->id}}</th>
                        <td>
                            <span style="color:white" class="ts bs badge bg-success rounded-pill"  > {{$service->name}}</span>
                           
                        </td>
                        
                        <td class="expire-mobile-s">€{{$service->price / 100}}</td>
                        <td class="expire-mobile-s">{{$service->slot}}</td>
                 
                        <td >
                            <div class="btn-cont">
                                <a class="btn my-btn btn-warning" href="{{ route('admin.services.edit', ['service' => $service->id]) }}">Modifica</a>
                                <form action="{{ route('admin.services.destroy', ['service' => $service->id])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" >Elimina</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    {{ $services->links() }}
@endsection

