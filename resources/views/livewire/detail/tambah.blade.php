<x-admin-layout>
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
            <form wire:submit.prevent="createDet">
                <div class="row">
                    <div class="col-6">
                        <label for="">Nama</label>
                        <input id="nm_karyawan" type="text" class="form-control" name="nm_karyawan"
                            placeholder="Masukkan Nama" wire:model.defer="data.nm_karyawan" list="nm_karyawan">
                        <datalist id="nm_karyawan">
                            {{-- <select name="" id=""> --}}
                            @foreach ($karyawan as $kry)
                                <option value="{{ $kry->id }}">{{ $kry->nm_karyawan }} |
                                    {{ $kry->gaji->jabatan }}</option>
                            @endforeach
                            {{-- </select> --}}
                        </datalist>
                        <br>
                        <label for="">Jabatan</label>
                        <input id="nm_karyawan" type="text" class="form-control" name="nm_karyawan"
                            placeholder="Masukkan Nama" wire:model.defer="data.nm_karyawan">
                    </div>
                    <div class="col-6"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <label for="" style="font-size: 50px">Gaji Pokok</label>
                        <br>
                        <label for="">Gaji Lembur</label>
                    </div>
                    <div class="col-6">
                        <div class="mb-4">
                            <input id="gaji_pokok" type="text" class="form-control" name="gaji_pokok"
                        placeholder="Masukkan Nama" wire:model.defer="data.gaji_pokok">
                        </div>

                        <input id="gaji_lembur" type="text" class="form-control" name="gaji_lembur"
                        placeholder="Masukkan Nama" wire:model.defer="data.gaji_lembur">
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
