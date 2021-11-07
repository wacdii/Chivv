<?php $this->layout("layouts/admin") ?>

<?php $this->start("page") ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($members as $member): ?>
                <tr>
                    <td><?=$member['member_name']?></td>
                    <td><?=$member['member_email']?></td>
                    <td><?=$member['member_address']?></td>
                    <td><?=$member['member_phone']?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php $this->stop() ?>