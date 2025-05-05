
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Data Mata Pelajaran</h5>
                        <button class="btn btn-sm btn-primary" onclick="window.location.href='<?= base_url(); ?>Subject/TambahData'">
                            <i class="bi bi-plus-circle"></i> Tambah Mata Pelajaran
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="students-table" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Created At</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; foreach ($getsubject as $subject): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $subject['name']; ?></td>
                                <td><?= $subject['created_at']; ?></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="window.location.href='<?= base_url(); ?>Subject/delete/<?= $subject['id']; ?>'">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                           
                        </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>