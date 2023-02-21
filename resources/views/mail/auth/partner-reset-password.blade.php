<x-mail::message>
# Reset Password Request

Please click this link : <a href="{{ $token_url }}">{{ $token_url }}</a> to change your password.

<x-mail::button :url="$token_url">
Reset Password
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
