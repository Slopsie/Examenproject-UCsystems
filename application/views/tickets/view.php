<h2><?php echo $tickets['subject']; ?></h2>
<small class = "received-date">received on: <?php echo $tickets['received_at']; ?></small><br>
<div class ="post-body">
    <?php echo $tickets['body']; ?>
  <hr>
  <h3>Notes</h3>
  <?php if($comments) : ?>
    <?php foreach($comments as $comment) : ?>
      <div style="margin: 25px;">
        <h5><?php echo $comment['body']; ?><br>[by <strong><?php echo $comment['name']; ?></strong>]</h5>
      </div>
    <?php endforeach; ?>
  <?php else : ?>
    <p>No notes to display</p>
  <?php endif; ?>
    <hr>
<h3>Add a note</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'. $tickets['id']); ?>
  <div class="form-group">
      <label>Your note</label>
      <textarea name="body" class="form-control"></textarea>
  </div>
  <input type="hidden" name="slug" value="<?php echo $tickets['slug']; ?>">
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
</div>