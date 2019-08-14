@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">View</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <label>Name</label>
                            <input class="form-control mb-2" type="text" value="{{$users->name}}" readonly/>
                            <label>Title</label>
                            <input class="form-control mb-2" type="text" value="{{$users->title}}" readonly/>
                            <label>Content</label>
                            <textarea class="form-control mb-2" readonly>
                                {{$users->content}}
                            </textarea>


                    </div>
                </div>

                <br>

                <form action="{{url("users/$users->id")}}" method="post">
                    <div class="card">
                        <div class="card-header">Comment</div>
                        <div class="card-body">
                            <textarea class="form-control mb-2"></textarea>
                            <input class="btn btn-primary" type="submit" value="Comment"/>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
