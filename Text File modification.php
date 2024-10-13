<!DOCTYPE html>
<html>
	<meta charset="utf-8">
    <head>
    </head>
    <body>
        <?php
            if (!empty($_POST)){
                $req = $_POST["req"];
                switch ($req){
                    case "usun plik":
                        unlink($_POST["zmienna1"]);
                        break;
                    case "zmien nazwe":
                        rename($_POST["zmienna1"], $_POST["zmienna2"]);
                        break;
						case "utworz plik":
                        file_put_contents($_POST["zmienna1"], "");
                        break;
                    case "zapis do pliku":
                        file_put_contents($_POST["zmienna1"], $_POST["zawartosc"]);
                        break;
						case "utworz katalogi":
                        mkdir($_POST["zmienna1"]);
                        mkdir($_POST["zmienna2"]);
                        break;
                    case "wykonaj":
                        foreach(scandir("./") as $file){
                            if($file == '.' || $file == '..')
                                continue;
                            echo $file."<br>";
                        };
                }
            }
        ?>
			<form action="php7.php" method="POST">
            Nazwa Pliku:
            <br>
            <input type="text" name="zmienna1">
            <br>
            <input type="submit" name="req" value="utworz plik" >
            <br>
            <input type="submit" name="req" value="usun plik">
            <br>
            Nowa nazwa Pliku lub katalogu
            <br>
            <input type="text" name="zmienna2">
            <br>
            <input type="submit" name="req" value="zmien nazwe">
            <br>
            <input type="submit" name="req" value="utworz katalogi" >
            <br>
            Podaj zawartość pliku:
            <br>
            <input type="text" name="zawartosc">
            <br>
            <input type="submit" name="req" value="zapis do pliku" >
            <br>
            Wyswietl pliki
            <br>
            <input type="submit" name="req" value="Wyswietl" >
        </form>		
    </body>
</html>
