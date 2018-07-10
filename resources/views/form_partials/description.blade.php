     <!--  -->
       <h6 class="mb-15">Property Description and Price</h6>
                 <div class="row mb-55">
                     <div class="form-group col-sm-4 mb-30">
                         <label>Property Title <span>*</span></label>
                         <input type="text">
                     </div>
                     <!--title-->

                     <div class="form-group select col-sm-4 mb-30">
                         <label>Property Type <span>*</span></label>
                         <select>
                            <option>Apartment</option>
                            <option>House</option>
                            <option>Duplex</option>
                            <option>Condos</option>
                            <option>Villas</option>
                            <option>Houses</option>
                        </select>
                     </div>
                     <!--type-->

                     <div class="form-group select col-sm-4 mb-30">
                         <label>Property Status <span>*</span></label>
                         <select>
                            <option>For Rent</option>
                            <option>For Sale</option>
                        </select>
                     </div>
                     <!--status-->

                     <div class="form-group col-sm-4 mb-30">
                         <label>Location  <span>*</span></label>
                         <input type="text">
                     </div>
                     <!--location-->

                     <div class="form-group col-sm-4 mb-30">
                         <label>Property ID</label>
                         <input type="text">
                     </div>
                     <!--id-->

                     <div class="form-group col-sm-4 mb-30">
                         <label>Year built</label>
                         <input type="text">
                     </div>
                     <!--year build-->

                     <div class="form-group col-sm-4 mb-30">
                         <label>Price <span>*</span></label>
                         <input type="text">
                     </div>
                     <!--price-->

                     <div class="form-group col-sm-4 mb-30">
                         <label>Prefix Price Label (ex: Starts From)</label>
                         <input type="text">
                     </div>
                     <!--prefix-->

                     <div class="form-group col-sm-4 mb-30">
                         <label>After Price Label (ex: monthly)</label>
                         <input type="text">
                     </div>
                     <!--after price-->

                     <div class="form-group col-sm-12 mb-30">
                        <label>Property Descriptions <span>*</span></label>
                        <textarea></textarea>
                     </div>
                 </div>
                 
                <h6 class="mb-15">Extra Information</h6>
                <div class="row mb-55">
                    <div class="form-group col-sm-4 mb-30">
                         <label>Bedrooms</label>
                         <select>
                             <option>&nbsp;</option>    
                             <option>1</option>
                             <option>2</option>
                             <option>3</option>
                         </select>
                    </div>
                    <!--bed rooms-->

                    <div class="form-group col-sm-4 mb-30">
                         <label>Bathrooms</label>
                         <select>
                             <option>&nbsp;</option>    
                             <option>1</option>
                             <option>2</option>
                             <option>3</option>
                         </select>
                    </div>
                    <!--bathroom-->

                    <div class="form-group col-sm-4 mb-30">
                         <label>Garages</label>
                         <select>
                             <option>&nbsp;</option>     
                             <option>1</option>
                             <option>2</option>
                             <option>3</option>
                         </select>
                    </div>
                    <!--Garages-->

                    <div class="form-group col-sm-4 mb-30">
                         <label>Area (Sq/ft)</label>
                         <input type="text">
                    </div>
                    <!--area-->

                    <div class="form-group col-sm-4 mb-30">
                         <label>Plot Size</label>
                         <select>
                             <option>&nbsp;</option>    
                         </select>
                    </div>
                    <!--Plot Size-->

                    <div class="form-group col-sm-4 mb-30">
                         <label>Parking</label>
                         <select>
                             <option>&nbsp;</option>    
                             <option>1</option>
                             <option>2</option> 
                         </select>
                    </div>
                    <!--Parking-->
                </div>
         
            <div class="form-group">
                 <div class="row">
                     <div class="col-md-3">
                            <a href="/property/location" class="btn btn-sucess btn-sm shadow faa-parent animated-hover">
                            {{ $submitButton ?? 'Next' }} <i class="fa fa-long-arrow-right faa-passing"></i>
                        </a>
                     </div>
                 </div>
            
            </div>
 
