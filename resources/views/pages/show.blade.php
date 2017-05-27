@extends('layouts.master')
@section('title' , 'Topics')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><b>{{ $post->topicname }}</b>
          <i class="small">by {{ $post->user->firstname." ".$post->user->lastname }}</i>
        </h2>
        <ul class="nav pull-right panel_toolbox">
          <li>{{$post->created_at->diffForHumans()}} &nbsp;</li>
          <li><i class="fa fa-comments-o fa-lg" aria-hidden="true">{{$tcomments}}</i>&nbsp;&nbsp;&nbsp;</li>
          <li><i class="fa fa-eye fa-lg">{{$ttags}}</i></li>
        </ul> 
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <div class="dashboard-widget-content">
          {{$post->description}} 

          <hr>

          @if(count($post->tags))
          <ul class="menu ul">
            @foreach($post->tags as $tag)
            <i class="fa fa-tag"></i>
            <li class="menu li">
              <a href="/posts/tags {{ $tag->name }}"><i class="green">
                {{ $tag->name }}&nbsp;&nbsp;&nbsp;
              </i>
            </a>
          </li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>

  </div>
</div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="comments">
    <ul class="list-group">
      @foreach ($post->comments as $comment)
      <li class="list-group-item">
        <strong><i class="green">{{ $comment->user->firstname." ".$comment->user->lastname }}:&nbsp;</i></strong>
        {{$comment->comments}}
        <small class="nav pull-right panel_toolbox">{{$comment->created_at->diffForHumans()}}</small>
      </li>
      @endforeach
    </ul>
    <br>
  </div>
</div>

<div class="card">
  <div class="card-block">
    <form method="POST" action="/posts/{{$post->id}}/comments">
      {{csrf_field()}}
      <div class="form-group">
        <textarea name="comments" placeholder="Your comment here." class="form-control"></textarea>
      </div>

      
{{--       <div class="x_content">
        <div id="alerts"></div>
        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font" aria-expanded="false"><i class="fa fa-font"></i><b class="caret"></b></a>
            <ul class="dropdown-menu">
            </ul>
          </div>

          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a data-edit="fontSize 5">
                  <p style="font-size:17px">Huge</p>
                </a>
              </li>
              <li>
                <a data-edit="fontSize 3">
                  <p style="font-size:14px">Normal</p>
                </a>
              </li>
              <li>
                <a data-edit="fontSize 1">
                  <p style="font-size:11px">Small</p>
                </a>
              </li>
            </ul>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
            <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
            <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
            <div class="dropdown-menu input-append">
              <input class="span2" placeholder="URL" type="text" data-edit="createLink">
              <button class="btn" type="button">Add</button>
            </div>
            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" title="Insert picture (or just drag &amp; drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
          </div>
        </div>

        <div id="editor-one" class="editor-wrapper placeholderText" contenteditable="true">
          <textarea id="comments" class="form-control" name="comments" style="display:none;"></textarea>
        </div> --}}

<br>

      <div class = "form-group">
        <button type="submit" class="btn btn-primary">Add Comment</button>
      </div>
    </form>
  </div>
</div>

<div class="row pull-right">
  <h4><u><a href="/dashboard"><i class="fa fa-long-arrow-left">&nbsp;</i>Return to Dashboard</a></u></h4>
</div>

{{-- </div> --}}
@endsection