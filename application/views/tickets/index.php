<h2><?= $subject ?></h2>

<table class="table table-hover">

  <thead>
    <tr>
<!--       <th scope="col">Resolved</th>
 -->      <th scope="col">Subject</th>
      <th scope="col"></th>
      <th scope="col">Received at</th>
    </tr>
  </thead>
  <tbody>
 	<?php foreach($tickets as $ticket) { ?>
	    <tr class="table-active">
        <td><?php echo $ticket['subject']; ?></td>
	      <td><?php echo character_limiter($ticket['body'], 100); ?></td>
	      <td><?php echo $ticket['received_at']; ?></td>
        <td><a class="btn btn-default" href ="<?php echo site_url('/tickets/'.$ticket['slug']); ?>">Comment</a></td>
	    </tr>
	<?php } ?>
  </tbody>
</table>