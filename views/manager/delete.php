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
        <h2>Are you sure to delete your account?</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                </tr>
            </thead>
            <tbody>
<?php
    echo '
        <tr>
            <td>'.$manager->fullname.'</td>
            <td>'.$manager->email.'</td>
            <td>'.$manager->age.'</td>
            <td>'.$manager->sex.'</td>
            <td>'.$manager->birthday.'</td>
        </tr>';
?>
            </tbody>
        </table>
        <form action="?method=manager&action=confirm-delete" method="post">
            <input type="text" name="id" style="display: none" value="<?=$manager->id?>">
            <button class="btn btn-danger">Confirm Delete</button>
        </form>
    </div>
</body>
</html>