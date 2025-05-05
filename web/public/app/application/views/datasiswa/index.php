<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Data Siswa</h5>
                        <button class="btn btn-sm btn-primary">
                            <i class="bi bi-plus-circle"></i> Tambah Siswa
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="students-table" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2023001</td>
                                <td>John Doe</td>
                                <td>12</td>
                                <td>IPA</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- More student rows... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>