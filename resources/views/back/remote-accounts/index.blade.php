@extends('back.layout')

@section('title', trans('dictionary.remote-accounts'))

@push('page-actions')
    <a href="{{ route('back.remote-accounts.create') }}" class="btn btn-fill btn-primary">@lang('messages.add-new')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="content">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('dictionary.login')</th>
                                <th>@lang('dictionary.phone')</th>
                                <th width="10%">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($accounts as $account)
                                <tr>
                                    <td>{{ $account->id }}</td>
                                    <td>{{ $account->login }}</td>
                                    <td>{{ $account->phone }}</td>
                                    <td class="td-actions">
                                        {!! Form::open(['method' => 'get', 'route' => ['back.users.edit', $account->id]]) !!}
                                        <button class="btn btn-default btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        {!! Form::close() !!}

                                        {!! Form::open(['method' => 'delete', 'route' => ['back.users.destroy', $account->id], 'data-confirm' => trans('messages.confirm'), 'data-title' => trans('messages.confirm-title'), 'data-type' => 'warning']) !!}
                                        <button class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">@lang('messages.no-records')</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $accounts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection