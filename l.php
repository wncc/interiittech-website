  <?php
       $con=mysql_connect("localhost","sushant","wnccsushant");
       mysql_select_db('interiittech',$con);
       $sql1= "SELECT * FROM socialimpact";
       $sql2 = "SELECT * FROM marathon ";
       $sql3 = "SELECT * FROM software";
       $result = mysql_query($sql1);
       while($row = mysql_fetch_array($result))
       {
        
        echo $row['teamname'].','.$row['member1'].','.$row['email1'].','.$row['phone1'].','.$row['member2'].','.$row['email2'].','.$row['phone2'].','.$row['member3'].','.$row['email3'].','.$row['phone3'].'<br/>';
 
       }
       $result = mysql_query($sql2);
       while($row = mysql_fetch_array($result))
       {
        
        echo $row['teamname'].','.$row['member1'].','.$row['email1'].','.$row['phone1'].','.$row['member2'].','.$row['email2'].','.$row['phone2'].','.$row['member3'].','.$row['email3'].','.$row['phone3'].','.$row['member4'].','.$row['email4'].','.$row['phone4'].'<br/>';
 
       }
       $result = mysql_query($sql3);
       while($row = mysql_fetch_array($result))
       {
        
        echo $row['teamname'].','.$row['member1'].','.$row['email1'].','.$row['phone1'].','.$row['member2'].','.$row['email2'].','.$row['phone2'].'<br/>';
 
       }

      ?>

