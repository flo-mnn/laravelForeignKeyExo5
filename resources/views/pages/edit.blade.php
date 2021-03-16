@extends('template.main')
@section('content')
      <section class="container">
        <form action="/pokemon/{{$pokemon->id}}" method="POST" enctype="multipart/form-data">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            @method('PATCH')
            <div id="pokedex" class="mb-5">
            <div id="left" class="mb-5">
                <div id="logo"></div>
                <div id="bg_curve1_left"></div>
                <div id="bg_curve2_left"></div>
                <div id="curve1_left">
                <div id="buttonGlass">
                    <div id="reflect"> </div>
                </div>
                <div id="miniButtonGlass1"></div>
                <div id="miniButtonGlass2"></div>
                <div id="miniButtonGlass3"></div>
                </div>
                <div id="curve2_left">
                <div id="junction">
                    <div id="junction1"></div>
                    <div id="junction2"></div>
                </div>
                </div>
                <div id="screen">
                <div id="topPicture">
                    <div id="buttontopPicture1"></div>
                    <div id="buttontopPicture2"></div>
                </div>
                <div id="picture">
                    <img src="/storage/img/{{$pokemon->src}}" alt="{{$pokemon->name}} pokemon image" height="160"/>
                </div>
                <div id="buttonbottomPicture"></div>
                <div id="speakers">
                    <label class="btn btn-success rounded-0" for="changeImg">picture</label>
                    <input type="file" id="changeImg" name="src" class="d-none" onchange="previewFile()">
                </div>
                </div>
                <div id="bigbluebutton"></div>
                <div id="barbutton1"></div>
                <div id="barbutton2"></div>
                <div id="cross">
                <div id="leftcross">
                    <div id="leftT"></div>
                </div>
                <div id="topcross">
                    <div id="upT"></div>
                </div>
                <div id="rightcross">
                    <div id="rightT"></div>
                </div>
                <div id="midcross">
                    <div id="midCircle"></div>
                </div>
                <div id="botcross">
                    <div id="downT"></div>
                </div>
                </div>
            </div>
            <div id="right" class="mb-5">
                <div id="stats">
                <strong>Name:</strong> <input class="bg-transparent border-top-0 border-left-0 border-right-0 border-danger" type="text" name="name" value="{{old('name') ? old('name') : $pokemon->name}}"><br/>
                <strong>Type:</strong> 
                <select class="bg-transparent border-top-0 border-left-0 border-right-0 border-danger" name="type_id" selected="{{old('type_id') ? old('type_id') : $pokemon->type_id}}">
                    @foreach ($types as $type)
                        @if ($pokemon->type_id === $type->id)

                        <option value="{{$type->id}}" selected>{{$type->type}}</option>
                            
                        @endif
                    <option value="{{$type->id}}">{{$type->type}}</option>
                    @endforeach
                </select>
                <br/>
                <strong>Level:</strong>
                <input class="bg-transparent border-top-0 border-left-0 border-right-0 border-danger" type="number" size="5" name="level" value="{{old('level') ? old('level') : $pokemon->level}}">
                <br/>
                </div>
                <div id="blueButtons1">
                <div class="blueButton"></div>
                <div class="blueButton"></div>
                <div class="blueButton"></div>
                <div class="blueButton"></div>
                <div class="blueButton"></div>
                </div>
                <div id="blueButtons2">
                <div class="blueButton"></div>
                <div class="blueButton"></div>
                <div class="blueButton"></div>
                <div class="blueButton"></div>
                <div class="blueButton"></div>
                </div>
                <div id="miniButtonGlass4"></div>
                <div id="miniButtonGlass5"></div>
                <div id="barbutton3"></div>
                <div id="barbutton4"></div>
                <div id="yellowBox1">
                </div>
                <div id="yellowBox2" class="d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-warning text-danger font-weight-bold">
                    UPDATE
                    </button>
                </div>
                <div id="bg_curve1_right"></div>
                <div id="bg_curve2_right"></div>
                <div id="curve1_right"></div>
                <div id="curve2_right"></div>
            </div>
            </div>

            </form>
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