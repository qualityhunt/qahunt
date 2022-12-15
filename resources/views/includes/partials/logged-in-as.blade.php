@impersonating
    <div class="alert alert-warning logged-in-as">
        Şu anda şu şekilde giriş yaptınız: {{ auth()->user()->full_name }}. <a href="{{ route('impersonate.leave') }}">Hesabınıza geri dönün</a>.
    </div><!--alert alert-warning logged-in-as-->
@endImpersonating
