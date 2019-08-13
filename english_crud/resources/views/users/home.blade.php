@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Index</div>

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
                            </tr>

                            @foreach($users as $user)
                                <tr align="center">
                                    <td>{{$user->name}}</td>
                                    <td>
                                        <a href="{{url("users/$user->id")}}">
                                            {{$user->title}}
                                        </a>
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
