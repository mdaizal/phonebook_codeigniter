<h1><?php echo 'Phonebook'; ?></h1>

<div class="divTable" style="width: 800px;">
    <div class="divTableBody">
    <div class="divTableRow">
            <div class="divTableCell">&nbsp;</div>
            <div class="divTableCell">&nbsp;</div>
            <div class="divTableCell">&nbsp;</div>
            <div class="divTableCell">
                <a href="<?php echo site_url('contact/create'); ?>" class="myButton">Add new contact</a>
            </div>
    </div>
        <div class="divTableRow" style="font-weight: bold;">
            <div class="divTableCell">#</div>
            <div class="divTableCell">Name</div>
            <div class="divTableCell">Phone Number</div>
            <div class="divTableCell">Action</div>
        </div>
        <?php foreach ($contact as $contact_item): ?>
            <div class="divTableRow">
                <div class="divTableCellBil" style="width: 2%;">&nbsp;</div>
                <div class="divTableCell"><?php echo $contact_item['name'] ?></div>
                <div class="divTableCell"><?php echo $contact_item['phone'] ?></div>
                <div class="divTableCell">
                    <a href="<?php echo site_url('contact/update').'/'.$contact_item['id']; ?>" class="myButtonEdit">Edit</a>
                    <a href="<?php echo site_url('contact/delete').'/'.$contact_item['id']; ?>" class="myButtonDelete" onclick="return confirm('Delete <?php echo $contact_item['name']; ?>?');">Delete</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>