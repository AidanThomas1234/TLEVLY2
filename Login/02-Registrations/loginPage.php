<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamePort - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="loginBackground">
        <div class="col-4 offset-4 align-middle align-items-center p-5 loginBox">
            <div class="bg-dark bg-opacity-50">
                <div class="form-signin text-center p-3">
                    <h1>Sign in Below:</h1>
                    <form action="loginScript.php" method="post">
                        <div class="mb-3">
                            <label for="loginUsername" class="form-label text-white">Username: </label>
                            <input type="text" name="loginUsername" id="loginUsername" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label text-white">Password: </label>
                            <input type="password" name="loginPassword" id="loginPassword" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="blur"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>