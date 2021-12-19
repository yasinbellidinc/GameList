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
  <div class="bg_color_1">
    <div class="container margin_60_35">
      <div class="row">
        <div class="col-lg-8">
          <div class="box_cart">
            <div class="step">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Parantezleri giriniz</label>
                    <input type="text" name="" id="brackets">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /col -->

        <aside class="col-lg-4" id="sidebar">
          <div class="box_detail">
            <button type="button" class="btn_1 full-width purchase" id="kontrolBtn">Kontrol Et</button>
          </div>
        </aside>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
</form>
@endsection

@section('scripts')
<script>
      $("#kontrolBtn").on('click', function () {
        var brackets = $('#brackets').val();
        $.ajax({
            type: "get",
            url: "{{ route('brackets') }}",
            data: {
                brackets: brackets
            },
            success: function (response) {
                if(response) {
                    alert(response);
                }
            }
        })
    })
</script>
@endsection
