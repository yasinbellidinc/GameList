@if (session()->has('mesaj'))
    <div class="container">
        <div class="alert alert-{{ session('mesaj_tur') }}"> <i class="ti-info-alt"></i> {{ session('mesaj') }}</div>
    </div>
@endif
