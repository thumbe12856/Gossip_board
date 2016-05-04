@extends("init")

@section("css")
    <title>Gossip Board</title>
    <link href="{{url('/assets/css/index.css')}}" rel="stylesheet" type="text/css">
    <link href="/assets/css/general.css" rel="stylesheet" type="text/css">
@endsection


@section("content")
    <nav id="index_nav">
        <div class="nav-wrapper">
            <i id="show_side_nav" class="material-icons left">view_list</i>
            <a href="/" class="brand-logo center">Gossip Board</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="dropdown-button" href="#!" data-activates="logoutDropdown">Hello {{Auth::user()->name}}!<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
        <ul id="logoutDropdown" class="dropdown-content">
            <li><a class="modal-trigger" href="#create_article_modal">發表新主題</a></li>


            <li><a href="#">所有文章列表</a></li>
            <li><a href="#">您近期更新/<br/>被留言的文章</a></li>
            <li class="divider"></li>
            <li><a href="/auth/logout">Logout</a></li>
        </ul>
    </nav>

    <div id="index_container" class="center container">
        <br/><br/>
        <ul class="collapsible popout" data-collapsible="accordion">
            <li class="row">
              <div class="collapsible-header">
                  <span class="s3 col left-align">發表日期</span>
                  <span class="s2 col left-align">Author</span>
                  <span class="s2 col left-align">Title</span>
                  <span class="s2 col center">回覆</span>
                  <span class="s3 col left-align">最後更新</span>
              </div>
            </li>
            @for($i=0; $i<count($articleData); $i++)
                @if($articleData[$i]->status == 0)
                    <li class="row">
                        <div class="collapsible-header">
                            <span class="s3 col left-align">{{$articleData[$i]->created_at}}</span>
                            <span class="s2 col left-align">{{$articleData[$i]->name}}</span>
                            <span class="s2 col left-align">{{$articleData[$i]->title}}</span>
                            <span class="s2 col">
                                <span class="chip">
                                    {{count($articleData[$i]->reply)}}
                                </span>
                            </span>
                            <span class="s3 col left-align">{{$articleData[$i]->latestDate}}</span>
                        </div>
                        <div class="collapsible-body row">
                            <div class="article_content s12 col">
                                <p class="content left-align">
                                    <a class="single_page_link" href="article/{{$articleData[$i]->id}}"><i class="material-icons right">input</i></a>
                                    @for($k=0; $k<strlen($articleData[$i]->content); $k++)<!--
                                        -->@if($articleData[$i]->content[$k] == "\n")<br>@else{{$articleData[$i]->content[$k]}}@endif<!--
                                    -->@endfor
                                </p>
                            </div>
                            <div class="input-field s12 col">
                                <i class="material-icons prefix">account_box</i>
                                <!--<input class="reply_content reply" type="text" name="reply">-->
                                <textarea class="reply_content reply materialize-textarea"></textarea>
                                <i class="check_reply material-icons right" data-aid="{{$articleData[$i]->id}}">send</i>
                                <label for="reply">reply</label>
                            </div>
                            <div class="reply_record s12 col">
                                @for($j=0; $j<count($articleData[$i]->reply); $j++)
                                    <p class="row">
                                        <span class="author s1 col left-align">{{$articleData[$i]->reply[$j]->name}}</span>
                                        <span class="reply_content s8 col left-align">
                                            <span>
                                                @for($k=0; $k<strlen($articleData[$i]->reply[$j]->content); $k++)<!--
                                                    -->@if($articleData[$i]->reply[$j]->content[$k] == "\n")<br>@else{{$articleData[$i]->reply[$j]->content[$k]}}@endif<!--
                                                -->@endfor
                                            </span>
                                        </span>
                                        <span class="s3 col right-align">{{$articleData[$i]->reply[$j]->created_at}}</span>
                                    </p>
                                @endfor
                            </div>
                        </div>
                    </li>
                @endif
            @endfor
        </ul>
    </div>


    <!-- create article modal -->
    <div id="create_article_modal" class="modal">
        <div class="modal-content">
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s11">
                        <i class="material-icons prefix">subtitles</i>
                        <input id="create_article_title" type="text" class="validate">
                        <label for="create_article_title">Title</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="input-field col s11">
                        <i class="material-icons prefix">translate</i>
                        <textarea id="create_article_content" class="materialize-textarea"></textarea>
                        <label for="create_article_content">Content</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a id="check_create_article" class=" modal-action modal-close waves-effect waves-green btn-flat">Done<i class="material-icons right">send</i></a>
        </div>
    </div>


    <!--side nav-->
    <ul id="side_nav" class="side-nav fixed" style="transform: translateX(0px);">
        <li class="bold"><a href="about.html" class="waves-effect waves-teal">所有文章列表</a></li>
        <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">您近期更新/被留言的文章 Started</a></li>
    </ul>
    <div id="hide_side_nav"></div>

@endsection

@section("js")
    <script src="{{url('/assets/js/index.js')}}"></script>
@endsection