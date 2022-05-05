

<!doctype html>
<html lang="en">
  <head>
    <title>contact us form ith google captcha</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous">
  </head>
  <body class="bg-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 bg-light rounded mt-3">
                <h4 class="text-center text-dark p-2">Conatact Us!</h4>
                <form action="sumbit.php" method="post" class="p2">

                    <div class="form-group">
                        <input type="text"  name="name" class="form-control" placeholder="Enter your name" required>
                    </div>

                    <div class="form-group">
                        <input type="email"  name="email" class="form-control" placeholder="Enter your email" required>
                    </div>


                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="write your message" required cols="30" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LfIo6sfAAAAAGCGrpBNynl5dRFzCMhjvQM7i7EE"></div>

                    </div>

                    <div class="form-group">
                        <input type="submit"  name="submit" class="btn btn-danger btn-block" value="send" required>
                    </div>
                    
                </form>

            </div>
        </div>
    </div>
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    
</body>
</html>