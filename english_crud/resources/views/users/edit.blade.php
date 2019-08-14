@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{url("users/$users->id")}}" method="post">
                            {{csrf_field()}}
                            @method('PATCH')
                            <label>ID</label>
                            <input class="form-control mb-2" name="user_id" type="number" value="{{Auth::user()->id}}" readonly/>

                            <label>Name</label>
                            <input class="form-control mb-2" name="name" type="text" value="{{Auth::user()->name}}" readonly/>

                            <label>Title</label>
                            <input class="form-control mb-2" name="title" type="text" value="{{$users->title}}"/>

                            <label>Content</label>
                            <textarea class="form-control mb-2" name="content">{{$users->content}}</textarea>

                            <input class="btn btn-primary" type="submit" value="Edit"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
