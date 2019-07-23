
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
                <form action="">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">รูปแบบ :</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                            <label for="exampleFormControlSelect1">ยูนิต :</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">ราคา :</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">ชื่อ :</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">นามสกุล :</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">เบอร์โทรศัพท์ที่ติดต่อได้ :</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">ที่อยู่ที่ติดต่อได้ :</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                             <label for="exampleFormControlFile1">สำเนาบัตรประชาชน : </label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="w-100 btn btn-primary">Submit</button>
                        </div>
                    </div>
                    
                </form>
                
            </div>

            @endsection