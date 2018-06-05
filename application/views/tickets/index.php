<h2><?= $title ?></h2>

<table class="table table-hover">

  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
    </tr>
  </thead>
  <tbody>
 	<?php foreach($tickets as $ticket) { ?>
	    <tr class="table-active">
	      <th scope="row">Active</th>
	      <td><?php echo $ticket['body']; ?></td>
	      <td>Column content</td>
	      <td>Column content</td>
	    </tr>
	<?php } ?>
  </tbody>
</table>