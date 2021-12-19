@extends('layouts.master')
@section('title', 'Parantez Kontrol')
@section('content')
    <div class="hero_in cart_section">
        <div class="wrapper">
            <div class="container">
                <div class="bs-wizard clearfix"></div>
            </div>
        </div>
    </div>

    <form>
        {{ csrf_field() }}
        <div class="container margin_60_35">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="">Parantezleri giriniz</label>
                    <input type="text" name="" id="brackets">
                </div>
                <button type="button" class="btn_1 full-width purchase" id="kontrolBtn">Kontrol Et</button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $("#kontrolBtn").on('click', function() {
            var brackets = $('#brackets').val();
            $.ajax({
                type: "get",
                url: "{{ route('brackets') }}",
                data: {
                    brackets: brackets
                },
                success: function(response) {
                    if (response) {
                        alert(response);
                    }
                }
            })
        })
    </script>
@endsection
