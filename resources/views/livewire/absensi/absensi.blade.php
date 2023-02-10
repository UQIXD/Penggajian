<div>
    <div>
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Absensi
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
                        <a href="#">Data Absensi</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Data Absensi</h4>
                            <button class="btn btn-primary btn-round ml-auto" wire:click.prevent="tambahAbs">
                                <i class="fa fa-plus"></i>
                                Tambah Data
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama</th>
                                        <th>Bulan</th>
                                        <th>Terlambat</th>
                                        <th>Lembur</th>
                                        <th>Sakit</th>
                                        <th>Ijin</th>
                                        <th>Cuti</th>
                                        <th>Alpha</th>
                                        <th>Biaya Lain</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($absensi as $abs)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $abs->karyawan->nm_karyawan }}</td>
                                            <td>{{ $abs->bulan }}</td>
                                            <td>{{ $abs->terlambat }}</td>
                                            <td>{{ $abs->lembur }}</td>
                                            <td>{{ $abs->sakit }}</td>
                                            <td>{{ $abs->izin }}</td>
                                            <td>{{ $abs->cuti }}</td>
                                            <td>{{ $abs->alpha }}</td>
                                            <td>{{ $abs->lain }}</td>
                                            {{-- <td>{{ $abs->denda }}</td>
                                            <td>{{ $abs->gajiLembur }}</td> --}}
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                        class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Task"
                                                        wire:click.prevent="Rubah_abs({{ $abs->id }})">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title=""
                                                        class="btn btn-link btn-danger" data-original-title="Remove"
                                                        wire:click.prevent="Hapus_abs({{ $abs->id }})">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama</th>
                                        <th>Bulan</th>
                                        <th>Terlambat</th>
                                        <th>Lembur</th>
                                        <th>Sakit</th>
                                        <th>Ijin</th>
                                        <th>Cuti</th>
                                        <th>Alpha</th>
                                        <th>Biaya Lain</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-tambah" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #202940;">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            @if ($showEdit)
                                Rubah Absensi
                            @else
                                Tambah Absensi
                            @endif
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="formku" autocomplete="off"
                        wire:submit.prevent="{{ $showEdit ? 'updateAbs' : 'createAbs' }}">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" id="karyawan_id" name="karyawan_id"
                                        list="id_kary" placeholder="Masukkan Nama Karyawan"
                                        wire:model.defer="data.karyawan_id" required>
                                    {{-- <select id="karyawan_id" name="karyawan_id" wire:model.defer="data.karyawan_id" required> --}}
                                        <datalist id="id_kary">
                                            {{-- <option value=""> - Pilih Karyawan - </option> --}}
                                        @foreach ($karyawan as $kry)
                                            <option value="{{ $kry->id }}"> {{ $kry->nm_karyawan }} </option>
                                        @endforeach
                                        </datalist>
                                    {{-- </select> --}}
                                    <br>
                                    {{-- <input type="number" class="form-control"
                                    id="nama" name="nama"> --}}
                                    {{-- <p id="nama" name="nama" style="color: white"></p> --}}
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bulan</label>
                                    <input type="date" class="form-control" wire:model.defer="data.bulan"
                                        id="bulan" name="bulan" placeholder="Masukkan Bulan"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Terlambat</label>
                                    <input type="text" class="form-control" wire:model.defer="data.terlambat"
                                        id="terlambat" name="terlambat" placeholder="Masukkan Jumlah Terlambat"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lembur /Jam</label>
                                    <input type="text" class="form-control" wire:model.defer="data.lembur"
                                        id="lembur" name="lembur" placeholder="Masukkan Jumlah Lembur" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sakit</label>
                                    <input type="text" class="form-control" wire:model.defer="data.sakit"
                                        id="sakit" name="sakit" placeholder="Masukkan Jumlah Sakit" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Izin</label>
                                    <input type="text" class="form-control" wire:model.defer="data.izin"
                                        id="izin" name="izin" placeholder="Masukkan Jumlah Izin" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cuti</label>
                                    <input type="text" class="form-control" wire:model.defer="data.cuti"
                                        id="cuti" name="cuti" placeholder="Masukkan Jumlah Cuti" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alpha</label>
                                    <input type="text" class="form-control" wire:model.defer="data.alpha"
                                        id="alpha" name="alpha" placeholder="Masukkan Jumlah Alpha" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Biaya Lain - Lain</label>
                                    <input type="text" class="form-control" wire:model.defer="data.lain"
                                        id="lain" name="lain" placeholder="Masukkan Jumlah Biaya" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="submit" id="submit" class="btn btn-primary" name="tambah"
                                value="tambah">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        {{-- modal hapus --}}

        <div class="modal fade" id="modal-hapus" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #202940;color: white">
                    <div class="modal-header">
                        <h4 class="modal-title">Hapus Data Absensi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form autocomplete="off" wire:submit.prevent="hapusAbs">
                        <div class="modal-body">
                            <div class="card-body">
                                <p>Apakah Data dihapus...?</p>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="submit" id="submit" class="btn btn-primary" name="tambah"
                                value="tambah">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@push('jsku')
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <!-- Atlantis JS -->
    <script src="{{ asset('assets/js/atlantis.min.js') }}"></script>
    {{-- <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="{{ asset('assets/js/setting-demo2.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});

            $('#multi-filter-select').DataTable({
                "pageLength": 5,
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-control"><option value=""></option></select>'
                            )
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d +
                                '</option>')
                        });
                    });
                }
            });

            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });

            var action =
                '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $('#addRowButton').click(function() {
                $('#add-row').dataTable().fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action
                ]);
                $('#addRowModal').modal('hide');

            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#karyawan_id').on('change', function() {
                if (this.value) {
                    $.get('http://127.0.0.1:8000/cari_kar/' + this.value, function(response) {
                        if (response) {
                            console.log(response.karyawan);
                            $('#karyawan_id').val(response.karyawan[0]['id']);
                            $('#nama').text(response.karyawan[0]['nm_karyawan']);
                        } else {
                            console.log('error');
                        }
                    });

                }
            });

            // $('#formku').submit(function() {
            //     @this.set('data.denda', $('#denda').val());
            //     @this.set('data.gajiLembur', $('#gajiLembur').val());
            // });
        });
    </script>
@endpush
