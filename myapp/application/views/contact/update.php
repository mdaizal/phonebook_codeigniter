<?php echo validation_errors(); ?>
<h1><?php echo 'Edit contact'; ?></h1>


<br /><br />
<?php echo form_open('contact/update/'.$contact['id']); ?>
    <div class="divCreateContact" style="width: 800px;">
        
        <label for="name">Name</label><br />
        <input type="text" name="name" class="inputBox" value="<?php echo $contact['name']; ?>" autofocus /><br /><br />

        <label for="phone">Phone Number</label><br />
        <input type="text" name="phone" class="inputBox" value="<?php echo $contact['phone']; ?>" /><br /><br />

        <div style="position: relative; left: 400px;">
            <input type="submit" name="submit" value="Update" class="myButton" />
            <a href="<?php echo site_url('contact'); ?>" class="myButtonDelete">Cancel</a> 
        </div>
    </div>
</form>