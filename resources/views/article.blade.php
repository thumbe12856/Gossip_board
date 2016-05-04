@extends("init")

@section("css")
    <title>Gossip Board</title>
    <link href="{{url('/assets/css/article.css')}}" rel="stylesheet" type="text/css">
    <link href="/assets/css/general.css" rel="stylesheet" type="text/css">
@endsection


@section("content")
    <br/><br/><br/><br/>
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="container z-depth-3">
                <div id="update_article_div" class="right">
                </div>
                <div  id="article_container" class="card">
                    <div class="card-action right">
                        <img id="option_article" src="/assets/img/expand-button.png" class="dropdown-button" data-activates="update_article"/>
                        <!--<i id="option_article" class="dropdown-button" data-activates='update_article'>123</i>-->
                        <ul id='update_article' class='dropdown-content'>
                            <li><a href="#!">Edit</a></li>
                            <li class="divider"></li>
                            <li><a href="#!">Delete</a></li>
                        </ul>

                    </div>
                    <div class="card-content black-text">
                        <h1 class="card-title">Title</h1>
                        <div class="author_div right right-align">
                            <i class="account_box material-icons prefix">account_box</i>
                            <span class="author">Author</span><br/>
                            <span class="updated_at">2016-04-11 16:00:00</span>
                        </div>
                        <div class="card-content row">
                            <div class="article_content s12 col">
                                <p>content</p>
                            </div>
                            <div class="input-field s12 col">
                                <i class="material-icons prefix">account_box</i>
                                <textarea class="reply_content reply materialize-textarea"></textarea>
                                <i class="check_reply material-icons right" data-aid="1">send</i>
                                <label for="reply">reply</label>
                            </div>
                            <div class="reply_record s12 col">
                                <p class="row">
                                    <span class="author s2 col right-align">Author</span>
                                    <span class="reply_content s7 col left-align">
                                        <span>
                                            reply content
                                        </span>
                                    </span>
                                    <span class="s3 col right-align">2016-04-11 16:00:00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("js")
    <script src="{{url('/assets/js/index.js')}}"></script>
@endsection