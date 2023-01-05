<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('build.css')}}">   
    <title>Books List</title>
    </head>
    <body>
     <div class="table-responsive">
        <div class="container">
         <center> <h1>Books List </h1></center>
          <table class="table table-bordered table-hover table-striped"   id="mydata">
            <thead >
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Book Code</th>
                <th>Author</th>
              </tr>
            </thead>
            <tbody id="show_data">
            </tbody>
          </table>
      </div>
    </div>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script> 
    <script src="{{asset('js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
  </body>
</html>