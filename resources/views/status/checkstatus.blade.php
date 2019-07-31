
    @extends('layouts.layout')
    @section('content')
        <div class="sidenav">
            <img class="logo" src="../image/nirvanalogo.png" alt="">
            <a href="{{ route('status')}}">Check Status</a>
            <a href="{{ route('reserve')}}">Reserve</a>
            <a href="{{ route('log')}}">Log</a>
        </div>

        <div class="content">
            <div class="topic">
                <h2 class="text-right mt-3 ">Check status</h2>
                <hr>
            </div>

            <table class="table">
            <thead>
                <tr>
                <th class="border-top-0" scope="col">รูปแบบ</th>
                <th class="border-top-0" scope="col">ยูนิต</th>
                <th class="border-top-0" scope="col">สถานะ</th>
                <th class="border-top-0"></th>
                </tr>
            </thead>
            <tbody>
            
                @foreach($unit as $units)
                  
                    <tr>
                        <th scope="row">{{ $types->name }}</th>
                        <td>{{ $units->unit }}</td>
                        @if($units->status == 0)
                            <td>ว่าง</td>
                            <td><a href="{{ route('reserveformunit', ['unit' => $units->id],['type' => '1']) }}"><button type="button" class="w-50 btn btn-success">จอง</button></a></td>
                        
                        @elseif($units->status == 1)
                            <td>จองแล้ว</td>
                            <td><a href="{{ route('detail', ['id' => $units->id]) }}"><button type="button" class="w-50 btn btn-primary">ดูข้อมูล</button></a>
                          
                            </td>
                        @endif
                    </tr>
                @endforeach
                
               
            </tbody>
            </table>

        </div>

        
        @endsection