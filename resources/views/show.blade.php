@extends('layouts.app')

@section('title')
 {{$todo->title}}
@endsection

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                {{$todo->title}}
            </div>
            <div class="card-body">
                {{$todo->description}}
            </div>
        </div>
    </div>
  </div>
@endsection

