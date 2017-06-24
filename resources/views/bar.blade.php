


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">DollerGames</a>
    </div>
    <ul class="nav navbar-nav">
      
      <li><a href="/deposit">หน้าหลัก</a></li>
      <li><a href="/deposit/create">เเจ้งฝากเงิน</a></li>
      <li><a  href="/withdraw/create">เเจ้งถอนเงิน</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
          <li> @if(auth()->check())
                      <a href="/logout">ออกจากระบบ</a><br>
                         ({{auth()->user()->name}})</li>
         <li>@else
                     <a href="/login">เข้าสู่ระบบ</a></li>
         <li> @endif 
                     <a href="/register">สมัคสมาชิก</a></li>
    </ul>
  </div>
</nav>

