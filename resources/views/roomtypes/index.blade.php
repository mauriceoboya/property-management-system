@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"><span><i class="fa fa-institution"></i></span>Roomtypes</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#roomType"><i class="fa fa-plus-circle"></i>Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('roomtypes.table')
                    {!! Form::open(['route' => 'roomtypes.store']) !!}
                      @include('roomtypes.fields')
                    {!! Form::close() !!}
            </div>
        </div>

    </div>
@endsection






