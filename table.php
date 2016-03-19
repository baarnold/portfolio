
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery DataTables</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css"
          rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Main content area -->
    <div class="container">
      
      <h3 class="text-muted">Contact Table</h3>
      


      <table id="table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Message</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Message</th>
            </tr>
        </tfoot>
 
        <tbody>
    <?php
        
        //Turn on error reporting
         ini_set('Display_errors',1);
         error_reporting(E_ALL);
        
         //Connect to the database(my root directory is one level up from the public_html directory)
         require '../barnolddb.php';
         
         //echo "Thunderbirds";
         $sql= "SELECT * FROM contactform";
         
         // Send the query to the database
         $kfb = @mysqli_query($cnxn, $sql)
         or die ("Error executing query: $sql");
         

        //Process the rows
        while ($row = mysqli_fetch_assoc($kfb)) {
            $name = $row['name'];
            $email = $row['email'];
            $message = $row['message'];

            echo "<tr><td>" . $name . "</td><td>" . $email . "</td><td>" . $message . "</td>";
        }
    ?>
 
        </tbody>
    </table>
      
    </div>
  
  <!-- Regular jQuery and Bootstrap scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <!-- jQuery Data Tables Plugin -->
  <script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>

  <script>
    $('#table').DataTable();
  </script>
    
  </body>
</html>
