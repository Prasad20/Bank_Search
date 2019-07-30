<!DOCTYPE html>
<html>

<body>

<h1> Bank Search</h1>

   @if(count($code))

       <h2>Bank Name: {{$name}}</h2>

           @foreach($code as $data)

                <li> {{$data->code}} {{$data->adr}}</li>

            @endforeach
  @endif

</body>

</html>