<link rel="stylesheet" href="/backend/css/bootstrap.min.css"/>
<h1>Model</h1>
<ul>
    @foreach($tests as $test)
    <li>{{$test->name}}</li>
    @endforeach
</ul>
{{$tests->links("pagination::bootstrap-4")}}