<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-12">
      <form class="form" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="exampleInputName2">Title: </label>
          <input type="text" name="title" class="form-control" id="exampleInputName2" placeholder="mohamed abuassi">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail2">Body:</label>
          <textarea name="body" rows="8" cols="80" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Post</button>
      </form>
    </div>
  </div>

</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
