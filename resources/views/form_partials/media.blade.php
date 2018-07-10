       @csrf
    <h6 class="mb-15">Property Media</h6>
        <div class="row mb-55">
                    <div class="form-group col-sm-6 mb-30">
                        <label>Featured Image <span>*</span></label>

                        <div class="js">
                            <input type="file" name="file-7[]" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                            <label for="file-7"><span class="text"></span> <span class="btn btn-lg">Browse</span></label>
                        </div> 
                    </div>
                    <!--file-->

                    <div class="form-group col-sm-6 mb-30">
                        <label>Video URL</label>
                        <input type="text">
                    </div>
                    
                      <div class="form-group col-sm-12 mb-30">
                        <label>Gallery Image</label>
                        <div class="gallery-box text-center">
                            <p> <i class="fa fa-cloud-upload"></i> Drag and drop images here</p>

                            <span class="or">OR</span>

                            <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple="">
                            <label for="file-1"><span class="btn btn-lg">Select Image</span></label>
                        </div>
                    </div>
                    
            <div class="form-group">
                 <div class="row">
                  <div class="col-md-6">
                            <a href="/property/feature" class="btn btn-warning btn-sm shadow faa-parent animated-hover">
                             <i class="fa fa-long-arrow-left faa-passing"></i> Back
                        </a>
                     </div>
                     <div class="col-md-3">
                            <a href="#" class="btn btn-sucess btn-sm shadow faa-parent animated-hover">
                            {{ $submitButton ?? 'Next' }} <i class="fa fa-long-arrow-right faa-passing"></i>
                        </a>
                     </div>
                 </div>
             </div>

