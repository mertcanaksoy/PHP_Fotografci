        <?php 
        include 'header.php'; 
        include 'data/baglan.php';

        $ayarsor=$db->prepare("select * from ayar where ayar_id=?");
        $ayarsor->execute(array(0));
        $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

        ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
              </div>

              <!--<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Anahtar Kelime">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>-->

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Slider İşlemleri</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        
                      </ul>
                      <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                      <form action="data/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" id="first-name" required="required" name="slider_resimyolu" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Adı <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" name="slider_ad" placeholder="Slider Adını Giriniz" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Linki <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" name="slider_link" placeholder="Slider Linkini Giriniz" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sırası <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" name="slider_sira" placeholder="Slider Sırasını Giriniz" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durumu <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="heard" class="form-control" name="slider_durum" required>
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                          </select>
                          </div>
                        </div>
                        
                        
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="sliderkaydet" class="btn btn-primary">Kaydet</button>
                          
                        </div>
                        
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include 'footer.php'; ?>
