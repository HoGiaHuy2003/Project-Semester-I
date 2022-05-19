<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register User Page</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
    <!-- <a href="?method=product&action=add"><button class="btn btn-success" style="margin-bottom: 20px;">Add Product</button></a> -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Auction Price</th>
                <!-- <th>Manager_id</th> -->
                <!-- <th style="width: 60px"></th> -->
            </tr>
        </thead>
        <tbody>
<?php
foreach($customerList as $item) {
    echo '            
            <tr>
                <td>'.(++$index).'</td>
                <td>'.$item->fullname.'</td>
                <td>'.$item->email.'</td>
                <td>'.$item->age.'</td>
                <td>'.$item->sex.'</td>
                <td>'.$item->birthday.'</td>
                <td>'.$item->address.'</td>
                <td>'.$item->auction_price.'</td>
            </tr>';
}
?>
        </tbody>
    </table>
    <a href="http://localhost/project/public/">Back to home</a>
</div>
</body>
</html>