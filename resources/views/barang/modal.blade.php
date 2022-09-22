<div class="modal fade" id="addBarang" tabindex="-1" role="dialog" style="display: none" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Tambah Data Barang</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('barang.store') }}" id="advanced-form" method="POST">
                    @csrf
                    <div class="form-group c_form_group">
                        <label>Nama Unit</label>
                        <input type="text" name="nm_barang" class="form-control" id="nm_barang">
                    </div>
                    <div class="form-group c_form_group">
                        <label>Kimap</label>
                        <input type="text" name="kimap" class="form-control" id="kimap">
                    </div>
                    <div class="form-group c_form_group">
                        <label>Satuan</label>
                        <select name="satuan_id" id="satuan_id" class="form-control col-md-6">
                            @foreach ($satuan as $i)
                            <option value="{{ $i->id }}">{{ $i->name }} - {{ $i->desc }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary theme-bg gradient">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
