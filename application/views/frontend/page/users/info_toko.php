<div class="dashboard-title   fl-wrap">
    <h3>Add Listing</h3>
</div>
<!-- profile-edit-container--> 
<div class="profile-edit-container fl-wrap block_box">
    <div class="custom-form">
        <label>Listing Title <i class="fal fa-briefcase"></i></label>
        <input type="text" placeholder="Name of your business" value=""/>
        <div class="row">
            <div class="col-md-6">
                <label>Type / Category</label>
                <div class="listsearch-input-item">
                    <select data-placeholder="Apartments" class="chosen-select no-search-select" >
                        <option>All Categories</option>
                        <option>Shops</option>
                        <option>Hotels</option>
                        <option>Restaurants</option>
                        <option>Fitness</option>
                        <option>Events</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label>Keywords <i class="fal fa-key"></i></label>
                <input type="text" placeholder="Maximum 15 , should be separated by commas" value=""/>
            </div>
        </div>
    </div>
</div>
<!-- profile-edit-container end-->                                    
<div class="dashboard-title  dt-inbox fl-wrap">
    <h3>Location / Contacts</h3>
</div>
<!-- profile-edit-container--> 
<div class="profile-edit-container fl-wrap block_box">
    <div class="custom-form">
        <div class="row">
            <div class="col-md-6">
                <label>Longitude (Drag marker on the map)<i class="fal fa-long-arrow-alt-right"></i>  </label>
                <input type="text" placeholder="Map Longitude"  id="long" value=""/>                                                
            </div>
            <div class="col-md-6">
                <label>Latitude (Drag marker on the map) <i class="fal fa-long-arrow-alt-down"></i> </label>
                <input type="text" placeholder="Map Latitude"  id="lat" value=""/>                                            
            </div>
        </div>
        <div class="map-container">
            <div id="singleMap" class="drag-map" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
        </div>
        <label>City / Location</label>
        <div class="listsearch-input-item">
            <select data-placeholder="City" class="chosen-select no-search-select" >
                <option>All Cities</option>
                <option>New York</option>
                <option>London</option>
                <option>Paris</option>
                <option>Kiev</option>
                <option>Moscow</option>
                <option>Dubai</option>
                <option>Rome</option>
                <option>Beijing</option>
            </select>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label>Address<i class="fal fa-map-marker"></i></label>
                <input type="text" placeholder="Address of your business" value=""/>                                                
            </div>
            <div class="col-sm-6">
                <label>Email Address<i class="far fa-envelope"></i>  </label>
                <input type="text" placeholder="JessieManrty@domain.com" value=""/> 
            </div>
            <div class="col-sm-6">
                <label>Phone<i class="far fa-phone"></i>  </label>
                <input type="text" placeholder="+7(123)987654" value=""/>                                                
            </div>
            <div class="col-sm-6">
                <label> Website <i class="far fa-globe"></i>  </label>
                <input type="text" placeholder="themeforest.net" value=""/>                                                
            </div>
        </div>
    </div>
</div>
<!-- profile-edit-container end-->                                     
<div class="dashboard-title  dt-inbox fl-wrap">
    <h3>Header Media</h3>
</div>
<!-- profile-edit-container--> 
<div class="profile-edit-container fl-wrap block_box">
    <div class="custom-form">
        <div class="row">
            <!--col --> 
            <div class="col-md-4">
                <div class="add-list-media-header" style="margin-bottom:20px">
                    <label class="radio inline"> 
                        <input type="radio" name="gender"  checked>
                        <span>Background image</span> 
                    </label>
                </div>
                <div class="add-list-media-wrap">
                    <div class="add-list-media-wrap">
                        <form class="fuzone">
                            <div class="fu-text">
                                <span><i class="fal fa-image"></i> Click here or drop files to upload</span>
                            </div>
                            <input type="file" class="upload">
                        </form>
                    </div>
                </div>
            </div>
            <!--col end--> 
            <!--col --> 
            <div class="col-md-4">
                <div class="add-list-media-header" style="margin-bottom:20px">
                    <label class="radio inline"> 
                        <input type="radio" name="gender">
                        <span>Carousel</span> 
                    </label>
                </div>
                <div class="add-list-media-wrap">
                    <form class="fuzone">
                        <div class="fu-text">
                            <span><i class="fal fa-image"></i> Click here or drop files to upload</span>
                        </div>
                        <input type="file" class="upload">
                    </form>
                </div>
            </div>
            <!--col end--> 
            <!--col --> 
            <div class="col-md-4">
                <div class="add-list-media-header" style="margin-bottom:20px">
                    <label class="radio inline"> 
                        <input type="radio" name="gender">
                        <span>Video</span> 
                    </label>
                </div>
                <div class="add-list-media-wrap">
                    <label>Youtube  <i class="fab fa-youtube"></i></label>
                    <input type="text" placeholder="https://www.youtube.com/" value=""/>   
                    <label>Vimeo <i class="fab fa-vimeo-v"></i></label>
                    <input type="text" placeholder="https://vimeo.com/" value=""/> 
                </div>
            </div>
            <!--col end-->                                                   
        </div>
    </div>
