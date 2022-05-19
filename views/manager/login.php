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
            <h1>Login to manage your product</h1>
        </div>
        <div class="card-body">
            <form action="?method=manager&action=confirm-login" method="post">
                <div class="form-group">
                    <label for="">Email: </label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password: </label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
        <a href="?method=manager&action=add">Have not got an account?</a>
        <br>
        <br>
        <a href="http://localhost/project/public/">Back to home</a>
    </div>
</body>
</html>