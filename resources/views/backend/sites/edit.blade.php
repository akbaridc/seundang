@extends('templates.backend.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="/backoffice/site/update/{{ $resource->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-6">
                                <p>Nama</p>
                                <input type="text" value="{{ $resource->name }}" class="form-control" name="name">
                            </div>
                            <div class="col-6">
                                <p>About Us</p>
                                <input type="text" value="{{ $resource->about }}" class="form-control" name="about">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <p>Site Keyword</p>
                                <input type="text" value="{{ $resource->site_keywords }}" class="form-control"
                                    name="site_keywords">
                            </div>
                            <div class="col-6">
                                <p>Deskripsi</p>
                                <input type="text" value="{{ $resource->description }}" class="form-control"
                                    name="description">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <p>Alamat</p>
                                <input type="text" value="{{ $resource->address }}" class="form-control" name="address">
                            </div>
                            <div class="col-6">
                                <p>Nomor Telepon</p>
                                <input type="number" value="{{ $resource->phone }}" class="form-control" name="phone">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <p>No. Whatsapp</p>
                                <input type="number" value="{{ $resource->whatsapp }}" class="form-control"
                                    name="whatsapp">
                            </div>
                            <div class="col-6">
                                <p>Email</p>
                                <input type="email" value="{{ $resource->email }}" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <p>Link Facebook</p>
                                <input type="text" value="{{ $resource->facebook_link }}" class="form-control"
                                    name="facebook_link">
                            </div>
                            <div class="col-6">
                                <p>Instagram Link</p>
                                <input type="text" value="{{ $resource->instagram_link }}" class="form-control"
                                    name="instagram_link">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <p>Link Twitter</p>
                                <input type="text" value="{{ $resource->twitter_link }}" class="form-control"
                                    name="twitter_link">
                            </div>
                            <div class="col-6">
                                <p>Link Youtube</p>
                                <input type="text" value="{{ $resource->youtube_link }}" class="form-control"
                                    name="youtube_link">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <p>Logo</p>
                                <input type="file" value="{{ $resource->logo }}" class="form-control" name="logo">
                            </div>

                        </div>

                    </div>
                    <div class="m-4">
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
