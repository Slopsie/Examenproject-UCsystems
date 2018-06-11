<h2><?php echo $tickets['subject']; ?></h2>
<small class = "received-date">received on: <?php echo $tickets['received_at']; ?></small><br>
<div class ="post-body">
	<?php echo $tickets['body']; ?>
  <hr>
  <h3>Comments</h3>
  <?php if($comments) : ?>
    <?php foreach($comments as $comment) : ?>
        <h5><?php echo $comment['body']; ?>[by <strong><?php echo $comment['name']; ?></strong>]</h5>
    <?php endforeach; ?>
  <?php else : ?>
    <p>No comments to display</p>
  <?php endif; ?>
	<hr>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'. $tickets['id']); ?>
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
  <input type="hidden" name="slug" value="<?php echo $tickets['slug']; ?>">
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
</div>