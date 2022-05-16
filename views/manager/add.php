<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card-header">
            <h1>Create an account to add manage your product in auctions</h1>
            <br>
        </div>
        <div class="card-body">
            <form action="?method=manager&action=post" method="post">
                <div class="form-group">
                    <label for="">Full Name: </label>
                    <input required type="text" name="fullname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email: </label>
                    <input required type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Age: </label>
                    <input required type="number" name="age" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Sex </label>
                    <input type="radio" name="sex" value="female">Female
                    <input type="radio" name="sex" value="male">Male
                </div>
                <div class="form-group">
                    <label for="">Birthday: </label>
                    <input required type="date" name="birthday" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address: </label>
                    <input required type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password: </label>
                    <input required type="password" name="password" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Create Account</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>