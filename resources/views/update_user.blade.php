<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="text-center">
            <h1>Update User</h1>
            <div class="row">
                <div class="col-md-12">
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach
                    <form action="/updateUser" method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label class="form-check-label"> User ID : {{$users->id}}</label>
                            <input type="hidden" class="form-control" name="id" value="{{$users->id}}" />
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Enter the Name" value="{{$users->name}}" />
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="address" placeholder="Enter the Address" value="{{$users->address}}">
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
                            <input type="text" class="form-control" name="position" placeholder="Enter the Position" value="{{$users->position}}">
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2 d-md-block" role="group" aria-label="Basic example">
                                <button type="submit" class="btn btn-success" style="width:90px">UPDATE</button>
                                <a href="/" class="btn btn-danger" style="width:90px">CANCEL</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>