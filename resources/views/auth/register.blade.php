@extends("init")

@section("css")
    <title>sign up</title>
    <link href="{{url('/assets/css/general.css')}}" rel="stylesheet" type="text/css">
@endsection


@section("content")

    <br/><br/><br/><br/>
    <div id="register">
        <div class="formWrapper">
            <form action="{{url("auth/register")}}" method="post">
                {{csrf_field()}}
                <div class="signin-card">
                    <div class="row">
                        <div class="col s12 m4 offset-m4">
                            <div class="card z-depth-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="card-content black-text center-align">
                                            <h1 class="card-title">Create your account</h1>
                                        </div>
                                        <form class="form">
                                            <div class="input-field">
                                                <i class="material-icons prefix">comment</i>
                                                <input type="text" id="Name" name="name" class="form__input">
                                                <label for="Name">Name</label>
                                            </div>
                                            <div class="input-field">
                                                <i class="material-icons prefix">account_box</i>
                                                <input type="text" id="account" name="account" class="form__input">
                                                <label for="account">Choose your username</label>
                                            </div>

                                            <div class="input-field">
                                                <i class="material-icons prefix">lock</i>
                                                <input type="password" id="password" name="password" class="form__input">
                                                <label for="password">Create a password</label>
                                            </div>
                                            <div class="input-field">
                                                <i class="material-icons prefix">lock</i>
                                                <input type="password" id="confirm_password" name="confirm_password" class="form__input">
                                                <label for="confirm_password">Confirm your password</label>
                                            </div>
                                            <div class="card-action center">
                                                <button type="submit" class="btn btn-warning">Sign up<i class="material-icons right">send</i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="center">
                <a href="{{url('/login')}}">
                    <span>Sign in</span>
                </a>
            </div>
        </div>
    </div>



@endsection

@section("js")
    <script>var STATUS = "{{$status}}";</script>
    <script src="{{url('/assets/js/register.js')}}"></script>
@endsection