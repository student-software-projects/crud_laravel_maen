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
        <div class="col-md-4">
            <form action="{{route('company.store')}}" method="POST">
                @csrf
                <div class="form-group mt-4">
                    <label for="name">Compañia</label>
                    <select name="" id="" class="form-control" required>
                        @foreach($company as $company)
                            <option value="{{ $company->id }}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nit">Tipo de Producto</label>
                    <input name="nit" id=" nit" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Direccion de la Empresa</label>
                    <input name="address" id="address" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Guardar Nueva Empresa</button>
                <a class="btn btn-sm btn-danger" href="{{route('company.index')}}">Cancelar</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
