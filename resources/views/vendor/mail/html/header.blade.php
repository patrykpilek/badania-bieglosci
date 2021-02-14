<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Badania Biegłości')
{{--<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">--}}
<img src="{{ asset('storage/logo/jars.svg') }}" class="logo" alt="JARS S.A Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
