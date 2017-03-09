<div class="search-results">
    <div class="section section-default collapsed search-results-header">
        <div class="container">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            
            <h2>Search Results</h2>
            
            <div class="group m-b">
                <div class="two-thirds">
                    <ul id="searchAreaTabs" class="nav nav-pills btn-row">
                        <li class="active"><a href="#search-all-cagov" class="btn btn-secondary" data-target="#search-all-cagov, #search-all-cagov-filters" data-toggle="tab">All CA.Gov</a></li>
                        <li><a href="#search-services-filters" class="btn btn-secondary" data-target="#search-services, #search-services-filters" data-toggle="tab">Services</a></li>
                        <li><a href="#search-locations-filter" class="btn btn-secondary" data-target="#search-locations, #search-locations-filter" data-toggle="tab">Locations</a></li>
                    </ul>
                </div>
                
                <!-- If searchArea has filters, show them here -->
                <div id="searchAreaFilters" class="tab-content">
                    
                    <!-- EMPTY DIV FOR ALL CAGOV FILTERS. REQUIRED FOR PROPER TAB SWITCHING -->
                    <div class="tab-pane fade in active" id="search-all-cagov-filters">
                    </div>
                    
                    <!-- SERVICE FILTERS -->
                    <div class="tab-pane fade" id="search-services-filters">
                        <!-- TOGGLE BUTTON FOR SERVICES -->
                        <div class="third">
                            <a href="#serviceFilters" class="btn btn-secondary m-b toggle-more filter-toggle btn-block-xs pull-right active" role="button" data-toggle="collapse" data-parent="#serviceFilters" aria-expanded="false" aria-controls="serviceFilters">Service Filters <span class="ca-gov-icon-filter" aria-hidden="true"></span></a>
                        </div>
                        
                        <!-- FILTERS FOR SERVICES -->
                        <div class="collapse in filter-group serviceFilters full-width" id="serviceFilters">
                            Service Type:
                            <div class="btn-row">
                                <a href="" class="btn btn-secondary"><span class="ca-gov-icon-computer"></span> Online</a>
                                <a href="" class="btn btn-secondary"><span class="ca-gov-icon-apps"></span> Applications</a>
                                <a href="" class="btn btn-secondary"><span class="ca-gov-icon-location"></span> Field Office</a>
                            </div>
                            
                            Categories:
                            <div class="btn-row">
                                <a href="" class="btn btn-secondary">Business</a>
                                <a href="" class="btn btn-secondary">Civil Duty</a>
                                <a href="" class="btn btn-secondary">Employment</a>
                                <a href="" class="btn btn-secondary">Family</a>
                                <a href="" class="btn btn-secondary">Health</a>
                                <a href="" class="btn btn-secondary">Home</a>
                                <a href="" class="btn btn-secondary">Records</a>
                                <a href="" class="btn btn-secondary">Recreation</a>
                                <a href="" class="btn btn-secondary">Taxes</a>
                                <a href="" class="btn btn-secondary">Transportation</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- LOCATION FILTERS -->
                    <div class="tab-pane fade" id="search-locations-filter">
                        <!-- TOGGLE BUTTON FOR LOCATIONS -->
                        <div class="third">
                            <a href="#locationFilters" class="btn btn-secondary m-b toggle-more filter-toggle btn-block-xs pull-right active" role="button" data-toggle="collapse" data-parent="#locationFilters" aria-expanded="false" aria-controls="locationFilters">Location Filters <span class="ca-gov-icon-filter" aria-hidden="true"></span></a>
                        </div>
                        
                        <!-- FILTERS FOR LOCATIONS -->
                        <div class="collapse in filter-group locationFilters full-width" id="locationFilters">
                            Location Filters:
                            <div class="btn-row">
                                <a href="" class="btn btn-secondary">Filter 1</a>
                                <a href="" class="btn btn-secondary">Filter 2</a>
                                <a href="" class="btn btn-secondary">Filter 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div id="searchAreaResults" class="tab-content">
                <!-- ALL CAGOV RESULTS -->
                <div class="tab-pane fade in active" id="search-all-cagov">
                    <p>search-all-cagov</p>
                </div>
                
                <!-- SERVICE RESULTS -->
                <div class="tab-pane fade" id="search-services">
                    <div class="group">
                        <div class="two-thirds">
                            <p class="search-result-stats">xx of xxx results for "keyword"</p>
                        </div>
                        <div class="results-list">
                            <div class="half">
								 <?php
									include_once("ssi/service-card.php");
								 ?>
							</div>
                            <div class="half">
                                <div class="card card-default card-block text-muted text-center">Placeholder</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- LOCATIONS RESULTS -->
                <div class="tab-pane fade" id="search-locations">
                    <p>search-locations</p>
                </div>
            </div>
        </div>
    </div>
</div>
