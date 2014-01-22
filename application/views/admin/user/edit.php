<div class="modal-header">
    <h3><?=( empty($user->id) ? 'Add a new user' : 'Edit user ' . $user->name )?></h3>
</div>
<div class="modal-body">
    <?=validation_errors();?>
    <?=form_open();?>
    <table class="table">
        <tr>
            <td>Name</td>
            <td><?=form_input('name')?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=form_input('email')?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?=form_password('password')?></td>
        </tr>
        <tr>
            <td>Password confirm</td>
            <td><?=form_password('password_confirm')?></td>
        </tr>
        <tr>
            <td></td>
            <td><?=form_submit('submit', 'Save', 'class="btn btn-primary"')?></td>
        </tr>
    </table>
    <?=form_close();?>
</div>