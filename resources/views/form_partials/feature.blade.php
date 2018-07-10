       @csrf
        <h6 class="mb-15">Floor Plan</h6>
                <div class="row mb-45">
                   <div class="form-group col-sm-6 mb-30">
                        <label>Image</label>
                        <div class="js">
                            <input type="file" name="file-8[]" id="file-8" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                            <label for="file-8"><span class="text"></span> <span class="btn btn-lg">Browse</span></label>
                        </div> 
                   </div>
                   <!--plan 1--> 

                   <div class="form-group col-sm-6 mb-30">
                        <label>Image</label>
                        <div class="js">
                            <input type="file" name="file-9[]" id="file-9" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                            <label for="file-9"><span class="text"></span> <span class="btn btn-lg">Browse</span></label>
                        </div> 
                   </div>
                   <!--plan 2--> 

                   <div class="form-group col-sm-6 mb-30">
                        <label>Image</label>
                        <div class="js">
                            <input type="file" name="file-10[]" id="file-10" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                            <label for="file-10"><span class="text"></span> <span class="btn btn-lg">Browse</span></label>
                        </div> 
                   </div>
                   <!--plan 3--> 

                   <div class="form-group col-sm-6 mb-30">
                        <label>Image</label>
                        <div class="js">
                            <input type="file" name="file-11[]" id="file-11" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                            <label for="file-11"><span class="text"></span> <span class="btn btn-lg">Browse</span></label>
                        </div> 
                   </div>
                   <!--plan 4--> 
                </div>
                <!--floor plan-->


             <div class="form-group">
                 <div class="row">
                   <div class="col-md-6">
                            <a href="/property/location" class="btn btn-warning btn-sm shadow faa-parent animated-hover">
                             <i class="fa fa-long-arrow-left faa-passing"></i> Back
                        </a>
                     </div>
                     <div class="col-md-6">
                            <a href="/property/features" class="btn btn-sucess btn-sm shadow faa-parent animated-hover">
                            {{ $submitButton ?? 'Next' }} <i class="fa fa-long-arrow-right faa-passing"></i>
                          </a>
                     </div>
                 </div>
             </div>
   
