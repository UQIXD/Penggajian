<x-admin-layout>
    <div class="container-fluid">
        <div style="text-align: center;">
            <span style="font-size: 50px;color: white">Slip Gaji</span>
        </div>
        <div class="col-12">
            <form action="{{ route('save_rubah', $detail->id) }}" wire:submit.prevent="createDet" autocomplete="off" method="POST" style="color: white">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-4">
                        <label for="id_karyawan">ID</label>
                        <br>
                        {{-- <input id="id_karyawan" type="text" class="form-control" name="id_karyawan"
                            placeholder="Masukkan Nama" wire:model.defer="data.id_karyawan" list="id_kry"> --}}
                        <select name="karyawan_id" id="karyawan_id" class="karyawan_id"
                            style="background-color: #1a2035;text-align: center" placeholder="Ketik Untuk Mencari"
                            wire:model.defer="data.karyawan_id">
                            <option value=""> - Pilih Karyawan - </option>
                            {{-- <datalist id="id_kry"> --}}
                            {{-- @forelse ($karyawan as $kry) --}}
                            @foreach ($absensi as $kry)
                                <option value="{{ $kry->karyawan_id }}" {{ old('karyawan_id') == $kry->karyawan_id ? 'selected' : '' }}
                                    style="text-align: center;background-color: #1a2035">
                                    {{ $kry->karyawan->nm_karyawan }}
                                </option>
                            @endforeach
                            {{-- @empty --}}
                            {{-- <option value=""> - Pilih Karyawan - </option> --}}
                            {{-- @endforelse --}}
                            {{-- </datalist> --}}
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
                        <span id="nm_karyawan" style="display: inline"></span>
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
                        <input type="text" id="jabatan" name="jabatan" wire:model.defer="data.jabatan"
                            class="form-control" value="{{ old('jabatan') }}">
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
                        {{-- <div id="gaji_pokok" wire:model.defer="data.gaji_pokok" class="subtot"></div> --}}
                        <input id="gaji_pokok" name="gaji_pokok" type="text" class="form-control subtot"
                            name="gaji_pokok" wire:model.defer="data.gaji_pokok" value="{{ old('gaji_pokok') }}"
                            required>
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
                        {{-- <div id="lemb" wire:model.defer="data.lembur" class="subtot pen"></div> --}}
                        <input type="text" id="lemb" name="lembur" value="{{ old('lembur') }}"
                            wire:model.defer="data.lembur" class="form-control subtot" required>
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
                        <input type="text" id="tun" name="tunjangan" value="{{ old('tunjangan') }}"
                            wire:model.defer="data.tunjangan" class="form-control subtot" required>
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
                        <input type="text" id="totwal" class="form-control">
                        ____________________________________________________________
                        {{-- <div id="subTotal" wire:model.defer="data.subtot"></div> --}}
                        <input type="text" id="subTotal" wire:model.defer="data.subtot" value="{{ old('subtot') }}"
                            name="subtot" class="form-control" required>
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
    </div>
    @push('jsku')
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        <script>
            $(document).ready(function() {
                $("#karyawan_id").select2();
                //   $('#mySelect').select2();
            });
        </script>

        <script>
            $(document).ready(function() {
                // theme: 'bootstrap4',
                // placeholder: "Please Select"
                // function addCommas(nStr) {
                //     nStr += '';
                //     x = nStr.split('.');
                //     x1 = x[0];
                //     x2 = x.length > 1 ? '.' + x[1] : '';
                //     var rgx = /(\d+)(\d{3})/;
                //     while (rgx.test(x1)) {
                //         x1 = x1.replace(rgx, '$1' + ',' + '$2');
                //     }
                //     return x1 + x2;
                // }

                $('#karyawan_id').on('change', function() {
                    if (this.value) {
                        $.get('http://127.0.0.1:8000/cari_karyawan/' + this.value, function(response) {
                            if (response) {
                                console.log(response.karyawan);
                                console.log(response.gaji);
                                console.log(response.absensi);
                                $('#karyawan_id').val(response.absensi[0]['karyawan_id']);
                                $('#absen').val(response.absensi[0]['absensi_id']);
                                // $('#karyawan_id').val(response.karyawan[0]['id']);
                                $('#nm_karyawan').text(response.karyawan[0]['nm_karyawan']);
                                $('#jabatan').val(response.gaji[0]['jabatan']);
                                $('#gaji_pokok').val(response.gaji[0]['gaji_pokok']);
                                $('#terlambat').text(response.absensi[0]['terlambat']);
                                $('#lembur').text(response.absensi[0]['lembur']);
                                $('#sakit').text(response.absensi[0]['sakit']);
                                $('#izin').text(response.absensi[0]['izin']);
                                $('#cuti').text(response.absensi[0]['cuti']);
                                $('#alpha').text(response.absensi[0]['alpha']);
                                // $('#lain').text(response.absensi[0]['lain']);

                                // $("#gaji_pokok").keyup(function() {
                                let number1 = $("#gaji_pokok").val();
                                let number2 = $("#lembur").text();
                                let bur = $("#lemb").val();
                                let number3 = $("#tun").val();

                                // var number1 = parseInt($("#gaji_pokok").text());
                                // var bur = parseInt($("#lemb").text());
                                // var number3 = parseInt($("#tun").text());

                                // var input1 = parseInt($("#input1").val());
                                // var input2 = parseInt($("#input2").val());

                                let ter = $("#terlambat").text();
                                let cut = $("#cuti").text();
                                let izi = $("#izin").text();
                                let alp = $("#alpha").text();
                                let limit = 15;
                                let limitijin = 3;

                                // $('.subtot').each(function() {
                                //     total += parseFloat($(this).text());
                                // });

                                // $('#subTotal').text(total);

                                // let result = parseFloat(number1) + parseFloat(bur) + parseFloat(
                                //     number3);
                                // // let sub = result;
                                // // $("#subTotal").html(addCommas(result));

                                // $("#subTotal").html(result);

                                // if (number1 > 0) {
                                //     let result = parseFloat(number1) + parseFloat(bur) + parseFloat(
                                //         number3);
                                //     // let sub = result;
                                //     // $("#subTotal").html(addCommas(result));

                                //     $("#subTotal").html(result);
                                // } else {
                                //     let result = parseFloat(number1) + parseFloat(bur) + parseFloat(
                                //         number3);
                                //     // let sub = result;
                                //     // $("#subTotal").html(addCommas(result));
                                //     $("#subTotal").html(result);
                                // }
                                if (number1 > 3000000) {
                                    let lemb = number2 * 50000;
                                    // $("#lemb").html(addCommas(lemb));
                                    $("#lemb").val(lemb);
                                } else {
                                    let lemb = number2 * 25000;
                                    // $("#lemb").html(addCommas(lemb));
                                    $("#lemb").val(lemb);
                                }

                                if (number1 > 3000000) {
                                    let number3 = 500000;
                                    // $("#tun").html(addCommas(number3));
                                    $("#tun").val(number3);
                                } else {
                                    let number3 = 250000;
                                    // $("#tun").html(addCommas(number3));
                                    $("#tun").val(number3);
                                }

                                if (number1 > 3000000) {
                                    let pph = (parseFloat(number1) * 5) / 100;
                                    // $("#pph").html(addCommas(pph));
                                    $("#pph").val(pph);
                                } else {
                                    let pph = (parseFloat(number1) * 2) / 100;
                                    // $("#pph").html(addCommas(pph));
                                    $("#pph").val(pph);
                                }

                                if (number1 > 3000000) {
                                    let ass_kec = (parseFloat(number1) * 3) / 100;
                                    // $("#ass_kec").html(addCommas(ass_kec));
                                    $("#ass_kec").val(ass_kec);
                                } else {
                                    let ass_kec = (parseFloat(number1) * 1) / 100;
                                    // $("#ass_kec").html(addCommas(ass_kec));
                                    $("#ass_kec").val(ass_kec);
                                }

                                if (number1 > 3000000) {
                                    let ass_kem = (parseFloat(number1) * 3) / 100;
                                    // $("#ass_kem").html(addCommas(ass_kem));
                                    $("#ass_kem").val(ass_kem);
                                } else {
                                    let ass_kem = (parseFloat(number1) * 1) / 100;
                                    // $("#ass_kem").html(addCommas(ass_kem));
                                    $("#ass_kem").val(ass_kem);
                                }

                                if (number1 > 3000000) {
                                    let iuran_tht = (parseFloat(number1) * 5) / 100;
                                    // $("#iuran_tht").html(addCommas(iuran_tht));
                                    $("#iuran_tht").val(iuran_tht);
                                } else {
                                    let iuran_tht = (parseFloat(number1) * 2) / 100;
                                    // $("#iuran_tht").html(addCommas(iuran_tht));
                                    $("#iuran_tht").val(iuran_tht);
                                }

                                if (number1 > 3000000) {
                                    let iuran_pensiun = (parseFloat(number1) * 5) / 100;
                                    // $("#iuran_pensiun").html(addCommas(iuran_pensiun));
                                    $("#iuran_pensiun").val(iuran_pensiun);
                                } else {
                                    let iuran_pensiun = (parseFloat(number1) * 2) / 100;
                                    // $("#iuran_pensiun").html(addCommas(iuran_pensiun));
                                    $("#iuran_pensiun").val(iuran_pensiun);
                                }

                                if (number1 > 3000000) {
                                    let iuran_organisasi = (parseFloat(number1) * 5) / 100;
                                    // $("#iuran_organisasi").html(addCommas(iuran_organisasi));
                                    $("#iuran_organisasi").val(iuran_organisasi);
                                } else {
                                    let iuran_organisasi = (parseFloat(number1) * 2) / 100;
                                    // $("#iuran_organisasi").html(addCommas(iuran_organisasi));
                                    $("#iuran_organisasi").val(iuran_organisasi);
                                }

                                if (ter > 0) {
                                    // let denda = parseFloat(number1) * 10000;
                                    let tlm = ter * 10000;
                                    // let total = denda;
                                    // $("#tmb").html(addCommas(tlm));
                                    $("#tmb").val(tlm);
                                    // $("#denda").val(number1 * 10000);
                                } else {
                                    let tlm = 0;
                                    // $("#tmb").html(addCommas(tlm));
                                    $("#tmb").val(tlm);
                                }

                                if (izi > limitijin) {
                                    let per2 = izi - limitijin;
                                    let izin = per2 * 70000;
                                    // $("#izn").html(addCommas(izin));
                                    $("#izn").val(izin);
                                } else {
                                    let izin = 0;
                                    // $("#izn").html(addCommas(izin));
                                    $("#izn").val(izin);
                                }

                                if (cut > limit) {
                                    let per1 = cut - limit;
                                    let cuti = per1 * 70000;
                                    $("#cut").val(cuti);
                                    //     // $("#denda").val(cuti + denda);
                                } else {
                                    let cuti = 0;
                                    // $("#cut").html(addCommas(cuti));
                                    $("#cut").val(cuti);
                                }

                                if (alp > 0) {
                                    let alpha = alp * 70000;
                                    $("#alp").val(alpha);
                                } else {
                                    let alpha = alp * 70000;
                                    $("#alp").val(alpha);
                                }

                                var gajpok = document.getElementById('gaji_pokok').value;
                                var lembur = document.getElementById('lemb').value;
                                var tunjangan = document.getElementById('tun').value;

                                var totwal = parseInt(lembur) + parseInt(tunjangan);
                                $("#totwal").val(totwal);
                                var subtot = parseInt(gajpok) + parseInt(lembur) + parseInt(tunjangan);
                                $("#subTotal").val(subtot);

                                // $("#lain").keyup(function() {
                                // let number1 = $("#gaji_pokok").val();
                                // let number2 = $("#lembur").text();
                                // let bur = $("#lemb").val();
                                // let number3 = $("#tun").val();
                                var terlambat = $("#tmb").val();
                                var izinn = $("#izn").val();
                                var cuti = $("#cut").val();
                                var lai = $("#lain").val();
                                var pot_pph = $("#pph").val();
                                var pot_ass_kec = $("#ass_kec").val();
                                var pot_ass_kem = $("#ass_kem").val();
                                var pot_tht = $("#iuran_tht").val();
                                var pot_pensi = $("#iuran_pensiun").val();
                                var pot_organ = $("#iuran_organisasi").val();

                                // var terlambat = document.getElementById('tmb').value;
                                // var izinn = document.getElementById('izn').value;
                                // var cuti = document.getElementById('cut').value;
                                // var lai = document.getElementById('lain').value;
                                // var pot_pph = document.getElementById('pph').value;
                                // var pot_ass_kec = document.getElementById('ass_kec').value;
                                // var pot_ass_kem = document.getElementById('ass_kem').value;
                                // var pot_tht = document.getElementById('iuran_tht').value;
                                // var pot_pensi = document.getElementById('iuran_pensiun').value;
                                // var pot_organ = document.getElementById('iuran_organisasi').value;

                                // var totpot = parseInt(pot_pph) + parseInt(pot_ass_kec) + parseInt(
                                //         pot_ass_kem) + parseInt(pot_tht) + parseInt(pot_pensi) +
                                //     parseInt(pot_organ) + parseInt(terlambat) + parseInt(cuti) +
                                //     parseInt(izinn) + parseInt(lai);
                                var totpot = parseInt(pot_pph) + parseInt(pot_ass_kec) + parseInt(
                                        pot_ass_kem) + parseInt(pot_tht) + parseInt(pot_pensi) +
                                    parseInt(pot_organ) + parseInt(terlambat) + parseInt(cuti) +
                                    parseInt(izinn);
                                // $("#tot_pot").html(addCommas(totpot));
                                $("#tot_pot").val(totpot);
                                $("#pot").val(totpot);

                                var sub = $("#subTotal").val();
                                var subpot = $("#pot").val();
                                var gtot = sub - subpot;
                                $("#gtot").val(gtot);

                                $("#lain").keyup(function() {
                                    var terlambat = $("#tmb").val();
                                    var izinn = $("#izn").val();
                                    var cuti = $("#cut").val();
                                    var lai = $("#lain").val();
                                    var pot_pph = $("#pph").val();
                                    var pot_ass_kec = $("#ass_kec").val();
                                    var pot_ass_kem = $("#ass_kem").val();
                                    var pot_tht = $("#iuran_tht").val();
                                    var pot_pensi = $("#iuran_pensiun").val();
                                    var pot_organ = $("#iuran_organisasi").val();
                                    if (lai > 0) {
                                        var totpot = parseInt(pot_pph) + parseInt(pot_ass_kec) +
                                            parseInt(
                                                pot_ass_kem) + parseInt(pot_tht) + parseInt(
                                                pot_pensi) +
                                            parseInt(pot_organ) + parseInt(terlambat) +
                                            parseInt(
                                                cuti) +
                                            parseInt(izinn) + parseInt(lai);
                                        // var totpot = pot_pph + pot_ass_kec + pot_ass_kem + pot_tht + pot_pensi + pot_organ + terlambat + cuti + izinn + lai;
                                        $("#tot_pot").val(totpot);
                                        $("#pot").val(totpot);

                                        var sub = $("#subTotal").val();
                                        var subpot = $("#pot").val();
                                        var gtot = sub - subpot;
                                        $("#gtot").val(gtot);
                                    } else {
                                        let lai = 0;
                                        var totpot = parseInt(pot_pph) + parseInt(pot_ass_kec) +
                                            parseInt(
                                                pot_ass_kem) + parseInt(pot_tht) + parseInt(
                                                pot_pensi) +
                                            parseInt(pot_organ) + parseInt(terlambat) +
                                            parseInt(
                                                cuti) +
                                            parseInt(izinn) + parseInt(lai);
                                        // var totpot = pot_pph + pot_ass_kec + pot_ass_kem + pot_tht + pot_pensi + pot_organ + terlambat + cuti + izinn + lai;
                                        $("#tot_pot").val(totpot);
                                        $("#pot").val(totpot);

                                        var sub = $("#subTotal").val();
                                        var subpot = $("#pot").val();
                                        var gtot = sub - subpot;
                                        $("#gtot").val(gtot);
                                    }
                                });
                                // var gajpok = document.getElementById('gaji_pokok').value;
                                // var lembur = document.getElementById('lemb').value;
                                // var tunjangan = document.getElementById('tun').value;
                                // $('.id_karyawan').on('change', function() {
                                //     var subtot = gajpok + lembur + tunjangan;
                                // $('#subTotal').val(subtot);
                                //   var total = 0;
                                //   $('.subtot').each(function() {
                                //     total += parseFloat($(this).val());
                                //   });
                                //   $('#subTotal').val(total);
                                // });
                                // $("#subTotal").val(gajpok + lembur + tunjangan);
                                // let number1 = $("#gaji_pokok").text();
                                // let bur = $("#lemb").text();
                                // let number3 = $("#tun").text();
                                // $("#subTotal").val(number1 + bur + number3);
                                // if (number1 > 0) {
                                //     // let subtot = parseFloat(number1) + parseFloat(bur) +
                                //     //     parseFloat(number3);
                                //     // let subtot = number1 + bur + number3;
                                //     $("#subTotal").val(gajpok + lembur + tunjangan);
                                // } else {
                                //     let subtot = number1 + bur + number3;
                                //     $("#subTotal").val(subtot);
                                // }

                                // let lai = $("#lain-lain").text();


                                // if (number1 > 0) {

                                //     let result = parseFloat(number1) + parseFloat(bur) +
                                //         parseFloat(
                                //             number3);
                                //     // let sub = result;
                                //     //     // $("#subTotal").html(addCommas(result));
                                //     $("#subTotal").html(result);
                                //     // $('#subTotal').html(number1 + bur + number3);
                                // }
                                // let total = 0;
                                // var total = $('.tot_pot').map(function() {
                                //     return parseFloat($(this).val());
                                // }).get().reduce(function(pot_pph, pot_ass_kec, pot_ass_kem, pot_tht, pot_pensi, pot_organ, terlambat, cuti, izinn, lai) {
                                //     return pot_pph + pot_ass_kec + pot_ass_kem + pot_tht + pot_pensi + pot_organ + terlambat + cuti + izinn + lai;
                                // }, 0);
                                // if (number1 > 0) {
                                //     $("#lain").keyup(function() {
                                //         var totpot = parseInt(pot_pph) + parseInt(pot_ass_kec) + parseInt(pot_ass_kem) + parseInt(pot_tht) + parseInt(pot_pensi) + parseInt(pot_organ) + parseInt(terlambat) + parseInt(cuti) + parseInt(izinn) + parseInt(lai);
                                //         // $("#tot_pot").html(addCommas(totpot));
                                //         $("#tot_pot").val(totpot);
                                //         $("#pot").val(totpot);

                                //         var sub = $("#subTotal").val();
                                //         var subpot = $("#pot").val();
                                //         var gtot = sub - subpot;
                                //         $("#gtot").val(gtot);
                                //     });
                                // }
                                // else {
                                //     let totpot = parseFloat(pot_pph) + parseFloat(
                                //             pot_ass_kec) + parseFloat(
                                //             pot_ass_kem) + parseFloat(pot_tht) +
                                //         parseFloat(pot_pensi) + parseFloat(
                                //             pot_organ) + parseFloat(terlambat) +
                                //         parseFloat(cuti) + parseFloat(
                                //             izinn);
                                //     // $("#tot_pot").html(addCommas(totpot));
                                //     $("#tot_pot").val(totpot);
                                //     $("#pot").val(totpot);

                                //     let sub = $("#subTotal").val();
                                //     let subpot = $("#pot").val();
                                //     let gtot = sub - subpot;
                                //     $("#gtot").val(gtot);
                                // }
                                //     // var total = 0;
                                //     // var tot_pot = 0;

                                //     $('.tot_pot').each(function() {
                                //         var totpot = parseFloat($(this).text());

                                //         if (!isNaN(totpot)) {
                                //             tot_pot += totpot;
                                //         }
                                //     });

                                //     $('.subtot').each(function() {
                                //         var subtotal = parseFloat($(this).text());

                                //         if (!isNaN(subtotal)) {
                                //             total += subtotal;
                                //         }
                                //     });

                                //     $('#subTotal').val(total);

                                //     $('#tot_pot').val(tot_pot);
                                //     $('#pot').val(tot_pot);

                                //     let gtot = total - tot_pot;
                                //     $('#gtot').val(gtot);
                                // });
                                // $("#id_karyawan").on('change', function() {
                                // let lai = $("#lain-lain").text();
                                // let terlambat = $("#tmb").text();
                                // let izinn = $("#izn").text();
                                // let cuti = $("#cut").text();
                                // let pot_pph = $("#pph").text();
                                // let pot_ass_kec = $("#ass_kec").text();
                                // let pot_ass_kem = $("#ass_kem").text();
                                // let pot_tht = $("#iuran_tht").text();
                                // let pot_pensi = $("#iuran_pensiun").text();
                                // let pot_organ = $("#iuran_organisasi").text();

                                // let number1 = $("#gaji_pokok").text();
                                // let bur = $("#lemb").text();
                                // let number3 = $("#tun").text();

                                // if (number1 > 0) {

                                //     let result = parseFloat(number1) + parseFloat(bur) +
                                //         parseFloat(
                                //             number3);
                                //     // let sub = result;
                                //     //     // $("#subTotal").html(addCommas(result));
                                //     $("#subTotal").html(result);
                                //     // $('#subTotal').html(number1 + bur + number3);
                                // }
                                // let totpot = parseFloat(pot_pph) + parseFloat(
                                //         pot_ass_kec) + parseFloat(
                                //         pot_ass_kem) + parseFloat(pot_tht) +
                                //     parseFloat(pot_pensi) + parseFloat(
                                //         pot_organ) + parseFloat(terlambat) +
                                //     parseFloat(cuti) + parseFloat(
                                //         izinn) + parseFloat(lai);
                                // // $("#tot_pot").html(addCommas(totpot));
                                // $("#tot_pot").html(totpot);
                                // $("#pot").html(totpot);

                                // let sub = $("#subTotal").text();
                                // let subpot = $("#pot").text();
                                // let gtot = sub - subpot;
                                // $("#gtot").html(gtot);
                                // });
                                // });
                            } else {
                                console.log('error');
                            }
                        });
                    }
                });
                // $('#gaji_pokok').on('change', function() {
                //     // let number1 = $("#gaji_pokok").val();
                //     // let number2 = $("#lembur").text();
                //     // let bur = $("#lemb").val();
                //     // let number3 = $("#tun").val();
                //     let terlambat = $("#tmb").val();
                //     let izinn = $("#izn").val();
                //     let cuti = $("#cut").val();
                //     let lai = $("#lain").val();
                //     let pot_pph = $("#pph").val();
                //     let pot_ass_kec = $("#ass_kec").val();
                //     let pot_ass_kem = $("#ass_kem").val();
                //     let pot_tht = $("#iuran_tht").val();
                //     let pot_pensi = $("#iuran_pensiun").val();
                //     let pot_organ = $("#iuran_organisasi").val();


                //     // $('.id_karyawan').on('change', function() {
                //     //     var subtot = gajpok + lembur + tunjangan;
                //     //     $('#subTotal').val(subtot);
                //     //     var total = 0;
                //     //     $('.subtot').each(function() {
                //     //         total += parseFloat($(this).val());
                //     //     });
                //     //     $('#subTotal').val(total);
                //     // });
                //     // let subtot = gajpok + lembur + tunjangan;
                //     $("#subTotal").val(gajpok + lembur + tunjangan);
                // });
            });
        </script>
    @endpush
</x-admin-layout>
