@extends('layouts.app')
@section('title' ,'Home')


@section('content')

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
        @endif
        @if (session()->has('error'))
        <div class="alert alert-danger">
            {{session()->get('error')}}
        </div>
        @endif
        <ul class="timeline">
            @if (count($posts)>0)
            @foreach ($posts as $post)

            <li>
                <!-- begin timeline-time -->
                <div class="timeline-time">
                <span class="date">{{ $post->created_at->format('Y-m-d') }}</span>
                    <span class="time">{{ $post->created_at->format('h:m') }}</span>



                    
                </div>
                <!-- end timeline-time -->
                <!-- begin timeline-icon -->
                <div class="timeline-icon">
                    <a href="javascript:;">&nbsp;</a>
                </div>
                <!-- end timeline-icon -->
                <!-- begin timeline-body -->
                <div class="timeline-body">
                    <div class="timeline-header">

                    @if($post->user->image != null)

                        <img class="userimage" src="{{asset('storage/'.$post->user->image)}}" alt="profile">
                        @else

                        <img class="userimage" src="{{asset('auth/images/hamada.png')}}" alt="profile">
                        @endif
                        <span class="username">{{$post->user->fname}}&nbsp;{{ $post->user->lname }}</span>
                    </div>
                    <a href="{{ route('post.show',$post->id) }}">

                    <div class="timeline-content">
                        <h3 style="color:black">{{ $post->title }}</h3>
                        <p style="color:black">
                            {{$post->desc}}
                         </p>


                        @if ($post->image)
                        <img class="img-fluid" src="{{asset('storage/'.$post->image)}}" alt="">

                        @endif
                    </div>
                </a>


                </div>
                <!-- end timeline-body -->
            </li>
            @endforeach
            @else
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card rounded">
                        <div class="card-header">

                        </div>

                        <div class="card-body">
                            <p class="mb-3 tx-14"> <b> Theres no articles Yet</b> </p>
                            {{-- 7ot hena if 3la sora ya hamadaa--}}
                        </div>
                        <div class="card-footer">


                        </div>
                    </div>
                </div>

            </div>
            @endif




        </ul>
    </div>

    <style type="text/css">

    </style>

    <script type="text/javascript">

    </script>
</body>

</html>

@endsection
