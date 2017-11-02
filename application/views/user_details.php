
<div class="container">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th><strong>Index No</strong></th>
                <th><strong>First Name</strong></th>
                <th><strong>Last Name</strong></th>
                <th><strong>Tel No</strong></th>
                <th><strong>#</strong></th>
            </tr>
        </thead>
        
    <?php foreach ($users as $user_details): ?>
            <tr>
                <td><?php echo $user_details['index_no']; ?></td>
                <td><?php echo $user_details['first_name']; ?></td>
                <td><?php echo $user_details['last_name']; ?></td>
                <td><?php echo $user_details['tel_no']; ?></td>
                <td>
                    <a class="badge badge-danger" href="<?php echo site_url('Users/editUser/'.$user_details['index_no']); ?>">Edit</a> | 
                    <a class="badge badge-info" href="<?php echo site_url('Users/deleteUser/'.$user_details['index_no']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                </td>
            </tr>
    <?php endforeach; ?>
    </table>
    
</div>
