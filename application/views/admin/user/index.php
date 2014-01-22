<section>
    <h2>Users</h2>
    <?=anchor('admin/user/edit', '<i class="icon-plus"></i> Add a user')?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <? if(count($users)):
            foreach($users as $user): ?>
                <tr>
                    <td><?=anchor('admin/user/edit/' . $user->id, $user->email)?></td>
                    <td><?=btn_edit('admin/user/edit/' . $user->id)?></td>
                    <td><?=btn_delete('admin/user/delete/' . $user->id)?></td>
                </tr>
         <? endforeach; ?>
        <? else: ?>
            <tr>
                <td colspan="3">We could not find any users</td>
            </tr>
        <? endif; ?>
        </tbody>
    </table>
</section>