<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1>User Management</h1>
            <div class="row">
                <div class="col-md-12">
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach
                    <form method="post" action="/saveUser">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Enter the Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="address" placeholder="Enter the Address">
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Male" checked>
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Female">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="position" placeholder="Enter the Position">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn-primary" value="SAVE">
                            <input type="button" class="btn-warning" value="CLEAR">
                        </div>
                    </form>

                    <table class="table table-dark table-hover">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Position</th>
                        <th>Action</th>

                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->position}}</td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>