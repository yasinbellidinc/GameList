@extends('layouts.master')
@section('title', 'Oyun Listesi')
@section('content')
    <div class="container margin_60_35">
        <div class="isotope-wrapper">
            <div class="row" id="body"></div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/js/app/gameList.js"></script>
@endsection

