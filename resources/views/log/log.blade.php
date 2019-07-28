
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
                <h2 class="text-right mt-3 ">Log</h2>
                <hr >
            </div>
            
            <table class="table">
            <thead>
                <tr>
                <th class="border-top-0" scope="col">#</th>
                <th class="border-top-0" scope="col">ผู้ใช้</th>
                <th class="border-top-0" scope="col">วันเวลา</th>
                <th class="border-top-0" scope="col">ทำอะไร</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>12.34 12/06/62</td>
                <td>login</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>15.34 12/06/62</td>
                <td>จองห้อง pride ยูนิตที่ 05</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>12.34 12/06/62</td>
                <td>จองห้อง live ยูนิตที่ 23</td>
                </tr>
            </tbody>
            </table>

        </div>

        
        @endsection