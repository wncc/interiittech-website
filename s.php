      <?php
       $con=mysql_connect("localhost","sushant","wnccsushant");
       mysql_select_db('interiittech',$con);
       $college = $_SESSION["college"];
       $sql1= "SELECT * FROM socialimpact ";
       $sql2 = "SELECT * FROM marathon ";
       $sql3 = "SELECT * FROM software";
       $result = mysql_query($sql1);
       if (!$result) { // add this check.
              die('Invalid query: ' . mysql_error());
          }
       echo '<h3> Inter iit Social Impact </h3>';
       echo '<table class="table table-bordered"><tbody>';
       while($row = mysql_fetch_array($result))
       {
        
        echo '<tr><td>'.$row['institute'].'</td><td>'.$row['teamname'].'</td><td>'.$row['member1'].'</td><td>'.$row['email1'].'</td><td>'.$row['phone1'].'</td><td>'.$row['member2'].'</td><td>'.$row['email2'].'</td><td>'.$row['phone2'].'</td><td>'.$row['member3'].'</td><td>'.$row['email3'].'</td><td>'.$row['phone3'].'</td><td>'.$row['college'].'</td><tr>';
 
       }
       echo '</tbody></table><br/>';
       echo '<h3> Messier Marathon </h3>';
       $result = mysql_query($sql2);
        if (!$result) { // add this check.
            die('Invalid query: ' . mysql_error());
        }
       echo '<table class="table table-bordered"><tbody>';
       while($row = mysql_fetch_array($result))
       {
        
        echo '<tr><td>'.$row['institute'].'</td><td>'.$row['teamname'].'</td><td>'.$row['member1'].'</td><td>'.$row['email1'].'</td><td>'.$row['phone1'].'</td><td>'.$row['member2'].'</td><td>'.$row['email2'].'</td><td>'.$row['phone2'].'</td><td>'.$row['member3'].'</td><td>'.$row['email3'].'</td><td>'.$row['phone3'].'</td><td>'.$row['member4'].'</td><td>'.$row['email4'].'</td><td>'.$row['phone4'].'</td><tr>';
 
       }
       echo '</tbody></table><br/>';
        echo '<h3> Software Development </h3>';
       $result = mysql_query($sql3);
       if (!$result) { // add this check.
          die('Invalid query: ' . mysql_error());
      }
       echo '<table class="table table-bordered"><tbody>';
       while($row = mysql_fetch_array($result))
       {
        
        echo '<tr><td>'.$row['institute'].'</td><td>'.$row['teamname'].'</td><td>'.$row['member1'].'</td><td>'.$row['email1'].'</td><td>'.$row['phone1'].'</td><td>'.$row['member2'].'</td><td>'.$row['email2'].'</td><td>'.$row['phone2'].'</td><tr>';
 
       }
       echo '</tbody></table>';

      ?>
    </div>
  </div>

