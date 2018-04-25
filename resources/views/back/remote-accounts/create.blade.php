@extends('back.layout')

@section('title', trans('dictionary.remote-accounts'))

@push('page-actions')
    <a href="{{ route('back.remote-accounts.index') }}" class="btn btn-default">@lang('dictionary.back')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Add Account</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'post', 'route' => ['back.remote-accounts.addSingle']]) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::openGroup('login', 'Login') !!}
                            {!! Form::text('login') !!}
                            {!! Form::closeGroup() !!}
                        </div>

                        <div class="col-md-6">
                            {!! Form::openGroup('password', 'Password') !!}
                            {!! Form::text('password') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>

                    <hr />

                    <button class="btn btn-info btn-fill pull-right">@lang('dictionary.create')</button>
                    <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Add Raw Accounts</h4>
                </div>
                <div class="content">
                    {!! Form::open(['method' => 'post', 'route' => ['back.remote-accounts.addMass']]) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::openGroup('rawdata', 'Raw Data') !!}
                            {!! Form::textarea('rawdata', null, ['placeholder' => 'login:password']) !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>

                    <hr />

                    <button class="btn btn-info btn-fill pull-right">@lang('dictionary.create')</button>
                    <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection