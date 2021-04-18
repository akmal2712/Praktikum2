<?php require 'curl_simak.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <title>Document</title>
</head>
<body>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>nama</th>
                <th>nim</th>
                <th>kelas</th>
                <th>angkatan</th>

               
            </tr>
        </thead>
        
    </table>
</body>
<script src="./datasimak.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "ajax": './datasimak.txt',
            "columns": [
        {"data": "nama"},
        {"data": "nim"},
        {"data": "kelas"},
        {"data": "angkatan"}

       
    ]
            
        } );
    } );
</script>
</html>