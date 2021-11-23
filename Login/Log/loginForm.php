<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Form</title>
</head>

<body>
    <h1>Login Form</h1>

    <div class="row">
        <form action="scripts/loginScript.php" method="post">
            <div class="col-4 offset-4">
                <div class="mb-3">
                    <label for="userLogin" class="form-label">Username: </label>
                    <input type="text" class="form-control" id="userLogin" aria-describedby="emailHelp"
                        name="userLogin">
                </div>
                <div class="mb-3">
                    <label for="userPass" class="form-label">Password: </label>
                    <input type="password" class="form-control" id="userPass" name="userPass">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>