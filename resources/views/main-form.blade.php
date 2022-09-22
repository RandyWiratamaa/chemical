<div class="modal fade" id="mainForm" tabindex="-1" role="dialog" style="display: none" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Tambah Data Laporan</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('laporan.store') }}" id="advanced-form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group c_form_group">
                                <label>Nama Unit</label>
                                <select name="barang_id" id="barang_id" class="form-control">
                                    @foreach ($barang as $i)
                                    <option value="{{ $i->id }}">{{ $i->nm_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group c_form_group">
                                <label>Kimap</label>
                                <input type="text" name="kimap" class="form-control" id="kimap">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group c_form_group">
                                <label>Desc.</label>
                                <input type="text" name="desc" class="form-control" id="desc">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group c_form_group">
                                <label>Satuan</label>
                                <input type="text" name="satuan" class="form-control" id="satuan">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group c_form_group">
                                <label>Konsumsi</label>
                                <input type="number" name="konsumsi" class="form-control" id="konsumsi">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>SOH</label>
                                <input type="number" name="soh" class="form-control" id="soh">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>OS PR</label>
                                <input type="number" name="ospr" class="form-control" id="ospr">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>OS PO</label>
                                <input type="number" name="ospo" class="form-control" id="ospo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>Ketahanan Stock</label>
                                <input type="number" name="ketahanan_stock" class="form-control" id="ketahanan_stock">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>Lead Time(Bulan)</label>
                                <input type="number" name="lead_time" class="form-control" id="lead_time">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>Indikator</label>
                                <input type="number" name="indikator" class="form-control" id="indikator">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>Ket.</label>
                                <input type="text" name="ket" class="form-control" id="ket">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-block btn-primary theme-bg gradient">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
