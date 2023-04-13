<!DOCTYPE html>
<html>
 <head>
  <title>How to Get SUM of Column in Datatable | Datatables SUM of Particular Column</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shto</title>
    <link rel="stylesheet" type="text/css" href="styleindex.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
 </head>
 <body>
 <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
            GNTC
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
        <div class="nav-links">
            <ul>
          <li><a href="index.php" target="">SHIKO KALKULIMET</a></li>
          <li><a href="add.php" target="">SHTO</a></li>
         
         
            </ul>
        </div>
      </div>
  <div class="container box">
   <!-- <h3 style="align:center"> Bank Calculator</h3> -->
   <br />
   <div class="table-responsive">
    <table id="order_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>DATA</th>
       <th>Emri Bankes</th>
       <th> Vlera</th>
      </tr>
     </thead>
     <tbody></tbody>
     <tfoot>
      <tr>
       <th colspan="2">Total</th>
       <th id="total_order" style="color: blue"></th>
      </tr>
     </tfoot>
    </table>
    <br />
    <br />
    <br />
   </div>
  </div>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
   var dataTable = $('#order_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch.php",
     type:"POST"
    },
    drawCallback:function(settings)
    {
     $('#total_order').html(settings.json.total);
    }
   });
   $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td contenteditable id="data3"></td>';
  
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#order_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   var dataB = $('#data1').text();
   var emriBankes = $('#data2').text();
   var vlera = $('#data3').text();
   if(dataB != '' && emriBankes != '' && vlera != '')
   {
    $.ajax({
     url:"insert.php",
     method:"POST",
     data:{dataB:dataB, emriBankes:emriBankes, vlera:vlera },
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#order_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("Both Fields is required");
   }
  });
    
  
 });
 
</script>