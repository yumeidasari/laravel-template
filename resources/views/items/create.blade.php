@extends('adminlote.master')

@section('content')
    <h2>Ini halaman create</h2>
@endsection

@push('script')
<script>
    var warppers = document.getElementsByClassName("wrappers");
    var items = ["ini", "contoh"];

    console.log("ini items: ", items)
</script>
@endpush