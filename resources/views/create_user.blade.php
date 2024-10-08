<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggie Armelia - Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #f8cfd4, #fdf3b4); 
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f9d7da;
            color: #333; 
            border-bottom: none;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
        .btn-primary {
            background-color: #f9d7da; 
            border: none;
            color: #333;
            width: 150px; 
            margin: 0 auto;
            display: block; 
        }
        .btn-primary:hover {
            background-color: #f8bcbc;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Create User</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama" required>
                            </div>
                            <div class="form-group">
                                <label for="npm">NPM:</label>
                                <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM" required>
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas:</label>
                                <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Masukkan kelas" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
