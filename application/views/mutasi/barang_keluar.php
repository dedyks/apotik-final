<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">Barang Keluar</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="<?php echo base_url()?>mutasi/simpan" method="POST" >
                <div class="form-group"><label class="col-lg-2 control-label">Tujuan</label>

<div class="col-lg-10"><input type="text" placeholder="tujuan" name="tujuan" class="form-control"> <span class="help-block m-b-none">Tujuan mutasi barang.</span>
</div>
</div>

                  <div class="form-group"><label class="col-lg-2 control-label">Item</label>

                      <div class="col-lg-10"><input type="text" placeholder="Email" name="item" class="form-control"> <span class="help-block m-b-none">Barang yang berpindah.</span>
                      </div>
                  </div>
                  <div class="form-group"><label class="col-lg-2 control-label">Sediaan</label>

                      <div class="col-lg-10"><input type="text" name="sediaan" placeholder="Tablet, Strip, Dll" class="form-control"></div>
                  </div>

                  <div class="form-group"><label class="col-lg-2 control-label">Jumlah</label>

                      <div class="col-lg-10"><input type="text" name="jumlah" placeholder="jumlah" class="form-control"> <span class="help-block m-b-none">Jumlah Barang.</span>
                      </div>
                  </div>
                  <div class="form-group"><label class="col-lg-2 control-label">Keterangan</label>

                      <div class="col-lg-10"><input type="text" name="keterangan" placeholder="ket" class="form-control"> <span class="help-block m-b-none">Example block-level help text here.</span>
                      </div>
                  </div>
                  <div class="form-group"><label class="col-lg-2 control-label">Khasiat</label>

                      <div class="col-lg-10"><input type="text" name="khasiat" placeholder="efek" class="form-control"> <span class="help-block m-b-none">Example block-level help text here.</span>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                          <button class="btn btn-sm btn-white" type="submit">Submit</button>
                      </div>
                  </div>
                </form>
            </div>
        </div>

    </div>

    <div class="col-lg-5">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Horizontal form</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal">
                    <p>Sign in today for more expirience.</p>
                    <div class="form-group"><label class="col-lg-2 control-label">Email</label>

                        <div class="col-lg-10"><input type="email" placeholder="Email" class="form-control"> <span class="help-block m-b-none">Example block-level help text here.</span>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-2 control-label">Password</label>

                        <div class="col-lg-10"><input type="password" placeholder="Password" class="form-control"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Remember me </label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-white" type="submit">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
