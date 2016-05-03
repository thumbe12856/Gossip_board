@extends("init")

@section("css")
    <title>Gossip Board</title>
    <link href="{{url('/assets/css/index.css')}}" rel="stylesheet" type="text/css">
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
            <li><a href="#">所有文章列表</a></li>
            <li><a href="#">您近期更新/<br/>被留言的文章</a></li>
            <li class="divider"></li>
            <li><a href="/auth/logout">Logout</a></li>
        </ul>
    </nav>

    <div id="index_container" class="center container">
        <ul class="collapsible popout" data-collapsible="accordion">
            <li class="row">
              <div class="collapsible-header">
                  <span class="s2 col left-align">發表日期</span>
                  <span class="s2 col left-align">Author</span>
                  <span class="s3 col left-align">Title</span>
                  <span class="s2 col center">回覆</span>
                  <span class="s3 col left-align">最後更新</span>
              </div>
            </li>
            <li class="row">
                <div class="collapsible-header">
                  <span class="s2 col left-align">2016-05-02</span>
                  <span class="s2 col left-align">test</span>
                  <span class="s3 col left-align">這是標題</span>
                  <span class="s2 col center">3</span>
                  <span class="s3 col left-align">2016-05-02 16:00:00</span>
                </div>
                <div class="collapsible-body row">
                    <p class="content left-align">這是內容</p>
                    <div class="input-field s12 col">
                        <i class="material-icons prefix">account_box</i>
                        <input type="text" class="reply" name="reply">
                        <label for="reply">回覆</label>
                    </div>
                    <div class="reply_record s12 col">
                        <p class="row">
                            <span class="author s1 col left-align">Author</span>
                            <span class="reply_content s8 col left-align">
                                reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1
                            </span>
                            <span class="s3 col right-align">2016-05-02 16:02:00</span>
                        </p>
                        <p class="row">
                            <span class="author s1 col left-align">Author</span>
                            <span class="reply_content s8 col left-align">
                                reply content2 xreply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1reply content1
                            </span>
                            <span class="s3 col right-align">2016-05-02 16:02:00</span>
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <ul id="side_nav" class="side-nav fixed" style="transform: translateX(0px);">
        <li class="bold"><a href="about.html" class="waves-effect waves-teal">所有文章列表</a></li>
        <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">您近期更新/被留言的文章 Started</a></li>
    </ul>
    <div id="hide_side_nav">
    </div>

@endsection

@section("js")
    <script src="{{url('/assets/js/index.js')}}"></script>
@endsection