@extends('layouts.base')

@section('contents')
    {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}


  
    <div class="row">
        <h1 >GESTIONE DATE</h1>
        <a  href="{{ route('admin.reservations.index') }}" class="btn btn-dark">INDIETRO</a>
    </div>
        <table class="table table-striped">
            <thead>
                <tr>

                    <th class="expire-mobile-s">ID</th>
                    <th style="max-width:60px">DATA</th>
                    <th class="expire-mobile-s">ORARIO</th>
                    <th class="expire-mobile">MAX RES</th>
                    <th class="expire-mobile-s">VISIBILE</th>

 

                    <th class="expire-mobile-s"></th>

                </tr>
            </thead>
            <tbody class="body-cat">
                @foreach ($dates as $date)
                    <tr>

                        
                        <td class="expire-mobile-s">{{$date->id}}</td>
                        <td class="expire-mobile-s">{{$date->day}}/{{$date->month}}/{{$date->year}}</td>
                        <td class="expire-mobile-s">{{$date->time}}</td>
                        <td class="expire-mobile ">
                            <div class="btnform" style="display: flex; align-items: center; text-align: center">

                                <form style="width: 45% !important; " action="{{ route('admin.dates.upmaxres', $date->id) }}" method="post">
                                    @csrf
                                    <button  class="btn btn-dark">+</button>
                                </form>
                                <strong>{{$date->max_res}}</strong>

                                <form style="width: 45% !important; " action="{{ route('admin.dates.downmaxres', $date->id) }}" method="post">
                                    @csrf
                                    <button  class="btn btn-dark">-</button>
                                </form>
                            </div>
                      
                        </td>
        
                       
                        <td>
                            @if($date->visible == 1)

                                <span class="badge bg-success">visibile</span> 
                                
                                @else
                                
                                <span class="badge bg-danger">non visibile</span> 
                                
                            @endif
                            
                        
                        </td>
                        <td class="expire-mobile-s">
                            <form action="{{ route('admin.dates.updatestatus', $date->id) }}" method="post">
                                @csrf
                                <button class="btn btn-warning">Modifica visibilità</button>
                            </form>
                        </td>

                        

                    </tr>
                @endforeach
            </tbody>
        </table>
    
    {{ $dates->links() }}
@endsection