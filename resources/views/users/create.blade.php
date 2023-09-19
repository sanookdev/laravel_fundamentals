<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card card-header">
            <div class="card-title">
                User Management
            </div>
            <div class="card-body">
                <a href="{{ url('users') }}" class="btn btn-secondary"> Back</a>
                <form action="{{ url('user') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 mt-2">
                            <input type="text" name="name" class="form-control" placeholder="Your name" />
                        </div>
                        <div class="col-md-12 mt-2">
                            <input type="password" name="password" class="form-control" placeholder="Your password" />
                        </div>
                        <div class="col-md-12 mt-2">
                            <input type="email" name="email" class="form-control" placeholder="Your email" />
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
