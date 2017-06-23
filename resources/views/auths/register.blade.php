@extends('master')

@section('content')
 
  
    <form action="/register" method="post">
            {{csrf_field()}}
            <title>สมัคสมาชิก</title>
             <div class="form-group">
                <label for="name">ชื่อ</label>
                 <input type="text" class="form-control" name="name" id="name" placeholder="กรุณาใส่ชื่อ">
            <p> {{ $errors->first('name')}}</p>
          
               
          <label for="name">อีเมล</label>
            <input type="email" name="email" class="form-control" placeholder="Email" ><br>
           <p> {{ $errors->first('email')}}</p>
         
           <label for="name">รหัสผ่าน</label>
            <input type="password"  name="password" class="form-control" placeholder="password" ><br>
            <p> {{ $errors->first('password')}}</p>

          <label for="name">สถานะ</label>
           <select name="status" id="status">
            <option value="operator">Operator</option>
            <option value="user">USER</option>
          </select>
          <p> {{ $errors->first('status')}}</p>
          
                <input  class="btn btn-primary" type="submit" value="บันทึก">
                <input  class="btn btn-danger" type="reset" value="ยกเลิก">
       
                </div> 
    </form>


 
@endsection