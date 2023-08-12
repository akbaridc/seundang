@extends('templates.backend.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="/backoffice/post/update/{{ $resource->id }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">{{ $resource->title }}</h4>
                        <p>Description</p>
                        <textarea name="content" id="content" cols="30" rows="10">{{ $resource->content }}</textarea>

                    </div>
                    <div class="m-4">
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