</div>
<!-- profile-edit-container end-->                                     
<div class="dashboard-title  dt-inbox fl-wrap">
    <h3>Details</h3>
</div>
<!-- profile-edit-container--> 
<div class="profile-edit-container fl-wrap block_box">
    <div class="custom-form">
        <label>Text</label>
        <textarea cols="40" rows="3" placeholder="Datails"></textarea> 
    </div>
</div>
<!-- profile-edit-container end-->
<div class="dashboard-title  dt-inbox fl-wrap">
    <h3>Facilities</h3>
</div>
<!-- profile-edit-container--> 
<div class="profile-edit-container fl-wrap block_box">
    <div class="custom-form">
        <!-- Checkboxes -->
        <ul class="fl-wrap filter-tags no-list-style ds-tg">
            <li>
                <input id="check-aaa5" type="checkbox" name="check" checked>
                <label for="check-aaa5">Free WiFi</label>
            </li>
            <li>
                <input id="check-bb5" type="checkbox" name="check" checked>
                <label for="check-bb5">Parking</label>
            </li>
            <li>                                       
                <input id="check-dd5" type="checkbox" name="check">
                <label for="check-dd5">Fitness Center</label>
            </li>
            <li>                                          
                <input id="check-cc5" type="checkbox" name="check">
                <label for="check-cc5">Non-smoking Rooms</label>
            </li>
            <li>                                       
                <input id="check-ff5" type="checkbox" name="check" checked>
                <label for="check-ff5">Airport Shuttle</label>
            </li>
            <li>                                          
                <input id="check-c4" type="checkbox" name="check">
                <label for="check-c4">Air Conditioning</label>
            </li>
        </ul>
        <!-- Checkboxes end -->
    </div>
</div>
<!-- profile-edit-container end-->                                      
<div class="dashboard-title  dt-inbox fl-wrap">
    <h3>Content Widgets</h3>
</div>
<!-- profile-edit-container--> 
<div class="profile-edit-container fl-wrap block_box">
    <div class="custom-form">
        <div class="row">
            <div class="col-md-4">
                <!-- act-widget--> 
                <div class="act-widget fl-wrap">
                    <div class="act-widget-header">
                        <h4>1. Promo video</h4>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch5" checked>
                            <label class="onoffswitch-label" for="myonoffswitch5">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div class="add-list-media-wrap">
                        <label>Video url :  <i class="fab fa-youtube"></i></label>
                        <input type="text" placeholder="https://www.youtube.com/" value=""/>   
                    </div>
                </div>
                <!-- act-widget end-->
            </div>
            <div class="col-md-4">
                <!-- act-widget--> 
                <div class="act-widget fl-wrap">
                    <div class="act-widget-header">
                        <h4>2. Gallery Thumbnails</h4>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch6" checked>
                            <label class="onoffswitch-label" for="myonoffswitch6">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div class="add-list-media-wrap">
                        <form class="fuzone">
                            <div class="fu-text">
                                <span><i class="fal fa-image"></i> Click here or drop files to upload</span>
                            </div>
                            <input type="file" class="upload">
                        </form>
                    </div>
                </div>
                <!-- act-widget end-->
            </div>
            <div class="col-md-4">
                <!-- act-widget--> 
                <div class="act-widget fl-wrap">
                    <div class="act-widget-header">
                        <h4>3. Slider</h4>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch7">
                            <label class="onoffswitch-label" for="myonoffswitch7">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div class="add-list-media-wrap">
                        <form class="fuzone">
                            <div class="fu-text">
                                <span><i class="fal fa-image"></i> Click here or drop files to upload</span>
                            </div>
                            <input type="file" class="upload">
                        </form>
                    </div>
                </div>
                <!-- act-widget end-->
            </div>
        </div>
    </div>
