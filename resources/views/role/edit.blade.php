<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4" style="width:40%;">
                    <div class="card-header">
                        <h1>Roles Edit Form</h1>
                    </div>
                    <div class="card-body bordered">
                        <form action="{{ route('roles.update',$role) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="">Name:</label><br>
                            <input type="text" name="name" class="mt-3 mb-2 rounded" value="{{ $role->name }}" placeholder="Enter Role Name">
                            <br>
    
                            <label for="">Guard Name:</label><br>
                            <input type="text" name="guard_name" class="mt-3 mb-3 rounded" value="{{ $role->guard_name }}" placeholder="Enter Guard Name">
                            <br>
    
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                        <a href="{{ route('roles.index') }}" class="btn btn-info mt-4">Back To List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>