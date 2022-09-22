<div class="modal fade" id="addSatuan" tabindex="-1" role="dialog" style="display: none" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Tambah Data Satuan</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('satuan.store') }}" id="advanced-form" method="POST">
                    @csrf
                    <div class="form-group c_form_group">
                        <label>Satuan</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group c_form_group">
                        <label>Deskripsi</label>
                        <input type="text" name="desc" class="form-control" id="desc">
                    </div>
                    <button class="btn btn-primary theme-bg gradient">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
