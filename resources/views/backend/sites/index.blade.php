@extends('templates.backend.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-between mb-6">
                        <div class="col">
                            <h4 class="card-title ">Site</h4>
                        </div>
                        <div class="col-auto">
                            <a href="" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h6 class="mt-2">Nama</h6>
                            <p>{{ $resource->name ?? '-' }}</p>

                            <h6>Deskripsi</h6>
                            <p>{{ $resource->description ?? '-' }}</p>

                            <h6>About Us</h6>
                            <p>{{ $resource->about_us ?? '-' }}</p>

                            <h6>Site Keywords</h6>
                            <p>{{ $resource->site_keywords ?? '-' }}</p>

                            <h6>Alamat</h6>
                            <p>{{ $resource->address ?? '-' }}</p>

                            <h6>Nomor Telepon</h6>
                            <p>{{ $resource->phone_number ?? '-' }}</p>

                            <h6>Whatsapp</h6>
                            <p>{{ $resource->whatsapp ?? '-' }}</p>

                            <h6>Email</h6>
                            <p>{{ $resource->email ?? '-' }}</p>

                            <h6>Facebook</h6>
                            <p>{{ $resource->facebook_link ?? '-' }}</p>

                            <h6>Instagram</h6>
                            <p>{{ $resource->instagram_link ?? '-' }}</p>

                            <h6>Twitter</h6>
                            <p>{{ $resource->twitter_link ?? '-' }}</p>

                            <h6>Youtube Link</h6>
                            <p>{{ $resource->youtube_link ?? '-' }}</p>
                        </div>
                        <div class="col-4">
                            <h6>Logo</h6>
                            <img src="{{ $resource->logo ?? '-' }}" alt="" class="img-fluid">
                        </div>
                    </div>


                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
