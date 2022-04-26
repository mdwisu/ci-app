<div class="container">
    <div class="row">
        <div class="col-md-10">


            <h3>List of People</h3>

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peoples as $peo) :?>
                    <tr>
                        <th><?= ++$start?></th>
                        <td><?= $peo['name'];?></td>
                        <td><?= $peo['email'];?></td>
                        <td>
                            <a href="" class="badge btn-warning">detail</a>
                            <a href="<?= base_url("peoples/edit")?>" class="badge btn-success">edit</a>
                            <a href="<?= base_url("peoples/delete/")?><?= $peo['id'];?>" class="badge btn-danger">delete</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <?= $this->pagination->create_links();?>
        </div>
    </div>
</div>