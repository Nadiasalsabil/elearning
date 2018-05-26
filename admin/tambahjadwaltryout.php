<div class="row">
            <div class="col-12 grid-margin">
 <div class="alert alert-primary">
  <img class="menu-icon" src="images/menu_icons/06.png" alt="menu icon">&nbsp;<strong>Input Jadwal Tryout</strong> SMP Negeri 34 Bekasi
</div>


 <form class="forms-sample" action="../config/tambah-jadwaltryout.php" method="post">
                        <div class="form-group row">
                          <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" >
                          </div>
                        </div>
                        <div class="form-group">
                 <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mata Pelajaran</label>
                          <div class="col-sm-9">
                            <select class="form-control"  id="mapel" name="mapel">
                               <option>Bahasa Indonesia</option>
                              <option>Bahasa Inggris</option>
                               <option>Ilmu Pengetahuan Alam</option>
                              <option>Ilmu Pengetahuan Sosial</option>
                                <option>Matematika</option>
                              
                            </select>
                          </div>
                        </div>

                         <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tryout Ke</label>
                          <div class="col-sm-9">
                            <select class="form-control"  id="tryout" name="tryout">
                               <option>1</option>
                              <option>2</option>
                               <option>3</option>
                              <option>4</option>
                                <option>5</option>
                              
                            </select>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                       
                      </form>













</div>
</div>
