@extends('admin.common.layout')

@section('content')
<div class="page">
   <div class="page-content padding-30 container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
         <div class="col-xlg-8 col-md-12">
            <!-- Panel Statistical -->
            <div class="widget widget-shadow" id="widgetStatistical">
               <div class="widget-content widget-radius bg-white">
                  <div class="row no-space height-full" data-plugin="matchHeight">
                     <div class="col-sm-8 col-xs-12">
                        <div id="widgetJvmap" class="height-full" data-plugin="vectorMap" data-map="ca_lcc_en"></div>
                     </div>
                     <div class="col-sm-4 col-xs-12 padding-30">
                        <div class="form-group">
                           <div class="input-search input-search-dark">
                              <i class="input-search-icon wb-search" aria-hidden="true"></i>
                              <input type="text" class="form-control" name="" placeholder="Search...">
                           </div>
                        </div>
                        <p class="font-size-20 blue-grey-700">Statistical</p>
                        <p class="blue-grey-400">Status: live</p>
                        <p>
                           <i class="icon wb-map blue-grey-400 margin-right-10" aria-hidden="true"></i>
                           <span>258 Countries, 4835 Cities</span>
                        </p>
                        <ul class="list-unstyled margin-top-20">
                           <li>
                              <p>VISITS</p>
                              <div class="progress progress-xs margin-bottom-25">
                                 <div class="progress-bar progress-bar-info bg-blue-600" style="width: 70.3%" aria-valuemax="100"
                                    aria-valuemin="0" aria-valuenow="70.3" role="progressbar">
                                    <span class="sr-only">70.3%</span>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <p>TODAY</p>
                              <div class="progress progress-xs margin-bottom-25">
                                 <div class="progress-bar progress-bar-info bg-green-600" style="width: 70.3%" aria-valuemax="100"
                                    aria-valuemin="0" aria-valuenow="70.3" role="progressbar">
                                    <span class="sr-only">70.3%</span>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <p>WEEK</p>
                              <div class="progress progress-xs margin-bottom-0">
                                 <div class="progress-bar progress-bar-info bg-purple-600" style="width: 70.3%"
                                    aria-valuemax="100" aria-valuemin="0" aria-valuenow="70.3"
                                    role="progressbar">
                                    <span class="sr-only">70.3%</span>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Panel Statistical -->
         </div>
      </div>
   </div>
</div>
@endsection