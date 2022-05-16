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
            <h1>Edit your product</h1>
            <br>
        </div>
        <div class="card-body">
            <form action="?method=product&action=post" method="post">
                <div class="form-group">
                    <label for="">Name: </label>
                    <input type="text" name="id" value="<?=$product->id?>" style="display: none">
                    <input required type="text" name="name" class="form-control" value="<?=$product->name?>">
                </div>
                <div class="form-group">
                    <label for="">Price: </label>
                    <input required type="number" name="price" class="form-control" value="<?=$product->price?>">
                </div>
                <!-- <div class="form-group">
                    <label for="">Sex </label>
                    <input type="radio" name="sex" value="female">Female
                    <input type="radio" name="sex" value="male">Male
                </div> -->
                <!-- <div class="form-group">
                    <label for="">Birthday: </label>
                    <input required type="date" name="birthday" class="form-control">
                </div> -->
                <div class="form-group">
                    <label for="">Thumbnail: </label>
                    <input required type="text" name="thumbnail" class="form-control" value="<?=$product->thumbnail?>">
                </div>
                <div class="form-group">
                    <label for="">Description: </label>
                    <input required type="text" name="description" class="form-control" value="<?=$product->description?>">
                </div>
                <div class="form-group">
                    <label for="">Category: </label>
                    <select name="category_id" value="<?=$product->category_id?>">
                        <option value="">--SELECT--</option>
                        <?php
                            foreach($category as $key) {
                                if($key['id'] == $product->category_id) {
                                    echo '<option selected value='.$key['id'].'>'.$key['name'].'</option>';
                                }
                                else {
                                    echo '<option value='.$key['id'].'>'.$key['name'].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Edit your product</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>