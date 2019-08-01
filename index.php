
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Language Translator</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
        }
        .bg {
            background-image: url("images/bg.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="bg">
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin: auto; background: white; padding: 20px; box-shadow: 10px 10px 5px #888">
                <div class="panel-heading">
                    <h2>Google Cloud Vision API</h2>
                    <p style="font-style: italic;">Coolest Language Translator App By Abhay</p>
                </div>
                <hr>
                <form action="translate.php" method="post" enctype="multipart/form-data">
                    <input type="textarea" name="text" value="How are You ?" class="form-control">
                    <br>
                    <button type="submit" name="submit" style="border-radius: 0px;" class="btn btn-lg btn-block btn-outline-success">Translate</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>



