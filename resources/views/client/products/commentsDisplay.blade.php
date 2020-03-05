@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:50px;" @endif>
        <strong class="profile_user"><img style="width: 50px" src="{{ $comment->user->avatar }}" alt=""></strong>
        <strong class="profile_user">{{ $comment->user->name }}</strong>
        <p class="content_comment" style="margin-left:60px;">{{ $comment->content }}</p>
        @if($comment->parent_id == null)
            <a class="reply"><i class="fa fa-comments" aria-hidden="true"></i> Reply</a>
        @endif
        @if($comment->parent_id == null)
            <div class="hidden_cmt">
                <form method="post" action="{{ route('comments.store') }}">
                    @csrf
                    <div class="form-group">
                        <input style="width: 80%; display: inline; margin-left: 10px;" type=text name=content class="form-control input_reply" />
                        @if (Auth::check())
                            <button id="" class=" button submit" title="Submit Review" type="submit" value="Reply"><span><i class="fa fa-comments" aria-hidden="true"></i> Reply</span></button>
                        @else
                        <button id="" class=" button submit" title="Submit Review" type="button" value="Reply" data-toggle="modal" data-target="#login-modal"><span><i class="fa fa-comments" aria-hidden="true"></i> Reply</span></button>
                        @endif
                        <input type=hidden name=product_id value="{{ $product_id }}" />
                        <input type=hidden name=parent_id value="{{ $comment->id }}" />
                    </div>
                </form>
            </div>
        @endif
        <hr>
        @include('client.products.commentsDisplay', ['comments' => $comment->comments])
    </div>
@endforeach