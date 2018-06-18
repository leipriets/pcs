<?php        

  $helper = new helper();

  $civilstatus = array(
    "single"=>"single",
    "married"=>"widowed",
  );    


?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Personal Information</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-1">
                      <div class="form-group">
                        <label>Name</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Firstname">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Middlename">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Lastname">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Extension Name">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Alias (ES)">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Baranggay</label>
                          <input type="text" name="brgy" class="form-control form-control-sm " placeholder="Baranggay">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>District</label>
                          <input type="text" name="brgy" class="form-control form-control-sm " placeholder="District">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>House No.</label>
                          <input type="text" name="brgy" class="form-control form-control-sm " placeholder="House No.">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Street</label>
                          <input type="text" name="brgy" class="form-control form-control-sm " placeholder="Street">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>City</label>
                          <input type="text" name="brgy" class="form-control form-control-sm " placeholder="City">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Date of birth</label>
                          <input type="text" name="brgy" class="form-control form-control-sm datepicker" placeholder="Date of birth">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Civil Status</label>
                          <select class="form-control">
                            <?= $helper->arrayToHTMLOptionByKey($civilstatus); ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Religion</label>
                          <input type="text" name="brgy" class="form-control form-control-sm " placeholder="Religion">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Occupation</label>
                          <input type="text" name="brgy" class="form-control form-control-sm " placeholder="Occupation">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Rest.Cert.No.</label>
                          <input type="text" name="brgy" class="form-control form-control-sm " placeholder="Rest.Cert.No.">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Date Issued</label>
                          <input type="text" name="brgy" class="form-control form-control-sm datepicker" placeholder="Date Issued">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Issued at</label>
                          <input type="text" name="brgy" class="form-control form-control-sm " placeholder="Issued at">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Purpose of Clearance</label>
                          <textarea class="form-control"></textarea>
                        </div>                    
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-4">
                          <br>
                         <button class="btn btn-primary btn-round">Send</button>
                      </div>                    
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>