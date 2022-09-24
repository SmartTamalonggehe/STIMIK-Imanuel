 <div class="modal fade bs-example-modal-xl tampilModal" role="dialog" aria-labelledby="myExtraLargeModalLabel"
     aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="judul_form"></h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form id="formKu">
                 @csrf
                 <input type="hidden" name="id" id="id_form">
                 <input type="hidden" name="jenis_id" id="jenis_id" value="{{ $jenis }}">
                 <div class="modal-body">
                     <div class="row">
                         <div class="col-12">
                             <label for="nama">Nama Barang</label>
                             <div class="mb-1">
                                 <input class="form-control inputReset" type="text" id="nama" name="nama"
                                     required>
                             </div>
                         </div>

                         <div class="col-12 col-lg-6">
                             <label for="ruangan_id">Ruangan</label>
                             <div class="mb-1">
                                 <select name="ruangan_id" id="ruangan_id" class="select-basic form-select" required>

                                 </select>
                             </div>
                         </div>

                         <div class="col-12 col-lg-4">
                             <label for="merk">Merk Barang</label>
                             <div class="mb-1">
                                 <input class="form-control inputReset" type="text" id="merk" name="merk"
                                     required>
                             </div>
                         </div>
                         <div class="col-12 col-lg-2">
                             <label for="jmlh">Jumlah</label>
                             <div class="mb-1">
                                 <input class="form-control inputReset" type="number" id="jmlh" name="jmlh"
                                     required>
                             </div>
                         </div>
                         <div class="col-12 col-lg-3">
                             <label for="satuan">Satuan</label>
                             <div class="mb-1">
                                 <select class="form-select" name="satuan" id="satuan" required>
                                     <option value="">Pilih Satuan</option>
                                     <option value="Pcs">Pcs</option>
                                     <option value="Unit">Unit</option>
                                     <option value="Set">Set</option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-12 col-lg-9">
                             <label for="ket">Ket</label>
                             <div class="mb-1">
                                 <input class="form-control inputReset" type="text" id="ket" name="ket">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                     <button type="submit" class="btn btn-primary" id="tombolForm">Save changes</button>
                 </div>
             </form>
         </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
