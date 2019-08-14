@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Table</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <table class="table table-bordered">
                                <tr align="center">
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Active</th>
                                </tr>

                                @foreach($users as $user)
                                    <tr align="center">
                                        <td>{{$user->name}}</td>
                                        <td>
                                            <a href="{{url("users/$user->id")}}">
                                                {{$user->title}}
                                            </a>
                                        <td>
                                            <form action="{{url("users/$user->id")}}" method="post">
                                                {{csrf_field()}}
                                                @method('DELETE')

                                                <a class="btn btn-outline-primary" href="{{url("users/$user->id/edit")}}">
                                                    Edit
                                                </a>

                                                <button class="btn btn-outline-danger" type="submit" value="Delete">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
