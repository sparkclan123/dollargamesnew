

<a href="/deposit">หน้าหลัก</a>
<a href="/deposit/create">เเจ้งฝากเงิน</a>
@if(auth()->check())
<a href="/logout">ออกจากระบบ</a><br>
({{auth()->user()->name}})
@else
<a href="/login">เข้าสู่ระบบ</a><br>
@endif 
<a href="/register">สมัคสมาชิก</a>