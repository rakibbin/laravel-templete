<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<div class="container card card-body">
    <div class="card card-body">
        <div class="card-header bg-warning">
            <h1 class="text-center">Banner Details</h1>
            <a href="{{ route('nav.index') }}" class="btn btn-primary text-left">Back To List</a>
        </div>

        <div class="card card-body">

            <h2>Photo: <img src="{{asset('images/'.$data->photo)}}" alt="title1" height="100" ></h2>
            <h1>Title1: {{ $data->title1 }}</h1>
            <h1>Title2: {{ $data->title2 }}</h1>
            <h1>Content: {{ $data->content }}</h1>
            <h1>Btn: {{ $data->btn}}</h1>
        </div>
    </div>

</div>