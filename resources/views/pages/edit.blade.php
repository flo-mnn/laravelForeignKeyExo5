@extends('template.main')
@section('content')
      <section class="container">
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
                <label class="btn btn-dark rounded-0" for="changeImg">picture</label>
                <input type="file" id="changeImg" name="src" class="d-none">
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
              <strong>Name:</strong> <input type="text"><br/>
              <strong>Type:</strong> {{$pokemon->types->type}}<br/>
              <strong>Level:</strong> {{$pokemon->level}}<br/>
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
            <a href="/pokemon/{{$pokemon->id}}/edit">
              <div id="yellowBox1" class="d-flex align-items-center justify-content-center">
                <span>edit</span>
              </div>
            </a>
            <form action="/pokemon/{{$pokemon->id}}" method="POST">
              @csrf
              @method('DELETE')
              <div id="yellowBox2" class="d-flex align-items-center justify-content-center">
                <button type="submit" class="bg-transparent border-none">
                  delete
                </button>
              </div>
            </form>
            
            <div id="bg_curve1_right"></div>
            <div id="bg_curve2_right"></div>
            <div id="curve1_right"></div>
            <div id="curve2_right"></div>
          </div>
        </div>
      </section>
@endsection