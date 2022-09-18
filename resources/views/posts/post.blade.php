@extends('layouts.app')
@section('title', 'Profile')

@section('content')

    <div class="col-12 grid-margin">
        <!-- middle wrapper start -->


                            <div class="card rounded">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">

                                            @if ($users->image != null)
                                                <img class="img-xs rounded-circle"
                                                    src="{{ asset('storage/' . $users->image) }}" alt="profile">
                                            @else
                                                <img class="img-xs rounded-circle"
                                                    src="{{ asset('auth/images/hamada.png') }}" alt="profile">
                                            @endif
                                            <div class="ml-2">

                                                <p class="tx-11 text-muted">
                                                    <font color="black"><b>{{ $users->fname }}&nbsp;{{ $users->lname }}</b>
                                                    </font><br>
                                                    {{ $post->created_at->format('y-m-d')}}<br>{{ $post->created_at->format('h:m') }}

                                                    
                                                </p>
                                            </div>
                                        </div>
                                        @if (auth()->user() == $post->user)
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="dropdownMenuButton2"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-horizontal icon-lg pb-3px">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="19" cy="12" r="1"></circle>
                                                        <circle cx="5" cy="12" r="1"></circle>
                                                    </svg>
                                                </button>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">

                                                    {{-- Edit post --}}
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="{{ route('post.edit', $post->id) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-edit-2 icon-sm mr-2">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg> <span class="">Edit article</span></a>

                                                    {{-- Delete post --}}
                                                    <a class="dropdown-item d-flex align-items-center" href="#">


                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-activity">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg>
                                                        <form action="/post/{{ $post->id }}" method="post">
                                                            @csrf
                                                            @method('Delete')
                                                            <input type="submit" class="btn btn-link" value="Delete Post">
                                                        </form>
                                                    </a>


                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>


                                    <div class="card-body">
                                        <h1 class="mb-3 " >{{ $post->title }}</h1>
                                        <h3 class="mb-3" >{{ $post->desc }}</h3>
                                        <p class="mb-3">{{ $post->body }}</p>
                                        @if ($post->image)
                                            <img style="width: 100%" src="{{ asset('storage/' . $post->image) }}"
                                                alt="">
                                        @endif
                                    </div>



                            </div>









@endsection
