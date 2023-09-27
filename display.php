<html>
  <head>
    <title>Display</title>
    <style>
      body
      {
        background: #d071f9;
      }
      table 
      {
        background: white;
        
      }
      .Update 
      {
         background-color: green;
         color: white;
         border: 0;
         outline: none;
         text-align: center;
         border-radius: 3px;
         height: 20px;
         width: 70px;
         font-weight: bold;
         cursor: pointer;
      }
      .Delete
      {
         background-color: red;
         color: white;
         border: 0;
         outline: none;
         text-align: center;
         border-radius: 3px;
         height: 20px;
         width: 70px;
         font-weight: bold;
         cursor: pointer;
      }
    </style>
  </head>
</html>

<?php
include("conn.php");
$query = "SELECT * FROM FORM";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=0)
 {
    ?>
    <h2 align ="center" ><mark> Display record </mark></h2>
   <center>
    <table border="1" cellspacing= "7">
        <tr>
        <th width="5%" > ID</th> 
        <th width="10%" > FirstName</th> 
        <th width="10%"  > LasttName</th>
        <th width="8%" > Gender</th>
        <th width="15%" > Email</th>
        <th width="12%" > Phone</th>
        <th width="20%" > Address</th>
        <th width="25%"> Oprations</th>
 </tr>
    
    <?php
    
  while($result = mysqli_fetch_assoc($data))
  {
    echo "
    <tr>
        <td>".$result['id']."</td>
        <td>".$result['f_name']."</td>
        <td>".$result['l_name']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['address']."</td>
        <td><a href ='update.php?id=$result[id]'><input type ='submit' value='Update' class='Update'></a>

        <a href ='Delete.php?id=$result[id]'><input type ='submit' value='Delete' class='Delete' onclick= 'return delete_item()'></a></td>
        
 </tr>  
  ";
}
 }
else{
    echo"No records";
}


?>
</table>
</center>

<script>
  function delete_item() {
    return confirm ('Are you sure??');
  }
</script>