</div>
<!-- profile-edit-container end-->                                
<div class="dashboard-title  dt-inbox fl-wrap">
    <h3>Working Hours</h3>
</div>
<!-- profile-edit-container--> 
<div class="profile-edit-container fl-wrap block_box">
    <div class="custom-form">
        <div class="row">
            <div class="col-sm-4">
                <label>Monday <i class="fal fa-clock"></i></label>
                <input type="text" placeholder="9 AM - 5 PM" value=""/>
            </div>
            <div class="col-sm-4">
                <label>Tuesday <i class="fal fa-clock"></i></label>
                <input type="text" placeholder="9 AM - 5 PM" value=""/>
            </div>
            <div class="col-sm-4">
                <label>Wednesday <i class="fal fa-clock"></i></label>
                <input type="text" placeholder="9 AM - 5 PM" value=""/>
            </div>
            <div class="col-sm-4">
                <label>Thursday <i class="fal fa-clock"></i></label>
                <input type="text" placeholder="9 AM - 5 PM" value=""/>
            </div>
            <div class="col-sm-4">
                <label>Friday <i class="fal fa-clock"></i></label>
                <input type="text" placeholder="9 AM - 5 PM" value=""/>
            </div>
            <div class="col-sm-4">
                <label>Saturday <i class="fal fa-clock"></i></label>
                <input type="text" placeholder="9 AM - 3 PM" value=""/>
            </div>
            <div class="col-sm-4">
                <label>Sunday <i class="fal fa-clock"></i></label>
                <input type="text" placeholder="Closed" value=""/>
            </div> 
        </div>
    </div>
</div>
<!-- profile-edit-container end-->                                                                                                       
<div class="dashboard-title  dt-inbox fl-wrap">
    <h3>Sidebar Widgets</h3>
</div>
<!-- profile-edit-container--> 
<div class="profile-edit-container fl-wrap block_box">
    <div class="custom-form">
        <!-- act-widget--> 
        <div class="act-widget fl-wrap">
            <div class="act-widget-header">
                <h4>1. Booking Form</h4>
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
            </div>
        </div>
        <!-- act-widget end--> 
        <!-- act-widget--> 
        <div class="act-widget fl-wrap">
            <div class="act-widget-header">
                <h4>2. Price Range </h4>
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2">
                    <label class="onoffswitch-label" for="myonoffswitch2">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
            </div>
        </div>
        <!-- act-widget end-->                                                    
        <!-- act-widget--> 
        <div class="act-widget fl-wrap">
            <div class="act-widget-header">
                <h4>3. instagram</h4>
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                    <label class="onoffswitch-label" for="myonoffswitch3">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
            </div>
            <label>Api key<i class="fab fa-mixcloud"></i></label>
            <input type="text" placeholder="Api key" value=""/> 
        </div>
        <!-- act-widget end--> 
    </div>
</div>
<!-- profile-edit-container end-->                                   
<div class="dashboard-title  dt-inbox fl-wrap">
    <h3>Your  Socials</h3>
</div>
<!-- profile-edit-container--> 
<div class="profile-edit-container fl-wrap block_box">
    <div class="custom-form">
        <label>Facebook <i class="fab fa-facebook"></i></label>
        <input type="text" placeholder="https://www.facebook.com/" value=""/>
        <label>Twitter<i class="fab fa-twitter"></i>  </label>
        <input type="text" placeholder="https://twitter.com/" value=""/>
        <label>Vkontakte<i class="fab fa-vk"></i>  </label>
        <input type="text" placeholder="https://vk.com" value=""/>
        <label> Instagram <i class="fab fa-instagram"></i>  </label>
        <input type="text" placeholder="https://www.instagram.com/" value=""/>
        <button class="btn    color2-bg  float-btn">Send Listing<i class="fal fa-paper-plane"></i></button>
    </div>
</div>
<!-- profile-edit-container end-->     