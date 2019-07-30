<!DOCTYPE html>
<html>

<body>

    <h1> Bank Search</h1>

    <form action="/bank_id/1" method()="GET" >

            <div>

                <div class="radio">

                    <label><input type="radio" name="type" value="ifsc"></label>

                    <input type="text" name="code" placeholder="IFSC code">

                    <br>

                   <label><input type="radio" name="type" value="branch"></label>

                   <input type="text" name="name" placeholder="Bank">

                   <input type="text" name="area" placeholder="Area">

             </div>

        </div>

        <button type="submit">Search</button>

    </form>

    <br>

    <form action="/bank_id_create/" method()="GET">

        <button class="btn btn-primary btn-lg" role="button">Create New Bank</button>

    </form>

</body>

</html>