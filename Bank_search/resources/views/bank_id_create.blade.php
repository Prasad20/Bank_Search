<html>

<body>

    @if($errors==0 )
        <h1>Already Name Exists</h1>

    @endif

    <form action="/bank_id" method="POST" >
    @csrf
    <input type="text" name="bank_name" placeholder="bank_name">

    <input type="submit">

    </form>


</body>


</html>