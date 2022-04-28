<div class="container">
    <h3 class="mt-3">List of People</h3>
    <div class="row">
        <div class="col-md-10">

            <div class="row col-md-5">
                <form action="<?= base_url('peoples')?>" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" autofocus autocomplete="off" class="form-control" placeholder="Sarch Keyword" name="keyword">
                        <div class="input-group-append">
                            <input class="btn btn-primary" type="submit" name="submit">
                        </div>
                    </div>
                </form>
            </div>
            <h5>Result : <?= $total_rows;?></h5>
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
                    <?php if (empty($peoples)) :?>
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-danger" role="alert">
                                    data not found
                                </div>
                            </td>   
                        </tr>
                    <?php endif;?>
                    <?php foreach ($peoples as $peo) : ?>
                        <tr>
                            <th><?= ++$start ?></th>
                            <td><?= $peo['name']; ?></td>
                            <td><?= $peo['email']; ?></td>
                            <td>
                                <a href="" class="badge btn-warning">detail</a>
                                <a href="<?= base_url("peoples/edit") ?>" class="badge btn-success">edit</a>
                                <a href="<?= base_url("peoples/delete/") ?><?= $peo['id']; ?>" class="badge btn-danger">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>