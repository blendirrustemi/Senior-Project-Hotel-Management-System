<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T E S T</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


  <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['value']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>






	
  </body>
</html>
