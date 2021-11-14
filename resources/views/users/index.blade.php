<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Lista de usuarios - CRUD</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Correo
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead> 
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->id }}                                        
                                        </td>
                                        <td>                                        
                                            {{ $user->name }}                                        
                                        </td>
                                        <td>                                        
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            <form action="{{ route('user.destroy',$user) }}" method="POST">
                                                @method('DELETE')
                                                @csrf

                                                <input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Desea eliminar el registro?')">

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach   
                            </tbody>                               
                        </table>
                </div>
            </div>                
        </div>        
    </body>
</html>
