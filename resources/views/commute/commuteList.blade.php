@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ Auth::user()->name }}님</h1>
        <hr/>
        <button  type="submit" class="btn btn-primary btn-lg">
            출 근
        </button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button  type="submit" class="btn btn-primary btn-lg">
            퇴 근
        </button>
        <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
       
        <div class="form-group {{$errors->has('content') ? 'has-error' : ''}}">
            <label for="content">이번달 출퇴근</label>
        </div>
    </div>
@endsection