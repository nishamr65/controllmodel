<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus detials</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<body>
<div class="container">
       <div class="row">
           <div class="col">
               <form action="/busread" method="post">
               {{csrf_field()}}
               <table class="table">
                   <tr>
                       <td>Bus no</td>
                       <td><input name="bnum" class="form-control"></td>
                   </tr>
                   <tr>
                       <td>Route</td>
                       <td><input name="broute" class="form-control"></td>
                   </tr>
                   <tr>
                       <td></td>
                       <td><button class="btn-success">submit</button></td>
                   </tr>
               </table></form>
           </div>
       </div>
   </div>
</body>
</html>