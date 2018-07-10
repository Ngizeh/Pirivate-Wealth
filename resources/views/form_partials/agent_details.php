   @csrf
  <h6 class="mb-15">Agent Details</h6>
                <div class="row">
                    <div class="form-group col-sm-4 mb-30">
                        <label>Contact Person/Company Name</label>
                        <input type="text">
                    </div>
                    <!--contact person-->

                    <div class="form-group col-sm-4 mb-30">
                        <label>Address</label>
                        <input type="text">
                    </div>
                    <!--address-->

                    <div class="form-group col-sm-4 mb-30">
                        <label>Email</label>
                        <input type="text">
                    </div>
                    <!--email-->

                    <div class="form-group col-sm-4 mb-30">
                        <label>Phone</label>
                        <input type="text">
                    </div>
                    <!--Phone-->

                    <div class="form-group col-sm-4 mb-30">
                        <label>Working Hours</label>
                        <input type="text">
                    </div>
                    <!--Worrking Hours-->
                </div>
                
              <div class="form-group">
                 <div class="row">
                   <div class="col-md-6">
                            <a href="" class="btn btn-warning btn-sm shadow faa-parent animated-hover">
                             <i class="fa fa-long-arrow-left faa-passing"></i> Back
                        </a>
                     </div>
                     <div class="col-md-3">
                            <a href="" class="btn btn-sucess btn-sm shadow faa-parent animated-hover">
                            {{ $submitButton ?? 'Next' }} <i class="fa fa-long-arrow-right faa-passing"></i>
                        </a>
                     </div>
                 </div>
             </div>
    
                <!--agent detail-->
