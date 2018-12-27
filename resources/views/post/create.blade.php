@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new post</div>
                    <div class="panel-body">
                        <form action="{{ route('post.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Title : </label>
                                <input type="text" placeholder="Title" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>Content : </label>
                                <textarea class="form-control" cols="30" rows="10" name="content">

                                </textarea>
                            </div>
                            <div class="form-group">
                                <label>Feature : </label>
                                <input class="form-control" type="file" name="image" />
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success" type="submit">Store post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection