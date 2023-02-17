<div>
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Potongan
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
                    <a href="#">Data Potongan</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Potongan</h4>
                        <button class="btn btn-primary btn-round ml-auto" wire:click.prevent="tambahPot">
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
                                    <th>Jabatan</th>
                                    <th>Gaji Pokok</th>
                                    <th>PPH</th>
                                    <th>Asuransi Kecelakaan</th>
                                    <th>Asuransi Kematian</th>
                                    <th>Iuran THT</th>
                                    <th>Iuran Pensiun</th>
                                    <th>Iuran Organisasi</th>
                                    <th>Terlambat</th>
                                    <th>Izin</th>
                                    <th>Cuti</th>
                                    <th>Alpha</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($potongan as $pot)
                                    <tr>
                                        <td>{{ $pot->gaji->jabatan }}</td>
                                        <td>{{ $pot->gaji->gaji_pokok }}</td>
                                        <td>{{ $pot->pot_pph }}</td>
                                        <td>{{ $pot->pot_ass_kec }}</td>
                                        <td>{{ $pot->pot_ass_kem }}</td>
                                        <td>{{ $pot->pot_iuran_tht }}</td>
                                        <td>{{ $pot->pot_iuran_pensiun }}</td>
                                        <td>{{ $pot->pot_iuran_organisasi }}</td>
                                        <td>{{ $pot->denda_terlambat }}</td>
                                        <td>{{ $pot->denda_izin }}</td>
                                        <td>{{ $pot->denda_cuti }}</td>
                                        <td>{{ $pot->denda_alpha }}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    data-original-title="Edit Task"
                                                    wire:click.prevent="Rubah_pot({{ $pot->id }})">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-danger" data-original-title="Remove"
                                                    wire:click.prevent="Hapus_pot({{ $pot->id }})">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
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
                            Rubah Potongan
                        @else
                            Tambah Potongan
                        @endif
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form autocomplete="off" wire:submit.prevent="{{ $showEdit ? 'updatePot' : 'createPot' }}">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jabatan</label>
                                    <select name="gaji_id" id="gaji_id" class="form-control" wire:model.defer="data.gaji_id" style="text-align: center" required>
                                        <option value="0" style="text-align: center"> - Pilih Gaji - </option>
                                        @foreach ($gaji as $pot)
                                            <option value="{{ $pot->id }}" style="text-align: center">{{ $pot->jabatan }} |
                                                {{ $pot->gaji_pokok }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Potongan PPH / %</label>
                                <input type="text" class="form-control" autocomplete="off"
                                    wire:model.defer="data.pot_pph" id="pot_pph" name="pot_pph"
                                    placeholder="Masukkan Potongan PPH" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Potongan Asuransi Kecelakaan / %</label>
                                <input type="text" class="form-control" autocomplete="off"
                                    wire:model.defer="data.pot_ass_kec" id="pot_ass_kec" name="pot_ass_kec"
                                    placeholder="Masukkan Potongan Asuransi Kecelakaan" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Potongan Asuransi Kematian / %</label>
                                <input type="text" class="form-control" autocomplete="off"
                                    wire:model.defer="data.pot_ass_kem" id="pot_ass_kem" name="pot_ass_kem"
                                    placeholder="Masukkan Potongan Asuransi Kematian" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Potongan Iuran THT / %</label>
                                <input type="text" class="form-control" autocomplete="off"
                                    wire:model.defer="data.pot_iuran_tht" id="pot_iuran_tht" name="pot_iuran_tht"
                                    placeholder="Masukkan Potongan Iuran THT" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Potongan Iuran Pensiun / %</label>
                                <input type="text" class="form-control" autocomplete="off"
                                    wire:model.defer="data.pot_iuran_pensiun" id="pot_iuran_pensiun" name="pot_iuran_pensiun"
                                    placeholder="Masukkan Potongan Iuran Pensiun" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Potongan Iuran Organisasi / %</label>
                                <input type="text" class="form-control" autocomplete="off"
                                    wire:model.defer="data.pot_iuran_organisasi" id="pot_iuran_organisasi" name="pot_iuran_organisasi"
                                    placeholder="Masukkan Potongan Iuran Organisasi" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Potongan Denda Terlambat / Hari</label>
                                <input type="text" class="form-control" autocomplete="off"
                                    wire:model.defer="data.denda_terlambat" id="denda_terlambat" name="denda_terlambat"
                                    placeholder="Masukkan Potongan Denda Terlambat" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Limit Izin</label>
                                <input type="text" class="form-control" autocomplete="off"
                                    wire:model.defer="data.limit_izin" id="limit_izin" name="limit_izin"
                                    placeholder="Masukkan Limit Izin" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Potongan Denda Izin / Hari</label>
                                <input type="text" class="form-control" autocomplete="off"
                                    wire:model.defer="data.denda_izin" id="denda_izin" name="denda_izin"
                                    placeholder="Masukkan Potongan Denda Izin" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Limit Cuti</label>
                                <input type="text" class="form-control" autocomplete="off"
                                    wire:model.defer="data.limit_cuti" id="limit_cuti" name="limit_cuti"
                                    placeholder="Masukkan Limit Cuti" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Potongan Denda Cuti / Hari</label>
                                <input type="text" class="form-control" autocomplete="off"
                                    wire:model.defer="data.denda_cuti" id="denda_cuti" name="denda_cuti"
                                    placeholder="Masukkan Potongan Denda Cuti" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Potongan Denda Alpha / Hari</label>
                                <input type="text" class="form-control" autocomplete="off"
                                    wire:model.defer="data.denda_alpha" id="denda_alpha" name="denda_alpha"
                                    placeholder="Masukkan Potongan Denda Alpha" required>
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
                    <h4 class="modal-title">Hapus Data Potongan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form autocomplete="off" wire:submit.prevent="hapusPot">
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


    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/locales/bootstrap-datepicker.id.min.js') }}"></script>

    <script>
        $(function() {
            $("#ttl").datepicker({
                autoclose: true,
                todayHighlight: true,
                format: 'yyyy-mm-dd',
                language: 'id'
            });
        });
    </script>
@endpush
