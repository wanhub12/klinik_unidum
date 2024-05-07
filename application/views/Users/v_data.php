<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header">
                <?= $title; ?>
                <a href="<?= base_url('Users/tambah'); ?>" class="btn  btn-primary btn-sm float-right">Tambah Users</a>
            </div>
            <div class="card-body text-primary">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">no</th>
                            <th scope="col">id</th>
                            <th scope="col">username</th>
                            <th scope="col">nama lengkhap</th>
                            <th scope="col">aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($users as $r){ ?>
                                <tr>
                                    <th scope="row"><?= $no;?></th>
                                    <td><?=$r['id'];?></td>
                                    <td><?= $r['username'];?></td>
                                    <td><?= $r['nama lengkhap'];?></td>
                                    <td>Edit|hapus</td>
                                </tr>
                            <?php $no++; }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>