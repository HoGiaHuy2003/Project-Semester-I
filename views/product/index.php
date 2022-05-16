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
    <a href="?method=product&action=add"><button class="btn btn-success" style="margin-bottom: 20px;">Add Product</button></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Thumbnail</th>
                <th>Category</th>
                <!-- <th>Manager_id</th> -->
                <th style="width: 60px"></th>
                <th style="width: 60px"></th>
                <th style="width: 60px"></th>
            </tr>
        </thead>
        <tbody>
<?php
foreach($productList as $item) {
    echo '            
            <tr>
                <td>'.(++$index).'</td>
                <td>'.$item->name.'</td>
                <td>'.$item->price.'</td>
                <td>
                    <img src="'.$item->thumbnail.'" style="width: 250px">
                </td>
                <td>'.$item->category.'</td>
                <td>'.$item->manager_id.'</td>
                <td>
                    <a href="?method=product&action=edit&id='.$item->id.'"><button class="btn btn-warning">Edit</button></a>
                </td>
                <td>
                    <a href="?method=product&action=delete&id='.$item->id.'"><button class="btn btn-danger">Delete</button></a>
                </td>
                <td>
                    <a href="?method=customer&action=add&id='.$item->id.'"><button class="btn btn-primary">Auction</button></a>
                </td>
            </tr>';
}
?>
        </tbody>
    </table>
</div>
</body>
</html>