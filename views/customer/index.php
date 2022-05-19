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
            <h1>Give me some information to help you attend this auctions event</h1>
            <br>
        </div>
        <div class="card-body">
            <form action="?method=customer&action=post" method="post">
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
                    <input required type="radio" name="sex" value="female">Female
                    <input required type="radio" name="sex" value="male">Male
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
                    <label for="">Auction Price: </label>
                    <input required type="number" name="auction_price" class="form-control" min="<?php echo $product->auction_price; ?>">
                </div>
                <div class="form-group">
                    <label for="">Why do you want to auction?</label>
                    <input type="text" name="message" class="form-control">
                </div>                
                <!-- <div class="form-group"> -->
                    <!-- <label for="">Product_id: </label> -->
                    <input readonly type="text" name="product_id" class="form-control" value="<?php echo $product->id; ?>" style="display: none;">
                <!-- </div> -->
                <!-- <div class="form-group"> -->
                    <!-- <label for="">Manager_id</label> -->
                    <input readonly type="text" name="manager_id" class="form-control" value="<?php echo $manager->id; ?>" style="display: none;">
                <!-- </div> -->
                <br>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Confirm-auction</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>