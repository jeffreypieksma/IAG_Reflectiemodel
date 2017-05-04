@extends('layouts.mobile')

@section('content')
<div class="container feedback">
  <div class="row navigation">
    <div class="col-xs-10">
      <span class="title">Navigatie</span>
    </div>
    <div class="col-xs-2">
      <a href="/feedback" class="btn btn-default back">Terug</a>
    </div>
  </div>

    <div class="row">
      <div class="col-md-12 head">
        <img class="img-circle" src="http://placehold.it/50x50" alt="">
        <span>{{ $reflection->title }}</span>
        <span class="time">Tijd</span>
      </div>

      <div class="col-md-12 message">
        <p>{{ $reflection->message }}</p>
      </div>

      <div class="col-md-6">
        <span class="tag">Tags</span>
      </div>

    </div>
    <div class="row">
      <div class="head"><span class="title">Feedback geven op reflectie</span></div>
      <div class="comment">
        <form method="POST" action="/feedback/create">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="id" value="{{ $reflection->id }}"> 
          <input type="hidden" name="user_id" value="{{ $reflection->user_id }}"> 
          <div class="form-group">
            <label for="title">Titel</label>
            <input type="text" class="form-control" id="title" placeholder="Titel" name="title">
          </div>
          <div class="form-group">
            <label for="reflection">Feedback:</label>
            <textarea class="form-control" rows="5" id="reflection" name="message"></textarea>
          </div>
          
          <button type="submit" class="btn btn-default" style="float:right;">Verstuur</button>
        </form>
      </div
    </div>
  </div>

  <div class="commentList">
    <div class="row">
      <div class="head">
          <span class="title">Recente reacties</span>
          <div class="sorting" style="float:right;">
            <form method="GET" action="/feedback/view/">      
              <span class="">Sorteren op: </span> 
              <select name="sorting">
                <option value="recent">Meest recent</option>
                <option value="rating">Best beoordeeld</option>
              </select>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-default">Verstuur</button>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="content">
          <div class="col-xs-1 rating" >+3</div>
          <div class="col-xs-11 content">
            <div class="head">
              <span class="name">Ina Verhoeven</span>
              <div class="rateComment" style="float:right;">
                <button class="rate down">-1</button>
                <button class="rate up">+1</button>
              </div>
            </div>
          <div class="content">
            <span class="description">Beschrijving...... </span>
          </div>   
      </div>
  </div>
</div>
@endsection