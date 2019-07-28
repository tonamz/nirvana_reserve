        @extends('layouts.layout')
        @section('content')
        <div class="sidenav">
            <img class="logo" src="image/nirvanalogo.png" alt="">
            <a href="{{ route('status')}}">Check Status</a>
            <a href="{{ route('reserve')}}">Reserve</a>
            <a href="{{ route('log')}}">Log</a>
        </div>

        <div class="content">
            <div class="topic">
                <h2 class="text-right mt-3 ">Reserve</h2>
                <hr >
            </div>
           
            <div class="category">
                <div class="row">
                    <div class="col-3">
                        <a href="{{ route('reserveform', ['type' => '1']) }}">
                            <button class="bt-category"
                            style="background-color:#717374;"
                            >PRIDE</button>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="{{ route('reserveform', ['type' => '2']) }}">
                            <button class="bt-category"
                            style="background-color:#293D57;"
                            >MOST</button>
                        </a>
                    </div>
                    <div class="col-3">
                    <a href="{{ route('reserveform', ['type' => '3']) }}">
                       <button class="bt-category"
                       style="background-color:#1F1D1A;"
                       >LIVE</button>
                       </a>
                    </div>
                    <div class="col-3">
                    <a href="{{ route('reserveform', ['type' => '4']) }}">
                       <button class="bt-category"
                       style="background-color:#648899;"
                       >NICHES</button>
                       </a>
                    </div>
                    <div class="col-3">
                    <a href="{{ route('reserveform', ['type' => '5']) }}">
                       <button class="bt-category"
                       style="background-color:#0E6884;"
                       >KEEN</button>
                       </a>
                    </div>
                    <div class="col-3">
                    <a href="{{ route('reserveform', ['type' => '6']) }}">
                       <button class="bt-category"
                       style="background-color:#2DAC99;"
                       >QUEST</button>
                       </a>
                    </div>
                    <div class="col-3">
                    <a href="{{ route('reserveform', ['type' => '7']) }}">
                       <button class="bt-category"
                       style="background-color:#3D84C2;"
                       >REACH</button>
                       </a>
                    </div>
                    <div class="col-3">
                    <a href="{{ route('reserveform', ['type' => '8']) }}">
                       <button class="bt-category"
                       style="background-color:#5BC7CE;"
                       >SAND</button>
                       </a>
                    </div>
                    
                  
             
                </div>
            </div>
        </div>

@endsection