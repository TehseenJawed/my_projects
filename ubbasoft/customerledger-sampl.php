$q1=new mysqli("localhost","root","","soft");
$result221 = $q->query("SELECT * FROM invoice_detail d, invoice i where i.invoice_no = d.invoice_id and i.customer_id= '$vendor_id'");
  
  $row2=$result221->fetch_array(MYSQLI_NUM); 
  $a=$a+$row2[5];
// $b=$row[6]- $row2[5];

  ?>

                <td class="text-center"> <?php echo remove_junk($row[8]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row[1]); ?></td>
                <td class="text-center"> <?php echo remove_junk($c=$b+$row[6]); ?></td>
                <td class="text-center"> <?php echo remove_junk($row2[5]); ?></td>$
                <td class="text-center"> <?php echo remove_junk($b=$c-$row2[5]); ?></td>
               <td class="text-center"> <?php echo remove_junk($row[7]); ?></td>
                </tr>