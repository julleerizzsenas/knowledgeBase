
<div class="x_title">
    <h2><b>{{ $post->topicname }}</b>
        <i class="small">by {{ $post->user->firstname." ".$post->user->lastname }}</i></h2>

        <ul class="nav pull-right panel_toolbox">

            <i class="fa fa-comments-o fa-lg green">&nbsp;{{$post->comments->count()}}</i>&nbsp;&nbsp;&nbsp;
            <i class="fa fa-eye fa-lg green">&nbsp;{{$post->tags->count()}}</i>
        </ul>             
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="dashboard-widget-content">
            <ul class="list-unstyled timeline widget">
                <li>
                    <div class="block">
                        <div class="block_content">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;{{ str_limit($post->description, $limit = 300, $end = ' ...') }}
                                <p class="pull-right"> Date Published: <i class="green">{{ $post->updated_at->toFormattedDateString() }}</i>
                                </p>
                            </p>
                            <br>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    