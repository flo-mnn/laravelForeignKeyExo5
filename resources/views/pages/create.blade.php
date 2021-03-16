@extends('template.main')
@section('content')
    <section class="container">
        @include('partials.form')
    </section>
    <script>
        function previewFile() {
                var preview = document.querySelector('#picture').querySelector('img');
                var file    = document.querySelector('input[type=file]').files[0];
                 var reader  = new FileReader();
    
                 reader.onloadend = function () {
                     preview.src = reader.result;
                 }
    
                 if (file) {
                     reader.readAsDataURL(file);
                 } else {
                     preview.src = "";
                 }
            }
    </script>
@endsection