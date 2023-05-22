</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">

        <form action="{{url('/users/2')}}" method="POST" autocomplete="off">
            @method('PUT')

            @csrf


            <div class="form-group">
                    <label for="first_name my-2">Primeio Nome</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="Gustavo">
            </div>

            <div class="form-group my-2">
                <label for="last_name">Segundo Nome</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="web">
            </div>

            <div class="form-group my-2">
                <label for="email ">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="gustavo@web.com.br">
            </div>

            <button class="btn btn-primary my-2">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
