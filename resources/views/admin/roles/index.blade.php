@extends('layouts.main')

@section('content')
    <div class="row clearfix @if(count($pagination->items()) <= 8) ht-100v @endif">
        <div class="col-md-12 col-lg-12">
            <div class="card mb-4 shadow-1">
                <div class="card-header">
                    <h4 class="card-header-title">
                        {{ __('form.roles.roles') }}
                    </h4>
                    @can('roles.store')
                        <a href="{{ route("roles.create") }}" class="btn btn-outline-success">
                            <i class="fa fa-plus button-2x"> {{ __('form.add') }}</i></a>
                    @endcan
                </div>
                <div class="card-body collapse show" id="collapse2">
                    <table class="table table-striped table-responsive-sm">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('validation.attributes.name') }}</th>
                            <th>{{ __('form.roles.guard_name') }}</th>
                            <th>{{ __('validation.attributes.created_at') }}</th>
                            @canany(['roles.update','roles.delete'])
                                <th>{{ __('form.actions') }}</th>
                            @endcanany
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pagination->items() as $item)
                            <tr>
                                <th scope="row">{{ ($pagination->currentpage()-1) * $pagination->perpage() + $loop->index + 1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->guard_name }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    @can('roles.update')
                                        <a href="{{ route("roles.edit", [$item->id]) }}">
                                            <i class="fa fa-edit text-purple button-2x"></i></a>
                                    @endcan
                                    @can('roles.delete')
                                        <a href="{{ route("roles.delete", [$item->id]) }}" class=""
                                           onclick="return confirm(this.getAttribute('data-message'));"
                                           data-message="{{ __('form.confirm_delete') }}">
                                            <i class="fa fa-trash-o text-danger button-2x"></i>
                                        </a>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <nav class="d-flex justify-content-between">
                        <span>{{ __('form.showed') }}: <b>{{ $pagination->count() }}</b></span>
                        {{ $pagination->links('pagination::bootstrap-4') }}
                        <span>{{ __('form.total') }}: <b>{{ $pagination->total() }}</b></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
