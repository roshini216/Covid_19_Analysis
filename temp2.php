<!DOCTYPE html>
<html>
  
<head>
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <title>Covid19 Report</title>
  
    <style>
  marquee{

      background-color: rgb(116, 114, 209);
      color: black;
      }


  </style>
<br>
<h1><center>STATEWISE CASES </center></h1>
<center>
<marquee bgcolor="lavender" behaviour="slide" direction="left" loop="" scrollamount="5" scrolldelay="40" width="50%" height="30%">
    <table>
        <style>
            table{
                border-collapse: separate;
            }
            th{
                background-color: red;
            }
        </style>
        
        <th><a href="Mahrashtra.html" target="blank" >Maharashtra</a></th>
        <th><a href="gujarat.HTML" target="blank" >Gujarat</a></th>
        <th><a href="kerala.html" target="blank" >Kerala</a></th>
        <th>Karnataka 31,65,429</th>
        <th>Delhi 15,02,137</th>
        <th>Goa 15,02,137</th>
        <th>Punjab 15,02,137</th>
        <th>Tamil Nadu 15,02,137</th>
        <th>West Bengal 15,02,137</th>
        <th>Uttar Pradesh 15,02,137</th>
    </table>
</center>
</marquee>
<style>
    h1{
        font-family: sans-serif;
        color: white;
    }
  html,
body {
height: 100%;
}

body {
margin: 0;
background: linear-gradient(45deg, #49a09d, #5f2c82);
font-family: sans-serif;
font-weight: 100;
}

.container {
position: absolute;
top: 70%;
left: 50%;
transform: translate(-50%, -50%);
}

table {
width: 900px;
border-collapse: collapse;
overflow: hidden;
box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
padding: 15px;
background-color: rgba(255,255,255,0.2);
color: #fff;
}

th {
text-align: left;
}

thead {
th {
  background-color: #55608f;
}
}

tbody {
tr {
  &:hover {
    background-color: rgba(255,255,255,0.3);
  }
}
td {
  position: relative;
  &:hover {
    &:before {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      top: 1000px;
      bottom: 1000px;
      background-color: rgba(255,255,255,0.2);
      z-index: -1;
    }
  }
}
}
</style>
          </div>
        <table border ="2" allign="center" cellspacing="5" cellpaddin="10" table width="200">
        <thead>
                <?php
                    $data=file_get_contents('https://api.rootnet.in/covid19-in/stats/latest');
                    $coronalive =json_decode($data,true);
                    //echo $coronalive['data']['regional'][1]['loc'];
                    $satecount = count($coronalive['data']['regional']);
                    //echo $satecount
                ?>
                <br>
                <br>
                <br>
                <tr>
                    <th>State</th>
                    <th>Confirmed Cases Indian</th>
                    <th>Discharged</th>
                    <th>Deaths</th>
                    <th>Total Confirmed</th>
                </tr>
                <?php   
                $i = 1;
                while($i < 36) { 
                ?>
                <tr>
                    <td>
<?php echo $coronalive['data']['regional'][$i]['loc'] ?>
                    </td>
  
                    <td>
<?php echo $coronalive['data']['regional'][$i]['confirmedCasesIndian'] ?>
                    </td>
  
                    <td>
<?php echo $coronalive['data']['regional'][$i]['discharged'] ?>
                    </td>
  
                    <td>
<?php echo  $coronalive['data']['regional'][$i]['deaths'] ?>
                    </td>
  
                    <td>
<?php echo $coronalive['data']['regional'][$i]['totalConfirmed'] ?>
                    </td>
                </tr>
                <?php  $i++;
                }
                ?>
            </table>
    </center>
</body>
</html>