@extends('layouts.app')

@section('content')
    <div class="container" style="">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pe-3">
                            <img src="{{ $post->user->profile->profileImage() }}" alt=""
                                class="w-100 rounded-circle" style="max-width: 40px;">
                        </div>
                        <div>
                            <div><b><a href="/profile/{{ $post->user->id }}" style="text-decoration: none;"><span
                                            class="text-dark pe-1">{{ $post->user->username }}</span></a> •
                                    <a href="#" class="ps-1">Follow</a>
                                </b></div>
                        </div>
                    </div>

                    <hr>

                    <p><span><b><a href="/profile/{{ $post->user->id }}" style="text-decoration: none;"><span
                                        class="text-dark">{{ $post->user->username }}</span></a></b></span>
                        {{ $post->caption }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
