
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
                <h2 class="text-right mt-3 ">Detail</h2>
                <hr >
            </div>
            <div class="category">
        

                    <div class="row">
                        <div class="col-4">

                                <label for="exampleFormControlInput1">รูปแบบ :</label>
                                <h3><span class="badge badge-secondary" ></span> </h3> 

                   
                        </div>
                        <div class="col-4">
                            <label for="exampleFormControlSelect1">ยูนิต :</label>

                        </div>
                        <div class="col-4">

                            <label for="exampleFormControlInput1">ราคา :</label>


                        </div>
                        <div class="col-6">
 
                            <label for="exampleFormControlInput1">ชื่อ :</label>


                        </div>
                        <div class="col-6">
                       
                            <label for="exampleFormControlInput1">นามสกุล :</label>
        
                        </div>
                        <div class="col-12">

                            <label for="exampleFormControlInput1">เบอร์โทรศัพท์ที่ติดต่อได้ :</label>

                        </div>
                        <div class="col-12">

                            <label for="exampleFormControlInput1">ที่อยู่ที่ติดต่อได้ :</label>
        

                        </div>
                        <div class="col-12">

                             <label for="exampleFormControlFile1">สำเนาบัตรประชาชน : </label>

                        <div class="col-12">
                            <button type="submit" class="w-100 btn btn-primary">Submit</button>
                        </div>
                    </div>

                
            </div>

            @endsection