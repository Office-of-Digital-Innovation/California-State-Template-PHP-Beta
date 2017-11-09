<div class="section section-default collapsed p-t-lg">
    <div class="container">
        
        <h1>Search Results</h1>
        
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
                <div id='cse' style='width: 100%;'>Loading</div>
            </div>
            
            <!-- SERVICE RESULTS -->
            <div class="tab-pane fade" id="search-services">
               
                <!-- Results header -->
                <div class="group m-b">
                    <div class="half">
                        <p>xx of xxx results for "keyword"</p>
                    </div>
                    <div class="half text-right">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="sortResultsBy">Sort By:</label>
                                <select class="form-control" id="sortResultsBy">
                                    <option>Relevance</option>
                                    <option>Alphabetical: (A-Z)</option>
                                    <option>Alphabetical: (Z-A)</option>
                                    <option>Last Updated</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End results header -->
                    
                <div class="group">
                    <div class="results-list">
                        <div class="half">
                            <?php include_once("../ssi/service-card.html.php"); ?>
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