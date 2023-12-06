@extends('layouts.app')

@section('content')
    <div class="container" style="width: 60%">
        <div class="row">
            <div class="col-3 pt-5 pb-5">
                <img src="{{ $user->profile->profileImage() }}"
                    class="rounded-circle w-100" style="width: 150px">
            </div>
            <div class="col-9 p-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h4">{{ $user->username }}</div>

                        {{-- From FollowButton.vue --}}
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>

                    @can('update', $user->profile)
                        <a href="/p/create">Add new post</a>
                    @endcan
                </div>

                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
                @endcan

                <div class="d-flex">
                    <div class="pe-5"><strong>{{ $postCount }}</strong> posts</div>
                    <div class="pe-5"><strong>{{ $followersCount }}</strong> followers</div>
                    <div class="pe-5"><strong>{{ $followingCount }}</strong> following</div>
                </div>
                <div class="pt-4"><b>{{ $user->profile->title }}</b></div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>

            <div class="row">
                @foreach ($user->posts as $post)
                    <div class="col-4 pb-4">
                        <a href="/p/{{ $post->id }}">
                            <img src="/storage/{{ $post->image }}" class="w-100" />
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
