<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <img src="https://static-2.gumroad.com/res/gumroad/1211634803146/asset_previews/7388602a425c055f505a774d8ee9089a/retina/colour-thumbnail.png" class="w-100" alt="login">
            </div>
            <div class="col-5 d-flex align-items-center">
                <form action="index.php?controller=login&method=index" method="POST" class="w-100">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control" id="pwd" name="pwd">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div> 
    </div>
</body>
</html>