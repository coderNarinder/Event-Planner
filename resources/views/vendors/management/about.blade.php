@extends('vendors.management.layout')
@section('vendorContents')



<div class="row">
    

    <div class="col-md-12">
    
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Basic Information</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Gallery <span class="caret"></span></a>
                                 <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4default" data-toggle="tab">Images</a></li>
                                    <li><a href="#tab5default" data-toggle="tab">Videos</a></li>
                                </ul>
                            </li>
                            <li><a href="#tab2default" data-toggle="tab">Description</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Style</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Services</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Amenities & Games</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Prohibtions & Restrictions</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Deal & Discount</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Service Packages</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">Default 1</div>
                        <div class="tab-pane fade" id="tab2default">Default 2</div>
                        <div class="tab-pane fade" id="tab3default">Default 3</div>
                        <div class="tab-pane fade" id="tab4default">Default 4</div>
                        <div class="tab-pane fade" id="tab5default">Default 5</div>
                    </div>
                </div>
            </div>
    
	 
</div>


</div>

@endsection