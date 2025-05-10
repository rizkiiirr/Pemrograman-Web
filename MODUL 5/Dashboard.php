<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    body{
        font-family: Arial, sans-serif;
        background-color:rgb(255, 244, 38);
        margin: 0;
        padding: 20px;
    }
    h1{
        text-align: center;
        color:rgb(233, 18, 18);

    }
    h2{
        text-align: center;
        color:rgb(0, 0, 0);
        margin-bottom: 100px;
    }
    .btn{ 
        padding: 10px 20px; 
        text-decoration: none; 
        background-color:rgb(255, 162, 0); 
        color:rgb(0, 0, 0); 
        border-radius: 5px; 
        display: block;
        width: 500px; 
        text-align: center;
        margin: 10px auto; 
        transition: background-color 0.3s; 
    }
    ul{
        list-style-type: none;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    li{
        margin: 10px 0;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">  
</head>
<body>
    <h1>PUSTAKA TI ULM</h1>
    <h2>Selamat Datang di Data Pustaka TI ULM</h2>
    <ul>
        <li><a href="member.php" class = "btn" ><b>MEMBER</b></a></li>
        <li><a href="buku.php" class = "btn" ><b>BUKU</b></a></li>
        <li><a href="peminjaman.php" class = "btn"><b>PEMINJAMAN</b></a></li>
    </ul>
</body>
</html>