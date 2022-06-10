@extends('ui.master')
@section('title', 'post')
@section('ui-content')
<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12 post-details">
                <img src="{{asset('storage/post-images/'.$post->image)}}" alt="" width="700px" height="300px">
                <br><br>
                <small> 
                    <strong> 
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        Posted On:
                    </strong>
                    {{date('D-M-Y',strtotime($post->created_at))}}
                </small>
                <br>
                <small>
                    <strong>
                       <i class="fa fa-list"></i> Category:
                    </strong>
                    {{$post->category->name}}
                </small>
                <br><br>
                <h5><strong>{{$post->title}}</strong></h5>
                <p style="text-align: justify;">
                    {{$post->content}}
                </p>
                <div>
                   <form method="POST">
                    @csrf
                    <button type="submit" formaction="{{url('post/like/'.$post->id)}}" class="btn btn-sm btn-success like"
                        @if($likeStatus)
                        @if($likeStatus->type == 'like') disabled @endif
                        @endif>
                        <i class="far fa-thumbs-up"></i> Like <span>{{$likes->count()}}</span>
                    </button>
                    <button type="submit" formaction="{{url('post/dislike/'.$post->id)}}" class="btn btn-sm btn-danger like"
                        @if($likeStatus)
                          @if($likeStatus->type == 'dislike') disabled @endif
                          @endif>
                        <i class="far fa-thumbs-down"></i>Dislike <span>{{$dislikes->count()}}</span>
                    </button>
                    <button type="button" class="btn btn-sm btn-info comment" data-toggle="collapse" data-target="#collapseExample">
                        <i class="far fa-comment"></i> Comment <span>{{$comments->count()}}</span>
                    </button>
                   </form>
                </div>
                <br>
                <div class="comment-form">
                    <div class="collapse" id="collapseExample">
                        <form action="{{url('post/comment/'.$post->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <textarea name="comment" id="" cols="30" rows="3" required></textarea>
                                <br>
                                <button class="btn btn-primary btn-sm">
                                    <i class="far fa-paper-plane"></i> Submit
                                </button>
                            </div>
                        </form>
                        <br>
                        @foreach($comments as $comment)
                       
                        <div class="comment-show">
                            <img src="https://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="" width="30px"> {{$comment->user->name}}
                            <div class=" comment-box mt-2">
                              {{$comment->comment}}
                            </div>
                        </div>
                        <br>
                        @endforeach
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection