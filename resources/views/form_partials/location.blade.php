   @csrf
       <h6 class="mb-15">Property Location</h6>
                <div class="row mb-55">
                    <div class="form-group col-sm-4 mb-30">
                         <label>Address</label>
                         <input type="text">
                    </div>
                    <!--Address-->

                    <div class="form-group col-sm-4 mb-30">
                         <label>State</label>
                         <select>
                             <option>&nbsp;</option>      
                             <option>option 1</option>
                             <option>option 2</option> 
                         </select>
                    </div>
                    
                       <!--State-->

                    <div class="form-group col-sm-4 mb-30">
                         <label>Country</label>
                         <select>
                             <option>&nbsp;</option>      
                             <option>USA</option>
                             <option>UK</option> 
                         </select>
                    </div>
                    <!--Country-->

                    <div class="form-group col-sm-4 mb-30">
                         <label>Postal Code / Zip</label>
                         <input type="text">
                    </div>
                    <!--Postal Code / Zip-->

                    <div class="form-group col-sm-4 mb-30">
                         <label>Latitude</label>
                         <input type="text">
                    </div>
                    <!--latitude-->

                    <div class="form-group col-sm-4 mb-30">
                         <label>Longitude</label>
                         <input type="text">
                    </div>
                    <!--longitude-->

                    <div class="col-sm-12 mb-30">
                        <div class="map-hold">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.3419418377!2d-74.03927127918426!3d40.75904032921492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2snp!4v1497343556535" width="600" height="450"></iframe>
                        </div>
                    </div>
                </div>
            <div class="form-group">
                 <div class="row">
                    <div class="col-md-6">
                            <a href="/property/create" class="btn btn-warning btn-sm shadow faa-parent animated-hover">
                             <i class="fa fa-long-arrow-left faa-passing"></i> Back
                        </a>
                     </div>
                     <div class="col-md-3">
                            <a href="/property/feature" class="btn btn-sucess btn-sm shadow faa-parent animated-hover">
                            {{ $submitButton ?? 'Next' }} <i class="fa fa-long-arrow-right faa-passing"></i>
                        </a>
                     </div>
                 </div>
         </div>
                <!--Property Location-->
