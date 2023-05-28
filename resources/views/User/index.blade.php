<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <title>Document</title>
        </head>
        <body>
            <div class="container">
                <div class="text-center">
                    <a href="{{ route('user.create') }}" class="btn btn-success m-4">Add User</a>
                </div>
    
                <table class="table text-center">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">channels</th>
                        <th scope="col">subscribers</th>
                        <th scope="col">type</th>
                        <th scope="col">salary</th>
                        <th scope="col">bonus</th>
                        <th scope="col">notification</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->channels }}</td>
                            <td>{{ $user->subscribers }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->salary }}</td>
                            <td>{{ $user->bonus }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('user.notify','email') }}">Email</a>
                                <a class="btn btn-primary" href="{{ route('user.notify','sms') }}">SMS</a> 
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
</html>