<div>
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Karyawan
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
                    <a href="#">Data Karyawan</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Karyawan</h4>
                        <button class="btn btn-primary btn-round ml-auto" wire:click.prevent="tambahKry">
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
                                    <th>Nama Karyawan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>TTL</th>
                                    <th>No Telepon</th>
                                    <th>Status</th>
                                    <th>Alamat</th>
                                    <th>Kewarganegaraan</th>
                                    <th>Foto</th>
                                    <th>Jabatan</th>
                                    <th>Gaji</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($karyawan as $kry)
                                    <tr>
                                        <td>{{ $kry->nm_karyawan }}</td>
                                        <td>{{ $kry->jns_kelamin }}</td>
                                        <td>{{ $kry->agama }}</td>
                                        <td>{{ $kry->ttl }}</td>
                                        <td>{{ $kry->no_telpon }}</td>
                                        <td>{{ $kry->status }}</td>
                                        <td>{{ $kry->alamat }}</td>
                                        <td>{{ $kry->kewarganegaraan }}</td>
                                        <td>{{ $kry->foto }}</td>
                                        <td>{{ $kry->gaji->jabatan }}</td>
                                        <td>{{ $kry->gaji->gaji_pokok }}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    data-original-title="Edit Task"
                                                    wire:click.prevent="Rubah_kry({{ $kry->id }})">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-danger" data-original-title="Remove"
                                                    wire:click.prevent="Hapus_kry({{ $kry->id }})">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Karyawan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>TTL</th>
                                    <th>No Telepon</th>
                                    <th>Status</th>
                                    <th>Alamat</th>
                                    <th>Kewarganegaraan</th>
                                    <th>Foto</th>
                                    <th>Jabatan</th>
                                    <th>Gaji</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #202940;">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        @if ($showEdit)
                            Rubah Karyawan
                        @else
                            Tambah Karyawan
                        @endif
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <p class="small">Create a new row using this form, make sure you
                        fill them all
                    </p> --}}
                    <form wire:submit.prevent="{{ $showEdit ? 'updateKry' : 'createKry' }}">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Nama Karyawan</label>
                                    <input id="nm_karyawan" type="text" class="form-control" name="nm_karyawan"
                                        placeholder="Masukkan Nama" wire:model.defer="data.nm_karyawan">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Jenis Kelamin</label>
                                    <div class="form-control">
                                        <input type="radio" name="jns_kelamin" id="jns_kelamin" value="Laki-Laki"
                                            wire:model.defer="data.jns_kelamin">
                                        Laki-Laki
                                        <input style="margin-left: 15px" type="radio" name="jns_kelamin"
                                            id="jns_kelamin" value="Perempuan" wire:model.defer="data.jns_kelamin">
                                        Perempuan
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Agama</label>
                                    <select name="agama" id="agama" wire:model.defer="data.agama"
                                        style="background-color: #202940; color: white">
                                        <option value=""> - Pilih Agama - </option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Tempat Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="ttl" id="ttl"
                                        value="{{ date('Y-m-d') }}" name="ttl" wire:model.defer="data.ttl">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Nomer Telepon</label>
                                    <input id="no_telpon" name="no_telpon" type="text" class="form-control"
                                        placeholder="Masukkan Nomer Telepon" wire:model.defer="data.no_telpon">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Status</label>
                                    <div class="form-control">
                                        <input type="radio" name="status" id="status" value="Menikah"
                                            wire:model.defer="data.status">
                                        Menikah
                                        <input style="margin-left: 15px" type="radio" name="status"
                                            id="status" value="Belum Menikah" wire:model.defer="data.status">
                                        Belum Menikah
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Alamat</label>
                                    <input id="alamat" type="text" name="alamat" class="form-control"
                                        placeholder="Masukkan Alamat" wire:model.defer="data.alamat">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Kewarganegaraan</label>
                                    <input id="kewarganegaraan" name="kewarganegaraan" type="text"
                                        class="form-control" placeholder="Masukkan Kewarganegaraan"
                                        wire:model.defer="data.kewarganegaraan">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Gaji</label>
                                    <select name="gaji_id" id="gaji_id" wire:model.defer="data.gaji_id"
                                        style="background-color: #202940; color: white">
                                        <option value="0"> - Pilih Gaji - </option>
                                        @foreach ($gaji as $gj)
                                            <option value="{{ $gj->id }}">{{ $gj->jabatan }} |
                                                {{ $gj->gaji_pokok }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer no-bd">
                            <button type="submit" id="submit" name="tambah" value="tambah"
                                class="btn btn-primary">Add</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal hapus --}}

    <div class="modal fade" id="modal-hapus" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #202940; color: white">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Karyawan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form autocomplete="off" wire:submit.prevent="hapusKry">
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
    <!-- Atlantis JS -->
    <script src="{{ asset('assets/js/atlantis.min.js') }}"></script>
    {{-- <!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/setting-demo2.js') }}"></script> --}}

    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/locales/bootstrap-datepicker.id.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
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
@endpush
