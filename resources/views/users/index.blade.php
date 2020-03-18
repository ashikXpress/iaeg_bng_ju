@extends('layouts.admin')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <div class="card-title">
                            <h4 class="pull-left">User Management </h4>
                            <div class="pull-right">

                                @can('user-create')

                                    <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>

                                @endcan

                            </div>
                        </div>

                    </div>
                </div>
                <div class="iq-card-body">
                    @if ($message = Session::get('success'))

                        <div class="alert alert-success">

                            <p>{{ $message }}</p>

                        </div>

                    @endif
                    <table class="table">
                        <thead>
                        <tr>

                            <th>No</th>

                            <th>Name</th>

                            <th>Email</th>

                            <th>Roles</th>

                            <th width="280px">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $key => $user)

                            <tr>

                                <td>{{ ++$i }}</td>

                                <td>{{ $user->name }}</td>

                                <td>{{ $user->email }}</td>

                                <td>

                                    @if(!empty($user->getRoleNames()))

                                        @foreach($user->getRoleNames() as $v)

                                            <label class="badge badge-success">{{ $v }}</label>

                                        @endforeach

                                    @endif

                                </td>

                                <td>
                                    @can('user-list')
                                        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                    @endcan
                                    @can('user-edit')
                                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                    @endcan
                                    @can('user-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}


                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    @endcan

                                    {!! Form::close() !!}

                                </td>

                            </tr>

                        @endforeach

                        </tbody>
                    </table>

                        {!! $data->render() !!}
                </div>
            </div>
        </div>
    </div>


@endsection
