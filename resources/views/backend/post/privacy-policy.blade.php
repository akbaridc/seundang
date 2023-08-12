@extends('templates.backend.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col">
                            <h4 class="card-title">Privacy n Policy</h4>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('backoffice.post.edit', strtolower($post->type)) }}"
                                class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                    <p>Description</p>
                    <p>{!! $post->content !!}</p>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
