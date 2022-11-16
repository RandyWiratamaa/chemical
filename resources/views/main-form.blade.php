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
                                <input type="text" name="indikator" class="form-control" id="indikator">
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

@foreach ($laporan as $i)
<div class="modal fade" id="editLaporan{{ $i->id }}" tabindex="-1" role="dialog" style="display: none" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Ubah Data Laporan {{ $i->barang->nm_barang }}</h5>
            </div>
            <div class="modal-body">
                <form action="{{ url('home', $i->id) }}" id="advanced-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group c_form_group">
                                <label>Nama Unit</label>
                                <select name="barang_id" id="barang_id_edit" class="form-control barang_id_edit">
                                    @foreach ($barang as $j)
                                    <option value={{ $j->id }} @if($j->id == $i->barang_id) selected @endif>{{ $j->nm_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group c_form_group">
                                <label>Kimap</label>
                                <input type="text" name="kimap" class="form-control kimap_edit" id="kimap_edit" value="{{ $i->barang->kimap }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group c_form_group">
                                <label>Desc.</label>
                                <input type="text" name="desc" class="form-control desc_edit" id="desc_edit" value="{{ $i->desc }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group c_form_group">
                                <label>Satuan</label>
                                <input type="text" name="satuan" class="form-control satuan_edit" id="satuan_edit" value="{{ $i->barang->satuan->name }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group c_form_group">
                                <label>Konsumsi</label>
                                <input type="number" name="konsumsi" class="form-control konsumsi_edit" id="konsumsi_edit" value="{{ $i->konsumsi }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>SOH</label>
                                <input type="number" name="soh" class="form-control soh_edit" id="soh_edit" value="{{ $i->soh }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>OS PR</label>
                                <input type="number" name="ospr" class="form-control ospr_edit" id="ospr_edit" value="{{ $i->ospr }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>OS PO</label>
                                <input type="number" name="ospo" class="form-control ospo_edit" id="ospo_edit" value={{ $i->ospo }}>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>Ketahanan Stock</label>
                                <input type="number" name="ketahanan_stock" class="form-control ketahanan_stock_edit" id="ketahanan_stock_edit" value="{{ $i->ketahanan_stock }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>Lead Time(Bulan)</label>
                                <input type="number" name="lead_time" class="form-control lead_time_edit" id="lead_time_edit" value="{{ $i->lead_time }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>Indikator</label>
                                <input type="text" name="indikator" class="form-control indikator_edit" id="indikator_edit" value="{{ $i->indikator }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group c_form_group">
                                <label>Ket.</label>
                                <input type="text" name="ket" class="form-control ket_edit" id="ket_edit" value="{{ $i->ket }}">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-block btn-primary theme-bg gradient">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

{{-- Modal Delete --}}
@foreach ($laporan as $i)
<div class="modal fade" id="hapusLaporan{{ $i->id }}" tabindex="-1" role="dialog" style="display: none" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Ubah Data Laporan {{ $i->barang->nm_barang }}</h5>
            </div>
            <div class="modal-body">
                <form action="{{ url('home', $i->id) }}" id="advanced-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('delete')
                    <div class="col-12">
                        Yakin untuk menghapus data ??
                    </div>
                    <button class="btn btn-default" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary theme-bg gradient">
                        Ya, Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
