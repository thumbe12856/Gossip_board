@extends("init")

@section("css")
    <title>test page</title>
    <link href="{{url('/assets/css/test.css')}}" rel="stylesheet" type="text/css">
@endsection


@section("content")
    <h1>hello test1</h1>
    @for($i=0; $i<count($data); $i++)
        <h1> {{$data[$i]->id}} </h1>
    @endfor

    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">First Name</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel" class="validate">
                    <label for="icon_telephone">Telephone</label>
                </div>
            </div>
        </form>
    </div>


@endsection

@section("js")
    <script src="{{url('/assets/js/test.js')}}"></script>
@endsection