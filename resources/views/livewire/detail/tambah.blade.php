<x-admin-layout>
    <div class="container-fluid">
        <span>Slip Gaji</span>
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <label for="">Nama</label>
                    <input id="nm_karyawan" type="text" class="form-control" name="nm_karyawan"
                    placeholder="Masukkan Nama" wire:model.defer="data.nm_karyawan">
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </div>
</x-admin-layout>
