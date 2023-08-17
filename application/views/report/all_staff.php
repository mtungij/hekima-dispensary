
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>All Employee</title>
</head>
<body>

<div id="container">
 <!--  <div style='width: 100%;align-items: center; display: flex;justify-content:space-between;flex-direction: row;'>
 </div> -->
  <style>
    .pull{
    text-align: center;
    margin-top: 100px;
    margin-bottom: 0px;
    margin-right: 150px;
    margin-left: 80px;

    }
  </style>
  <style>
    .display{
      display: flex;
      
    }
  </style>

         <p style="font-size:12px;"><b>All Employee</b></p>
       </div>

     
 
  <div id="body">
  <style> 
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
</head>
<body>



<table>
  <tr>
    <th style="font-size:12px;">No.</th>
    <th style="font-size:12px;">Staff Name</th>
    <th style="font-size:12px;">Phone Number</th>
    <th style="font-size:12px;">Email</th>
    <th style="font-size:12px;">Position</th>
    <th style="font-size:12px;">Department</th>
    <th style="font-size:12px;">Salary</th>
  </tr>
         
  <?php echo $no = 1; ?>
    <?php foreach ($staffs as $staff) : ?>
 <tr>     
  <td style="font-size:12px;"><?= $no++; ?></td>
  <td style="font-size: 12px;"><?= $staff->first_name . ' ' . $staff->last_name ?></td>
    <td style="font-size:12px;"><?= $staff->phone_number ?></td>
    <td style="font-size:12px;"><?= $staff->email ?></td>
    <td style="font-size:12px;"><?= $staff->position ?></td>
    <td style="font-size:12px;"><?= $staff->departiment ?></td>
    <td style="font-size:12px;"><?= $staff->salary ?></td>
    </tr>
    <?php endforeach ?>
</table>
  </div>

</div>

</body>
</html>