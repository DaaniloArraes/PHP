<?php
    $pessoas = [
        "Matheus" => 29,
        "Dermival" =>48,
        "Danilo"=> 28,
        "Maria"=> 42
    ] ;
?>

<table border="2">
  <caption> Tabelinha </caption>
  <thead>
    <tr>
      <th scope="col">Pessoa</th>
      <th scope="col">idade</th>
    </tr>
  </thead>
  <tbody>
        <?php
            foreach ($pessoas as $key => $value) {
                echo "<tr>";
                echo "<th scope='row'>$key </th> ";
                echo "<td>$value</td>";
                echo "</tr>";
            }
        ?>
  </tbody>
</table>