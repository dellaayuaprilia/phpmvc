<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-6">
            <?php Flasher::flash(); ?>
            <h3>DAFTAR JURUSAN</h3>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah  Data Jurusan
            </button>
            <ul class="list-group mt-4">
                <?php foreach ($data['jurusan'] as $jurusan) : ?>
                    <li class="list-group-item">
                    <?= $jurusan['nama']; ?> 
                    <a style="margin-ringht:10px;margin-left:10px;" href="<?= BASE_URL; ?>/jurusan/hapus/<?= $jurusan['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>                   
<!-- Button trigger modal -->
                    <button type="button" class="badge badge-primary float-right" data-toggle="modal" data-target="#exampleModal">
                    Ubah
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= BASE_URL; ?>/jurusan/ubah" method="post">
                                 <div class="form-group">                                 
                                    <label for="nama">Nama Kopetensi Keahlian</label>                                
                                    <input type="text" class="form-control" value="<?=$jurusan["nama"]?>" name="nama">                            
                                </div> 
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>                </li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal -->         
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" arialabelledby="judulModal" aria-hidden="true">             
        <div class="modal-dialog" role="document">                
             <div class="modal-content">                     
                <div class="modal-header">                         
                    <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>                         
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">                           
                          <span aria-hidden="true">&times;</span>                         
                        </button>                    
                     </div>                     
                     <div class="modal-body">                         
                        <form action="<?= BASE_URL; ?>/jurusan/tambah" method="post"> 
                        <input type="hidden" name="id" id="id"> 
 
    <div class="form-group">                                 
        <label for="nama">Nama Kopetensi Keahlian</label>                                
         <input type="text" class="form-control" id="nama" name="nama">                            
         </div>                             
         
            <div class="modal-footer"> 
    <button type="button" class="btn btn-secondary" datadismiss="modal">Close</button>                         
    <button type="submit" class="btn btn-primary">Tambah Data</button>               
      </div>           
          </div>         
            </div>
                 </div> 
                 </div>
</body>

