<div>
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Detail
            </h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Tables</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Data Detail</a>
                </li>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Detail</h4>
                        <a href="{{ route('detail_tambah') }}" class="btn btn-primary btn-round ml-auto">
                            <i class="fa fa-plus"></i>
                            Tambah Data
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID Karyawan</th>
                                    <th>Nama Karyawan</th>
                                    <th>Gaji Pokok</th>
                                    <th>Gaji Lembur</th>
                                    <th>Tunjangan</th>
                                    <th>Jabatan</th>
                                    <th>Total Potongan</th>
                                    <th>Total Gaji</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detail as $det)
                                    <tr>
                                        <td>{{ $det->karyawan_id }}</td>
                                        <td>{{ $det->karyawan->nm_karyawan }}</td>
                                        <td>{{ $det->karyawan->gaji->gaji_pokok }}</td>
                                        <td>{{ $det->lembur }}</td>
                                        <td>{{ $det->tunjangan->tunjangan }}</td>
                                        <td>{{ $det->karyawan->gaji->jabatan }}</td>
                                        <td>{{ $det->tot_pot }}</td>
                                        <td>{{ $det->gtot }}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    data-original-title="Edit Task"
                                                    wire:click.prevent="Rubah_gaji({{ $det->id }})">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-danger" data-original-title="Remove"
                                                    wire:click.prevent="Hapus_gaji({{ $det->id }})">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID Karyawan</th>
                                    <th>Nama Karyawan</th>
                                    <th>Gaji Pokok</th>
                                    <th>Gaji Lembur</th>
                                    <th>Tunjangan</th>
                                    <th>Jabatan</th>
                                    <th>Total Potongan</th>
                                    <th>Total Gaji</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
