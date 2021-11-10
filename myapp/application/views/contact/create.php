<?php echo validation_errors(); ?>
<h1><?php echo 'Add new contact'; ?></h1>


<br /><br />
<?php echo form_open('contact/create'); ?>
    <div class="divCreateContact" style="width: 800px;">
        <label for="name">Name</label><br />
        <input type="text" name="name" class="inputBox" autofocus /><br /><br />

        <label for="phone">Phone Number</label><br />
        <input type="text" name="phone" class="inputBox" /><br /><br />

        <div style="position: relative; left: 420px;">
            <input type="submit" name="submit" value="Add" class="myButton" />
            <a href="<?php echo site_url('contact'); ?>" class="myButtonDelete">Cancel</a> 
        </div>
    </div>
</form>