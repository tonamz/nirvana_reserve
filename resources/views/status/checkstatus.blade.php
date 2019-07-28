
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
            
                <th scope="row">Pride</th>
                <td>01</td>
                <td>ว่าง</td>
                <td><button type="button" class="btn btn-success">จอง</button></td>
                </tr>
                <tr>
                <th scope="row">Pride</th>
                <td>02</td>
                <td>ว่าง</td>
                <td><button type="button" class="btn btn-success">จอง</button></td>
                </tr>
                <tr>
                <th scope="row">Pride</th>
                <td>03</td>
                <td>ว่าง</td>
                <td><button type="button" class="btn btn-success">จอง</button></td>
                </tr>
            </tbody>
            </table>

        </div>

        
        @endsection