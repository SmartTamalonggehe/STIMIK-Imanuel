 <div class="modal fade bs-example-modal-xl tampilModal" tabindex="1" role="dialog"
     aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="judul_form"></h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form id="formKu">
                 @csrf
                 <input type="hidden" name="id" id="id_form">
                 <div class="modal-body">
                     <div class="row">
                         <div class="col-12">
                             <label for="nama">Nama Ruangan</label>
                             <div class="mb-1">
                                 <input class="form-control inputReset" type="text" id="nama" name="nama">
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
