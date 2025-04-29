<html> <!-- HTML -->
    <head>
        <title>Mengatur Baris dan Kolom</title>
        
        <style> /*CSS*/
        table{border: 2px solid black; border-spacing: 3px; padding: 2px;} 
        th{border: 2px solid black; background-color: red; height: 70px; font-size: 24px;}
        td{padding: 2px; border: 2px solid black; font-size: 15px;}
        </style>
        
    </head>
    <body>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            
            <?php //PHP
            $smartphone = array("merek1" => "Samsung Galaxy S22", "merek2" => "Samsung Galaxy S22+", 
            "merek3" => "Samsung Galaxy A03", "merek4" => "Samsung Galaxy Xcover 5");
            
            foreach ($smartphone as $produk){
                echo "<tr>";
                echo "<td>$produk</td>";
                echo "</tr>";
            }
            ?>
            
        </table>
    </body>
</html>