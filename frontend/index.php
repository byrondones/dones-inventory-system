<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <img src="../images/img-1.png" alt="app logo" class="img-fluid">
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
<div class="container d-flex justify-content-center align-items-center">
    <div class="border border-3 rounded-3 mb-3 pt-3 pb-3 ps-5 pe-5" style="width: 500px">
        <div class="col-sm-12">
            <div class="row">
                <div class="form-label" for="username-lgn">Username:</div>
                <input type="email" class="form-control" id="username-lgn" >

                <div class="form-label pt-3" for="password-lgn">Password:</div>
                <input type="password" class="form-control mb-3" id="password-lgn" >
                
                <a href="productlist.php" type="submit" class="btn btn-primary">Login</a>
                
                <!-- <button type="submit" class=" btn btn-primary mt-3 float-right">Login</button> -->
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>