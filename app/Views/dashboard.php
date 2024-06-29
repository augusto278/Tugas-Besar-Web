<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    POST
                    <a href="<?php echo base_url('helm/create'); ?>" class="btn btn-primary btn-sm float-right">New Record</a>
                </div>
                <div class="card-body">

                    <?php if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php } ?>

                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php } ?>

                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">Merk</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php if (!empty($posts) && is_array($posts)) { ?>
                                <?php foreach ($posts as $row) { ?>
                                    <tr>
                                        <td><?php echo $row['title']; ?></td>
                                        <td><?php echo ($row['qty'] == 4) ? 'Publish':'Draft'; ?></td>
                                        <td><?= $row['created_at'] ?></td>
                                        <td>

                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"  
                                                action="<?php echo base_url('post/destroy/' . $row['id']); ?>" method="POST">  

                                                <input type="hidden" name="{csrf_token}" value="{csrf_hash}">
                                                <input type="hidden" name="_method" value="DELETE"> 

                                                <a href="<?php echo base_url('helm/edit/' . $row['id']); ?>" class="btn btn-primary btn-sm">Edit</a>

                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>  
                                            </form>  
                                        </td>
                                    </tr>

                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="4" class="text-center">No post found.</td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>

                    
                </div>

            </div>
        </div>
    </div>
</div>


<section class="jumbotron text-center">
    <h1>Welcome, <?= session()->name ?></h1>
    <p>Untuk logout dari sistem silakan klik <a href="<?php echo base_url('logout');?>">Logout</a></p>
</section>

<?= $this->endSection() ?>