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
        @foreach ($detail as $det)
            <div style="text-align: center;">
                <span style="font-size: 50px;color: white">Slip Gaji</span>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <label>ID</label>
                        <br>
                        <p>{{ $det->karyawan_id }}</p>
                        </select>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4"></div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-4">
                        <label for="nm_karyawan">Nama :</label>
                        {{-- <span id="nm_karyawan" style="display: inline"></span> --}}
                        <p>{{ $det->karyawan->nm_karyawan }}</p>
                    </div>
                    <div class="col-4">
                    </div>
                    <div class="col-4"></div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-4">
                        <label for="">Jabatan</label>
                        {{-- <input type="text" id="jabatan" name="jabatan" wire:model.defer="data.jabatan"
                            class="form-control" value="{{ old('jabatan') }}"> --}}
                        {{-- <span id="jabatan" wire:model.defer="data.jabatan"></span> --}}
                        <p>{{ $det->jabatan }}</p>
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
                        {{-- <div id="gaji_pokok" wire:model.defer="data.gaji_pokok" class="subtot"></div> --}}
                        {{-- <input id="gaji_pokok" name="gaji_pokok" type="text" class="form-control subtot"
                            name="gaji_pokok" wire:model.defer="data.gaji_pokok" value="{{ old('gaji_pokok') }}"
                            required> --}}
                        <p>{{ $det->gaji_pokok }}</p>
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
                        <p id="lembur" style="display: inline"></p> X 25.000)
                        </p>
                        </p>
                        {{-- @endif --}}
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4">
                        {{-- <span id="lemb" wire:model.defer="data.lembur" class="subtot"></span> --}}
                        {{-- <div id="lemb" wire:model.defer="data.lembur" class="subtot pen"></div> --}}
                        {{-- <input type="text" id="lemb" name="lembur" value="{{ old('lembur') }}"
                            wire:model.defer="data.lembur" class="form-control subtot" required> --}}
                        <p>{{ $det->lembur }}</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4">
                        <p>Tunjangan</p>
                    </div>
                    <div class="col-4">
                        {{-- <span id="tun" wire:model.defer="data.tunjangan" class="subtot"></span> --}}
                        {{-- <div id="tun" wire:model.defer="data.tunjangan" class="subtot pen"></div> --}}
                        {{-- <input type="text" id="tun" name="tunjangan" value="{{ old('tunjangan') }}"
                            wire:model.defer="data.tunjangan" class="form-control subtot" required> --}}
                        {{-- <p id="tun"></p> --}}
                        <p>{{ $det->tunjangan }}</p>
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
                        <input type="text" id="totwal" class="form-control">
                        ____________________________________________________________
                        {{-- <div id="subTotal" wire:model.defer="data.subtot"></div> --}}
                        <input type="text" id="subTotal" wire:model.defer="data.subtot" value="{{ old('subtot') }}"
                            name="subtot" class="form-control" required>
                        <p>{{ $det->subtot }}</p>
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
                        {{-- <div id="pph" wire:model.defer="data.pph" class="tot_pot"></div> --}}
                        <input type="text" id="pph" class="form-control" wire:model.defer="data.pph"
                            value="{{ old('pph') }}" name="pph" required>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Presmi Ass. Kec</p>
                    </div>
                    <div class="col-4">
                        {{-- <span id="ass_kec" wire:model.defer="data.ass_kec" class="tot_pot"></span> --}}
                        {{-- <div id="ass_kec" wire:model.defer="data.ass_kec" class="tot_pot"></div> --}}
                        <input type="text" id="ass_kec" class="form-control" wire:model.defer="data.ass_kec"
                            value="{{ old('ass_kec') }}" name="ass_kec" required>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Presmi Ass. Kem</p>
                    </div>
                    <div class="col-4">
                        {{-- <span id="ass_kem" wire:model.defer="data.ass_kem" class="tot_pot"></span> --}}
                        {{-- <div id="ass_kem" wire:model.defer="data.ass_kem" class="tot_pot"></div> --}}
                        <input type="text" id="ass_kem" name="ass_kem" class="form-control"
                            value="{{ old('ass_kem') }}" wire:model.defer="data.ass_kem" required>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Iuran THT</p>
                    </div>
                    <div class="col-4">
                        {{-- <span id="iuran_tht" wire:model.defer="data.iuran_tht" class="tot_pot"></span> --}}
                        {{-- <div id="iuran_tht" wire:model.defer="data.iuran_tht" class="tot_pot"></div> --}}
                        <input type="text" id="iuran_tht" name="iuran_tht" class="form-control"
                            value="{{ old('iuran_tht') }}" wire:model.defer="data.iuran_tht" required>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Iuran Pensiun</p>
                    </div>
                    <div class="col-4">
                        {{-- <span id="iuran_pensiun" wire:model.defer="data.iuran_pensiun" class="tot_pot"></span> --}}
                        {{-- <div id="iuran_pensiun" wire:model.defer="data.iuran_pensiun" class="tot_pot"></div> --}}
                        <input type="text" id="iuran_pensiun" name="iuran_pensiun"
                            value="{{ old('iuran_pensiun') }}" wire:model.defer="data.iuran_pensiun"
                            class="form-control" required>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Iuran Organisasi</p>
                    </div>
                    <div class="col-4">
                        {{-- <span id="iuran_organisasi" wire:model.defer="data.iuran_organisasi" class="tot_pot"></span> --}}
                        {{-- <div id="iuran_organisasi" wire:model.defer="data.iuran_organisasi" class="tot_pot"></div> --}}
                        <input type="text" id="iuran_organisasi" name="iuran_organisasi"
                            value="{{ old('iuran_organisasi') }}" wire:model.defer="data.iuran_organisasi"
                            class="form-control" required>
                    </div>
                    <div class="col-4"></div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-4">
                        <p>Absensi</p>
                    </div>
                    <div class="col-4">
                        {{-- <input type="text" id="absen" name="absensi" wire:model.defer="data.terlambat"
                            value="{{ old('absensi_id') }}" class="form-control" required> --}}
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
                        {{-- <div id="tmb" wire:model.defer="data.terlambat" class="tot_pot"></div> --}}
                        <input type="text" id="tmb" name="terlambat" wire:model.defer="data.terlambat"
                            value="{{ old('terlambat') }}" class="form-control" required>
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
                        {{-- <div id="izn" class="tot_pot" wire:model.defer="data.izin"></div> --}}
                        <input type="text" id="izn" name="izin" class="form-control"
                            value="{{ old('izin') }}" wire:model.defer="data.izin" required>
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
                        {{-- <div id="cut" class="tot_pot" wire:model.defer="data.cuti"></div> --}}
                        <input type="text" id="cut" name="cuti" class="form-control"
                            value="{{ old('cuti') }}" wire:model.defer="data.cuti" required>
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
                        {{-- <div id="alp" wire:model.defer="data.alpha" class="tot_pot"></div> --}}
                        <input type="text" id="alp" name="alpha" wire:model.defer="data.alpha"
                            value="{{ old('alpha') }}" class="form-control" required>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p style="display: inline;">- Sakit
                        <p style="margin-inline-start: 122px;display: inline;">
                            (
                        <p id="sakit" style="display: inline"></p> )</p>
                        </p>
                    </div>
                    <div class="col-4">
                        {{-- <span id="skt"></span> --}}
                        {{-- <input type="text" id="sakit" name="sakit" class="form-control"
                        wire:model.defer="sakit"> --}}
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        {{-- <p> - Biaya Lain - Lain</p> --}}
                        <input type="text" id="biaya" name="biaya" class="form-control"
                            value="{{ old('biaya') }}" wire:model.defer="data.biaya"
                            placeholder="Masukkan Biaya Lain">
                    </div>
                    <div class="col-4">
                        {{-- <span id="lain" class="tot_pot"></span> --}}
                        {{-- <div id="lain" class="tot_pot"></div> --}}
                        <input type="text" id="lain" name="jum_bi" class="form-control"
                            value="{{ old('jum_bi') }}" wire:model.defer="data.jum_bi"
                            placeholder="Masukkan Jumlah Biaya">

                        {{-- <input type="text" id="lain" class="tot_pot"> --}}
                        ____________________________________________________________
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
                        {{-- <div id="tot_pot" wire:model.defer="data.tot_pot"></div> --}}
                        <input type="text" id="tot_pot" name="tot_pot" class="form-control"
                            value="{{ old('tot_pot') }}" wire:model.defer="data.tot_pot" required>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Total Pengurangan
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4">
                        <input type="text" id="pot" class="form-control">
                        ____________________________________________________________
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
                        {{-- <div id="gtot" wire:model.defer="data.gtot"></div> --}}
                        <input type="text" id="gtot" name="gtot" class="form-control"
                            value="{{ old('gtot') }}" wire:model.defer="data.gtot" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4"></div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="{{ route('detail.detail') }}" class="btn btn-danger">Close</a>
                        {{-- <button type="button" class="btn btn-danger" data-dismiss="modal"><a href="{{ route('detail.detail') }}">Close</a> Close</button> --}}
                        {{-- <a href="">close</a> --}}
                    </div>
                </div>
                </form>
            </div>
        @endforeach
    </div>
</body>

</html>
