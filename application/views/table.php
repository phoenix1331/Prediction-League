<div class="titlebar">
  <div class="container">
    <h1><?php echo $title; ?></h1>
  </div>
</div>
<div class="container main">

<table class="mainTable">
  <thead>
    <tr>
      <th>Pos</th>
      <th class="name">Name</th>
      <th>P</th>
      <th>W</th>
      <th>D</th>
      <th>L</th>
      <th>F</th>
      <th>A</th>
      <th>GD</th>
      <th>Pts</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td class="name">Darren Williams</td>
      <?php foreach($table as $item): ?>
       <td><?php echo $item['P']; ?></td>
       <td><?php echo $item['W']; ?></td>
       <td><?php echo $item['L']; ?></td>
       <td><?php echo $item['D']; ?></td>
       <td><?php echo $item['F']; ?></td>
       <td><?php echo $item['A']; ?></td>
       <td><?php echo $item['GD']; ?></td>
       <td><?php echo $item['Pts']; ?></td>
      <?php endforeach; ?>
      <td><</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td></td>
      <td class="name"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tfoot>
</table>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
  Quidem amet totam tempore, porro, quisquam nemo repellendus
  dolorem odio soluta nisi corporis mollitia ducimus cupiditate
  blanditiis reprehenderit neque, dignissimos culpa earum.</p>

</div>
