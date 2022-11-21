<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>V3 API</title>
</head>

<body>

    <!-- 2 column grid layout with text inputs for the first and last names -->

    <h3 style="text-align: center; margin-top:102px;">Cashfree V3 api Demo</h3>
    <div class="container" style="margin-top: 10px !important;
    background-color: grey;
    width: 50%;
    padding: 27px 26px 3px 14px;">

      <form method="post" action="pay.php">
        
   
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example1" name ="orderid" class="form-control"   required/>
                    <label class="form-label" for="form6Example1">Order Id</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" name ="orderamount" class="form-control" required/>
                    <label class="form-label" for="form6Example2">Amount</label>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example1" name ="ordernote" class="form-control" required />
                    <label class="form-label" for="form6Example1">Order Note</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" name ="customername"class="form-control" required/>
                    <label class="form-label" for="form6Example2">Customer name</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="email" id="form6Example1" name ="customeremail" class="form-control" required />
                    <label class="form-label" for="form6Example1">Customer Email</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" pattern="[789][0-9]{9}" name ="cuatomerphone" id="form6Example2" class="form-control" required/>
                    <label class="form-label" for="form6Example2">Customer Phone</label>
                </div>
            </div>
        </div>



        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>