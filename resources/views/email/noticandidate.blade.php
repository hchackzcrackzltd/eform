@component('mail::message')

@component('mail::panel')
  <b>ประวัติผู้สมัคร (Resume)</b><br />
  <b>ชื่อ-นามสกุล:</b> {{$data->name}}<br />
  <b>เบอร์โทร:</b> {{$data->mobile}}<br />
  <b>อีเมล์:</b> {{$data->email}}
@endcomponent

@component('mail::button', ['url' => route('login_admin')])
Check
@endcomponent

ขอบคุณครับ,<br>
{{ config('app.name') }}
@endcomponent
