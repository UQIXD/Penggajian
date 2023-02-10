<x-admin-layout>
    <style>
        datalist {
            display: none;
        }

        input {
            background-color: #1a2035;
            color: white;
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
                        <br>
                        {{-- <input id="id_karyawan" type="text" class="form-control" name="id_karyawan"
                            placeholder="Masukkan Nama" wire:model.defer="data.id_karyawan" list="id_kry"> --}}
                        <select name="id_karyawan" id="id_karyawan" class="id_karyawan"
                            style="background-color: #1a2035;text-align: center" wire:model.defer="data.karyawan_id">
                            {{-- <datalist id="id_kry"> --}}
                            <option value="0"> - Pilih Karyawan - </option>
                            @foreach ($karyawan as $kry)
                                <option value="{{ $kry->id }}"
                                    style="text-align: center;background-color: #1a2035"> {{ $kry->nm_karyawan }}
                                </option>
                            @endforeach
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
                        <label for="">Jabatan</label>
                        <input type="text" id="jabatan" wire:model.defer="data.jabatan" class="form-control">
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
                        <input id="gaji_pokok" type="text" class="form-control subtot" name="gaji_pokok"
                            wire:model.defer="data.gaji_pokok" required>
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
                        <input type="text" id="lemb" wire:model.defer="data.lembur" class="form-control subtot"
                            required>
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
                        <input type="text" id="tun" wire:model.defer="data.tunjangan"
                            class="form-control subtot" required>
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
                        ____________________________________________________________
                        {{-- <div id="subTotal" wire:model.defer="data.subtot"></div> --}}
                        <input type="text" id="subTotal" wire:model.defer="data.subtot" class="form-control"
                            required>
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
                            class="tot_pot" required>
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
                            class="tot_pot" required>
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
                        <input type="text" id="ass_kem" class="form-control" wire:model.defer="data.ass_kem"
                            required>
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
                        <input type="text" id="iuran_tht" class="form-control" wire:model.defer="data.iuran_tht"
                            required>
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
                        <input type="text" id="iuran_pensiun" wire:model.defer="data.iuran_pensiun"
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
                        <input type="text" id="iuran_organisasi" wire:model.defer="data.iuran_organisasi"
                            class="form-control" required>
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
                        {{-- <div id="tmb" wire:model.defer="data.terlambat" class="tot_pot"></div> --}}
                        <input type="text" id="tmb" wire:model.defer="data.terlambat" class="form-control"
                            required>
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
                        <input type="text" id="izn" class="form-control" wire:model.defer="data.izin"
                            required>
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
                        <input type="text" id="cut" class="form-control" wire:model.defer="data.cuti"
                            required>
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
                        <input type="text" id="alp" wire:model.defer="data.alpha" class="form-control"
                            required>
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
                        <span id="skt"></span>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        {{-- <p> - Biaya Lain - Lain</p> --}}
                        <input type="text" id="biaya" class="form-control" placeholder="Masukkan Biaya Lain">
                    </div>
                    <div class="col-4">
                        {{-- <span id="lain" class="tot_pot"></span> --}}
                        {{-- <div id="lain" class="tot_pot"></div> --}}
                        <input type="text" id="lain" class="form-control"
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
                        <input type="text" id="tot_pot" class="form-control" wire:model.defer="data.tot_pot"
                            required>
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
                        <input type="text" id="gtot" class="form-control" wire:model.defer="data.gtot"
                            required>
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
    @push('jsku')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#id_karyawan").select2();
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

                $('#id_karyawan').on('change', function() {
                    if (this.value) {
                        $.get('http://127.0.0.1:8000/cari_karyawan/' + this.value, function(response) {
                            if (response) {
                                console.log(response.karyawan);
                                console.log(response.gaji);
                                $('#id_karyawan').val(response.karyawan[0]['id']);
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
                                    let ass_kec = (parseFloat(number1) * 1) / 100;
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
                                    let iuran_tht = (parseFloat(number1) * 2) / 100;
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

                                // $("#lain").keyup(function() {
                                // let number1 = $("#gaji_pokok").val();
                                // let number2 = $("#lembur").text();
                                // let bur = $("#lemb").val();
                                // let number3 = $("#tun").val();
                                // let terlambat = $("#tmb").val();
                                // let izinn = $("#izn").val();
                                // let cuti = $("#cut").val();
                                // let lai = $("#lain").val();
                                // let pot_pph = $("#pph").val();
                                // let pot_ass_kec = $("#ass_kec").val();
                                // let pot_ass_kem = $("#ass_kem").val();
                                // let pot_tht = $("#iuran_tht").val();
                                // let pot_pensi = $("#iuran_pensiun").val();
                                // let pot_organ = $("#iuran_organisasi").val();

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
                                //     // let totpot = parseFloat(pot_pph) + parseFloat(
                                //     //         pot_ass_kec) + parseFloat(
                                //     //         pot_ass_kem) + parseFloat(pot_tht) +
                                //     //     parseFloat(pot_pensi) + parseFloat(
                                //     //         pot_organ) + parseFloat(terlambat) +
                                //     //     parseFloat(cuti) + parseFloat(
                                //     //         izinn) + parseFloat(lai);
                                //     let totpot = pot_pph + pot_ass_kec + pot_ass_kem + pot_tht + pot_pensi + pot_organ + terlambat + cuti + izinn + lai;
                                //     // let totpot = tot;
                                //     // $("#tot_pot").html(addCommas(totpot));
                                //     $("#tot_pot").val(totpot);
                                //     $("#pot").val(totpot);

                                //     let sub = $("#subTotal").val();
                                //     let subpot = $("#pot").val();
                                //     let gtot = sub - subpot;
                                //     $("#gtot").val(gtot);
                                // } else {
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
                $(document).on('change', function() {
                    let number1 = $("#gaji_pokok").val();
                    let number2 = $("#lembur").text();
                    let bur = $("#lemb").val();
                    let number3 = $("#tun").val();
                    let terlambat = $("#tmb").val();
                    let izinn = $("#izn").val();
                    let cuti = $("#cut").val();
                    let lai = $("#lain").val();
                    let pot_pph = $("#pph").val();
                    let pot_ass_kec = $("#ass_kec").val();
                    let pot_ass_kem = $("#ass_kem").val();
                    let pot_tht = $("#iuran_tht").val();
                    let pot_pensi = $("#iuran_pensiun").val();
                    let pot_organ = $("#iuran_organisasi").val();

                    var gajpok = document.getElementById('gaji_pokok').value;
                    var lembur = document.getElementById('lemb').value;
                    var tunjangan = document.getElementById('tun').value;
                    // $('.id_karyawan').on('change', function() {
                    //     var subtot = gajpok + lembur + tunjangan;
                    //     $('#subTotal').val(subtot);
                    //     var total = 0;
                    //     $('.subtot').each(function() {
                    //         total += parseFloat($(this).val());
                    //     });
                    //     $('#subTotal').val(total);
                    // });
                    let subtot = gajpok + lembur + tunjangan;
                    $("#subTotal").val(subtot);
                });
            });
        </script>
    @endpush
</x-admin-layout>
