<html> <!-- html -->
    <head> 
        <title>Mengatur Baris dan Kolom</title>
        
        <style> /*CSS*/
        table{
            border: 2px solid black; 
            border-spacing: 3px; 
            padding: 2px;
        } 
        th, td{
            padding: 3px; 
            border: 2px solid black; 
            font-size: 15px;
        } 
        </style>
        
    </head>
    <body>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            
            <?php //PHP
            $smartphone = array ("Samsung Galaxy S22", "Samsung Galaxy S22+", 
            "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"); //indexed array
            
            foreach ($smartphone as $produk){
                echo "<tr>";
                echo "<td>$produk</td>";
                echo "</tr>";
            }
            ?>
            
        </table>
    </body>
</html>