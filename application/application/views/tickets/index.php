<h2><?= $title ?></h2>

<table class="table table-hover">

  <thead>
    <tr>
      <th scope="col">Resolved</th>
      <th scope="col">Subject</th>
      <th scope="col"></th>
      <th scope="col">Received at</th>
    </tr>
  </thead>
  <tbody>
 	<?php foreach($tickets as $ticket) { ?>
	    <tr class="table-active">
	      <th scope="row">Active</th>
	      <td><?php echo $ticket['subject']; ?></td>
	      <td><?php echo $ticket['body']; ?></td>
	      <td><?php echo $ticket['received_at']; ?></td>
	    </tr>
	<?php } ?>
  </tbody>
</table>