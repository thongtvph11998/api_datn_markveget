@component('mail::message')
<div>Xin chào <b style="text-transform: capitalize;">{{$data['name']}}</b>.</div>
<div>Mã xác thực tài khoản của bạn là <b>{{$data['code']}}</b></div><br>
Thanks!<br>
MarkVeget.com.vn
@endcomponent
