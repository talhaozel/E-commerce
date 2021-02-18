<?php 

include 'header.php' ;



 ?>      

     

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>menu ekleme  <small>,

                     

                    </small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                   

                     

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Ad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_ad" required="required" placeholder="Menü adı" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Detay<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_detay" required="required" placeholder="Menü detay" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     


                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Url<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_url" required="required" placeholder="Menü Url" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Sira<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_sira"   placeholder="Menü Sira" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                     


                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">menu Durum <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                               
                       <select id="heard" class="form-control" name ="menu_durum" placeholder="Menü durum" required>
                        
                        <option value="1" > Aktif</option>

                         <option value="0"> Pasif</option>






                           </select>
                         </div>
                       </div>


                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">       
                          <button type="submit" name="menukaydet" class="btn btn-success">Kaydet</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>



<hr>
<hr>
      

          </div>
        </div>
        <!-- /page content -->


<?php include 'footer.php'; 
?>


    