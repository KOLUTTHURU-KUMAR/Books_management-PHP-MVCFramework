<h2>Add Fruit Form</h2>
<form action="<?php echo BASEURL;?>/profile/fruitStore" method="POST">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Name" value="<?php if($data['name']): echo $data['name']; endif; ?>">
<div class="error">
    <?php if($data['nameError']): echo $data['nameError']; endif;?>
</div>
</div>

<div class="form-group">
<input type="number" name="price" class="form-control" placeholder="Price" value="<?php if($data['price']): echo $data['price']; endif; ?>">
<div class="error">
    <?php if($data['priceError']): echo $data['priceError']; endif;?>
</div>
</div>

<div class="form-group">
<select name="size" class="form-control" value="<?php if($data['size']): echo $data['size']; endif; ?>">
    <option value="">Select Size</option>
    <option value="s">S</option>
    <option value="m">M</option>
    <option value="l">L</option>
    <option value="xl">XL</option>
    <option value="xxl">XXL</option>
</select>
<div class="error">
    <?php if($data['sizeError']): echo $data['sizeError']; endif;?>
</div>
</div>

<div class="form-group">
<select name="material" class="form-control" value="<?php if($data['material']): echo $data['material']; endif; ?>">
    <option value="">Select Material</option>
    <option value="c">Cotton</option>
    <option value="w">Wool</option>
    <option value="i">Silk</option>
    <option value="s">Synthetic</option>
</select>
<div class="error">
    <?php if($data['materialError']): echo $data['materialError']; endif;?>
</div>
</div>

<div class="form-group">
<input type="text" name="color" class="form-control" placeholder="Color" value="<?php if($data['color']): echo $data['color']; endif; ?>">
<div class="error">
    <?php if($data['colorError']): echo $data['colorError']; endif;?>
</div>
</div>

<div class="form-group">
    <input type="submit" value="Add To List" class="btn btn-success">
</div>

</form>