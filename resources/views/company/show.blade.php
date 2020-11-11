<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0. maximun-scale=1.0 minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>TIENDA VIRTUAL</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th scope="col">NOMBRE</th>
                        <td>{{ $company->name }}</td>
                    </tr>
                    <tr>
                        <th scope="col" >NIT</th>
                        <td>{{ $company->nit }}</td>
                    </tr>
                    <tr>
                        <th scope="col" >DIRECCIÓN</th>
                        <td>{{ $company->address }}</td>
                    </tr>
                    <tr>
                        <th scope="col">CREACIÓN</th>
                        <td>{{ $company->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="col">ACTUALIZACION</th>
                        <td>{{ $company->updated_at }}</td>
                    </tr>
                </table>
                <a class="btn btn-primary btn-sm" href="{{ route('company.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>


</body>
</html>
