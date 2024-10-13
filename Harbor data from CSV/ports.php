

<html>
	<head>
		<title>PORTY ZADANIE </title>
		
		<style>
	
	table{
      border: 4px ridge black;
      border-collapse: collapse;
  		margin-bottom: 20px;
		}
	
	td{
      border: 4px solid red;
      padding: 50px;
      text-align: center;
		}
   
   td.komorki{
		font-weight: bold;
      border: 4px solid red;
    }
	
	</style>
	
	</head>
	
	<body>
	
	<table>
   
   <tr>
    
	<td class="komorki"> Port: </td><td class="komorki"> Rok: </td><td class="komorki"> Liczba osob: </td>
    </tr>
		
		<?php
			
			$path="dane.csv";
			$Plik=fopen($path,"r");
			$zmienna_1 = "";
			$ROK = "";
			
			
			
			$suma = 0;
			$ignore=fgets($Plik);
			while ($linijka=fgets($Plik)) {
			$wartosci=explode(";" , $linijka);
			if($wartosci[0]!=$zmienna_1 || $wartosci[3] != $ROK){
				if($zmienna_1 != "" && $ROK != ""){
            
				echo "<tr>";
				
				echo "<td>", $zmienna_1, "</td><td>",$ROK,"</td><td>", ($suma == 0 ? "Count" : $suma ), "</td>";
            
				echo "</tr>";
          }
         
			$suma = 0;
			$zmienna_1=$wartosci[0];
			$ROK=$wartosci[3];

		  }
        $suma += $wartosci[2];
			}
			
			
			fclose($Plik);
		?>
	
	</table>
	
	</body>
	</html>