@extends('ui.master')
@section('title', 'index')
@section('ui-content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- ABOUT ME & SKILLS SECTION-->
                    <div class="aboutme">
                        <div class="row">
                            <div class="col-md-5">
                                <br>
                                <h3 class="text-center">ABOUT ME</h3>
                                <br>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat fugiat soluta
                                    consectetur reprehenderit facere, quis error quidem harum quam laborum inventore quasi
                                    minima ipsum asperiores laboriosam ipsa enim dolor perferendis.
                                </p>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat fugiat soluta
                                    consectetur reprehenderit facere, quis error quidem harum quam laborum inventore quasi
                                    minima ipsum asperiores laboriosam ipsa enim dolor perferendis.
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="total-project mb-2">
                                            <i class="fa fa-project-diagram"></i>
                                            <br>
                                            <strong>5</strong>
                                            <p class="text-center">Total Projects</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="total-student">
                                            <i class="fas fa-users"></i>
                                            <br>
                                            <strong>
                                                @if($studentcounts)
                                                {{$studentcounts->count}}
                                            @endif
                                        </strong>
                                            <p class="text-center">Total Students</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <br>
                                <h4 class="text-center">MY SKILLS</h4>
                                <br>
                                @foreach($skills as $skill)
                                <div class="row mt-3">
                                    <div class="col-md-9">
                                        <div class="progress mt-2" style=" border: 1px solid gray;">
                                            <div class="progress-bar" style="width: {{$skill->percent}}%;" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100">
                                               {{$skill->percent}}%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        {{$skill->name}}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <!-- MY PROJECTS SECTION -->
                    <h2 class="text-center">MY PROJECTS</h2><br>
                    <div class="row">
                        @foreach($projects as $project)
                        <div class="col-sm-6 col-md-4 mb-3">
                           <div class="project-div">
                            <i class="fa fa-project-diagram"></i> <a href="{{$project->url}}">{{$project->name}}</a>
                           </div>
                        </div>
                        @endforeach
                    </div>

                    <br><br><br>
                    <!-- LATEST POSTS SECTION  -->
                    <h2 class="text-center">LATEST POSTS FROM BLOGS</h2>
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-sm-6 col-md-4">
                            <a href="{{url('/post/'.$post->id.'/detail')}}">
                                <div class="latest-post">
                                    <img src="{{asset('storage/post-images/'.$post->image)}}" style="width:100% ;height:300px;"
                                        alt="">
                                    <small> {{date('D-M-Y',strtotime($post->created_at))}}</small>
                                    <p class="text-dark"><strong>{{$post->title}}</strong></p>
                                    <P style="text-align: justify; color:black">
                                        {{substr($post->content,0,200)}}
                                    </P>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
