<h2><?= $title ?></h2>

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
	      <th scope="row">Active</th>
	      <td><?php echo $ticket['subject']; ?></td>
	      <td><?php echo $ticket['body']; ?></td>
	      <td><?php echo $ticket['received_at']; ?></td>
	    </tr>
	<?php } ?>
  </tbody>
</table>
<hr>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create'. $ticket['id']); ?>
  <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control">
  </div>
  <div class="form-group">
      <label>Body</label>
      <textarea name="body" class="form-control"></textarea>
  </div>
  <input type="hidden" name="slug" value="<?php echo $ticket['slug']; ?>">
  <button class="btn btn-primary" type="submit">Submit</button>
</form>