<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<body>
    <div class="container">
        <div class="row">
            <div class="col">
               <form action="/bookread" method="post">
               {{csrf_field()}}
               <table class="table">
                    <tr>
                        <td>Book title</td>
                        <td><input name="bname" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Author</td>
                        <td><input name="bauthor" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><input name="bdesc" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Distributer</td>
                        <td><input name="bdistri" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>price</td>
                        <td><input name="bprice" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn-success">Add</button></td>
                    </tr>
                </table></form>
            </div>
        </div>
    </div>
</body>
</html>