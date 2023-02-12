<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Size</th>
                <th>Material</th>
                <th>Color</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
      <?php if(!empty($data)): ?>
      <?php foreach($data as $clothes): ?>
      <tr>
          <td><?php echo ucwords($clothes->name); ?></td>
          <td><?php echo $clothes->price . " INR"; ?></td>
          <td><?php echo ucwords($clothes->size); ?></td>
          <td><?php echo ucwords($clothes->material); ?></td>
          <td><?php echo ucwords($clothes->color); ?></td>
          <td><a href="<?php echo BASEURL; ?>/profile/edit_fruit/<?php echo $clothes->id; ?>" class="btn btn-warning">Edit</a></td>
          <td><a href="<?php echo BASEURL; ?>/profile/delete/<?php echo $clothes->id; ?>" class="btn btn-danger">Delete</a></td>
      </tr>
<?php endforeach;?>
<?php endif; ?> 
</tbody>
</table>