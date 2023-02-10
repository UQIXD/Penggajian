    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <style>
            datalist {
                display: none;
            }
        </style>
        <div class="container-fluid">
            <div style="text-align: center;">
                <span style="font-size: 50px;color: white">Slip Gaji</span>
            </div>
            <div class="col-12">
                <form wire:submit.prevent="createDet" autocomplete="off" style="color: white">
                    <div class="row">
                        <div class="col-4">
                            <label for="id_karyawan">ID</label>
                            @foreach ($detail as $det)
                                <p>{{ $det-karyawan_id }}</p>
                            @endforeach
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4"></div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <label for="nm_karyawan">Nama : <div id="nm_karyawan"></div></label>
                            {{-- <span id="nm_karyawan"></span> --}}
                        </div>
                        <div class="col-4">
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <label for="">Jabatan : <div id="jabatan" wire:model.defer="data.jabatan"></div>
                                </label>
                            {{-- <span id="jabatan" wire:model.defer="data.jabatan"></span> --}}
                        </div>
                        <div class="col-4">
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-4" style="color: white">
                            <p>Gaji Pokok</p>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4">
                            {{-- <p id="gaji_pokok"></p> --}}
                            {{-- <span id="gaji_pokok" wire:model.defer="data.gaji_pokok" class="subtot"></span> --}}
                            <div id="gaji_pokok" wire:model.defer="data.gaji_pokok" class="subtot"></div>
                            {{-- <input id="gaji_pokok" type="text" class="form-control" name="gaji_pokok"
                                placeholder="Masukkan Gaji Pokok" wire:model.defer="data.gaji_pokok"> --}}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            {{-- {{ dd($gaji->gaji_pokok)  }} --}}
                            {{-- @if ($gaji_pokok > 3000000) --}}
                            {{-- <p style="display: inline">Gaji Lembur
                                <p style="margin-inline-start: 10px;display: inline;">
                                    (
                                <p id="lembur" style="display: inline"></p> X 50.000 )</p>
                                </p> --}}
                            {{-- @else --}}
                            <p style="display: inline">Gaji Lembur
                            <p style="margin-inline-start: 10px;display: inline;">
                                (
                            <p id="lembur" style="display: inline"></p> X 25.000 )</p>
                            </p>
                            {{-- @endif --}}
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4">
                            {{-- <span id="lemb" wire:model.defer="data.lembur" class="subtot"></span> --}}
                            <div id="lemb" wire:model.defer="data.lembur" class="subtot pen"></div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <p>Tunjangan</p>
                        </div>
                        <div class="col-4">
                            {{-- <span id="tun" wire:model.defer="data.tunjangan" class="subtot"></span> --}}
                            <div id="tun" wire:model.defer="data.tunjangan" class="subtot pen"></div>
                            {{-- <p id="tun"></p> --}}
                            {{-- <input id="tun" type="text" class="form-control" name="tun"
                                placeholder="Masukkan Nama" wire:model.defer="data.tunjangan"> --}}
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <br>
                            <p>Penghasilan Bruto</p>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4" style="text-align: start">
                            <br>
                            <p>Subtotal</p>
                            <div id="pen"></div>
                            {{-- <p id="subTotal"></p> --}}
                            {{-- <span id="subTotal" wire:model.defer="data.subtot"></span> --}}
                            _________________________________
                            <div id="subTotal" wire:model.defer="data.subtot"></div>
                            {{-- <input id="subTotal" type="text" class="form-control" name="subTotal"
                                wire:model.defer="data.subTotal"> --}}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <p>Pengurangan / Potongan :</p>
                        </div>
                        <div class="col-4">
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <p>PPh Ps 21</p>
                        </div>
                        <div class="col-4">
                            {{-- <span id="pph" wire:model.defer="data.pph" class="tot_pot"></span> --}}
                            <div id="pph" wire:model.defer="data.pph" class="tot_pot"></div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Presmi Ass. Kec</p>
                        </div>
                        <div class="col-4">
                            {{-- <span id="ass_kec" wire:model.defer="data.ass_kec" class="tot_pot"></span> --}}
                            <div id="ass_kec" wire:model.defer="data.ass_kec" class="tot_pot"></div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Presmi Ass. Kem</p>
                        </div>
                        <div class="col-4">
                            {{-- <span id="ass_kem" wire:model.defer="data.ass_kem" class="tot_pot"></span> --}}
                            <div id="ass_kem" wire:model.defer="data.ass_kem" class="tot_pot"></div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Iuran THT</p>
                        </div>
                        <div class="col-4">
                            {{-- <span id="iuran_tht" wire:model.defer="data.iuran_tht" class="tot_pot"></span> --}}
                            <div id="iuran_tht" wire:model.defer="data.iuran_tht" class="tot_pot"></div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Iuran Pensiun</p>
                        </div>
                        <div class="col-4">
                            {{-- <span id="iuran_pensiun" wire:model.defer="data.iuran_pensiun" class="tot_pot"></span> --}}
                            <div id="iuran_pensiun" wire:model.defer="data.iuran_pensiun" class="tot_pot"></div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Iuran Organisasi</p>
                        </div>
                        <div class="col-4">
                            {{-- <span id="iuran_organisasi" wire:model.defer="data.iuran_organisasi" class="tot_pot"></span> --}}
                            <div id="iuran_organisasi" wire:model.defer="data.iuran_organisasi" class="tot_pot">
                            </div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Denda</p>
                        </div>
                        <div class="col-4">
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p style="display: inline;">- Terlambat = 10.000/hari
                            <p style="margin-inline-start: 5px;display: inline;">
                                (
                            <p id="terlambat" style="display: inline"></p> )</p>
                            </p>
                        </div>
                        <div class="col-4">
                            {{-- <span id="tmb" class="tot_pot"></span> --}}
                            <div id="tmb" wire:model.defer="data.terlambat" class="tot_pot"></div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p style="display: inline;">- Izin > 3 = 70.000/hari
                            <p style="margin-inline-start: 23px;display: inline;">
                                (
                            <p id="izin" style="display: inline"></p> )</p>
                            </p>

                        </div>
                        <div class="col-4">
                            {{-- <span id="izn" class="tot_pot"></span> --}}
                            <div id="izn" class="tot_pot" wire:model.defer="data.izin"></div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p style="display: inline;">- Cuti > 15 = 70.000/hari
                            <p style="margin-inline-start: 10px;display: inline;">
                                (
                            <p id="cuti" style="display: inline"></p> )</p>
                            </p>
                        </div>
                        <div class="col-4">
                            {{-- <span id="cut" class="tot_pot"></span> --}}
                            <div id="cut" class="tot_pot" wire:model.defer="data.cuti"></div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p style="display: inline;">- Alpha = 70.000/hari
                            <p style="margin-inline-start: 30px;display: inline;">
                                (
                            <p id="alpha" style="display: inline"></p> )</p>
                            </p>

                        </div>
                        <div class="col-4">
                            {{-- <span id="alp" class="tot_pot"></span> --}}
                            <div id="alp" wire:model.defer="data.alpha" class="tot_pot"></div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p style="display: inline;">- Sakit
                            <p style="margin-inline-start: 122px;display: inline;">
                                (
                            <p id="sakit" wire:model.defer="data.sakit" style="display: inline"></p> )</p>
                            </p>
                        </div>
                        <div class="col-4">
                            <span id="skt"></span>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p> - Biaya Lain - Lain</p>
                        </div>
                        <div class="col-4">
                            {{-- <span id="lain" class="tot_pot"></span> --}}
                            <div id="lain" class="tot_pot"></div>
                            _________________________________
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <p>Total Potongan</p>
                        </div>
                        <div class="col-4">
                            {{-- <span id="tot_pot" wire:model.defer="data.tot_pot"></span> --}}
                            <div id="tot_pot" wire:model.defer="data.tot_pot"></div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            Total Pengurangan
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4">
                            <p id="pot"></p>
                            _________________________________
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            Penghasilan Netto
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4">
                            {{-- <p id="gtot"></p> --}}
                            {{-- <span id="gtot" wire:model.defer="data.gtot"></span> --}}
                            <div id="gtot" wire:model.defer="data.gtot"></div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4"></div>
                        <div class="col-4">
                            <button type="submit" id="submit" name="tambah" value="tambah"
                                class="btn btn-primary">Add</button>
                            <a href="{{ route('detail.detail') }}" class="btn btn-danger">Close</a>
                            {{-- <button type="button" class="btn btn-danger" data-dismiss="modal"><a href="{{ route('detail.detail') }}">Close</a> Close</button> --}}
                            {{-- <a href="">close</a> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html>
