
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
        
                <form id="form" method="post" action="{{ route('reserve.store') }}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">รูปแบบ :</label>
                                <input type="hidden" class="form-control" id="exampleFormControlInput1" name="type">
                                <h3><span class="label label-default">{{$types->name}}</span></h3>
                                
                            </div>
                         
                            
                               
                            
                   
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                            <label for="exampleFormControlSelect1">ยูนิต :</label>
                            <select class="form-control" name="id_unit">
                            @foreach($unit as $units)
                                <option name="id_unit" value="{{$units->id}}">{{ $units->unit }}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">ราคา :</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="กรุณาใส่ราคา">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">ชื่อ :</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="กรุณาใส่ชื่อ">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">นามสกุล :</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="กรุณาใส่นามสกุล">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">เบอร์โทรศัพท์ที่ติดต่อได้ :</label>
                                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="กรุณาใส่เบอร์โทรศัพท์">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">ที่อยู่ที่ติดต่อได้ :</label>
                            <textarea class="form-control" id="address" name="address" rows="3"placeholder="กรุณาใส่ที่อยู่"></textarea>
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