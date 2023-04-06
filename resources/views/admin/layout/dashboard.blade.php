@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-xl-5 col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-account-multiple widget-icon bg-success-lighten text-success"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">Customers</h5>
                            <h3 class="mt-3 mb-3">36,254</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-cart-plus widget-icon bg-danger-lighten text-danger"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Orders</h5>
                            <h3 class="mt-3 mb-3">5,543</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-currency-usd widget-icon bg-info-lighten text-info"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Average Revenue">Revenue</h5>
                            <h3 class="mt-3 mb-3">$6,254</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-pulse widget-icon bg-warning-lighten text-warning"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Growth">Growth</h5>
                            <h3 class="mt-3 mb-3">+ 30.56%</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

        </div> <!-- end col -->

        <div class="col-xl-7  col-lg-6">
            <div class="card">
                <div class="card-body" style="position: relative;">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                           aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-3">Projections Vs Actuals</h4>

                    <div id="high-performing-product" class="apex-charts" data-colors="#fa6767,#e3eaef"
                         style="min-height: 257px;">
                        <div id="apexcharts2tmuae5f" class="apexcharts-canvas apexcharts2tmuae5f apexcharts-theme-light"
                             style="width: 827px; height: 257px;">
                            <svg id="SvgjsSvg2257" width="827" height="257" xmlns="http://www.w3.org/2000/svg"
                                 version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                 transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG2259" class="apexcharts-inner apexcharts-graphical"
                                   transform="translate(40.79997253417969, 30)">
                                    <defs id="SvgjsDefs2258">
                                        <linearGradient id="SvgjsLinearGradient2263" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2264" stop-opacity="0.4"
                                                  stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop2265" stop-opacity="0.5"
                                                  stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop2266" stop-opacity="0.5"
                                                  stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMask2tmuae5f">
                                            <rect id="SvgjsRect2268" width="792.2000274658203" height="188.112" x="-3"
                                                  y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                  stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="gridRectMarkerMask2tmuae5f">
                                            <rect id="SvgjsRect2269" width="790.2000274658203" height="190.112" x="-2"
                                                  y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                  stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect2267" width="13.103333791097008" height="186.112" x="0" y="0"
                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                          fill="url(#SvgjsLinearGradient2263)" class="apexcharts-xcrosshairs"
                                          y2="186.112" filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG2300" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG2301" class="apexcharts-xaxis-texts-g"
                                           transform="translate(0, -4)">
                                            <text id="SvgjsText2303" font-family="Helvetica, Arial, sans-serif"
                                                  x="32.758334477742515" y="215.112" text-anchor="middle"
                                                  dominant-baseline="auto" font-size="12px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2304">Jan</tspan>
                                                <title>Jan</title></text>
                                            <text id="SvgjsText2306" font-family="Helvetica, Arial, sans-serif"
                                                  x="98.27500343322754" y="215.112" text-anchor="middle"
                                                  dominant-baseline="auto" font-size="12px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2307">Feb</tspan>
                                                <title>Feb</title></text>
                                            <text id="SvgjsText2309" font-family="Helvetica, Arial, sans-serif"
                                                  x="163.79167238871256" y="215.112" text-anchor="middle"
                                                  dominant-baseline="auto" font-size="12px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2310">Mar</tspan>
                                                <title>Mar</title></text>
                                            <text id="SvgjsText2312" font-family="Helvetica, Arial, sans-serif"
                                                  x="229.3083413441976" y="215.112" text-anchor="middle"
                                                  dominant-baseline="auto" font-size="12px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2313">Apr</tspan>
                                                <title>Apr</title></text>
                                            <text id="SvgjsText2315" font-family="Helvetica, Arial, sans-serif"
                                                  x="294.8250102996827" y="215.112" text-anchor="middle"
                                                  dominant-baseline="auto" font-size="12px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2316">May</tspan>
                                                <title>May</title></text>
                                            <text id="SvgjsText2318" font-family="Helvetica, Arial, sans-serif"
                                                  x="360.3416792551677" y="215.112" text-anchor="middle"
                                                  dominant-baseline="auto" font-size="12px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2319">Jun</tspan>
                                                <title>Jun</title></text>
                                            <text id="SvgjsText2321" font-family="Helvetica, Arial, sans-serif"
                                                  x="425.85834821065276" y="215.112" text-anchor="middle"
                                                  dominant-baseline="auto" font-size="12px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2322">Jul</tspan>
                                                <title>Jul</title></text>
                                            <text id="SvgjsText2324" font-family="Helvetica, Arial, sans-serif"
                                                  x="491.37501716613775" y="215.112" text-anchor="middle"
                                                  dominant-baseline="auto" font-size="12px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2325">Aug</tspan>
                                                <title>Aug</title></text>
                                            <text id="SvgjsText2327" font-family="Helvetica, Arial, sans-serif"
                                                  x="556.8916861216227" y="215.112" text-anchor="middle"
                                                  dominant-baseline="auto" font-size="12px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2328">Sep</tspan>
                                                <title>Sep</title></text>
                                            <text id="SvgjsText2330" font-family="Helvetica, Arial, sans-serif"
                                                  x="622.4083550771077" y="215.112" text-anchor="middle"
                                                  dominant-baseline="auto" font-size="12px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2331">Oct</tspan>
                                                <title>Oct</title></text>
                                            <text id="SvgjsText2333" font-family="Helvetica, Arial, sans-serif"
                                                  x="687.9250240325927" y="215.112" text-anchor="middle"
                                                  dominant-baseline="auto" font-size="12px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2334">Nov</tspan>
                                                <title>Nov</title></text>
                                            <text id="SvgjsText2336" font-family="Helvetica, Arial, sans-serif"
                                                  x="753.4416929880776" y="215.112" text-anchor="middle"
                                                  dominant-baseline="auto" font-size="12px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2337">Dec</tspan>
                                                <title>Dec</title></text>
                                        </g>
                                    </g>
                                    <g id="SvgjsG2352" class="apexcharts-grid">
                                        <g id="SvgjsG2353" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine2368" x1="0" y1="0" x2="786.2000274658203" y2="0"
                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                  class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2369" x1="0" y1="37.2224" x2="786.2000274658203"
                                                  y2="37.2224" stroke="#e0e0e0" stroke-dasharray="0"
                                                  class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2370" x1="0" y1="74.4448" x2="786.2000274658203"
                                                  y2="74.4448" stroke="#e0e0e0" stroke-dasharray="0"
                                                  class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2371" x1="0" y1="111.66720000000001"
                                                  x2="786.2000274658203" y2="111.66720000000001" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2372" x1="0" y1="148.8896" x2="786.2000274658203"
                                                  y2="148.8896" stroke="#e0e0e0" stroke-dasharray="0"
                                                  class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2373" x1="0" y1="186.112" x2="786.2000274658203"
                                                  y2="186.112" stroke="#e0e0e0" stroke-dasharray="0"
                                                  class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG2354" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine2355" x1="0" y1="187.112" x2="0" y2="193.112"
                                              stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2356" x1="65.51666895548503" y1="187.112"
                                              x2="65.51666895548503" y2="193.112" stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2357" x1="131.03333791097006" y1="187.112"
                                              x2="131.03333791097006" y2="193.112" stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2358" x1="196.55000686645508" y1="187.112"
                                              x2="196.55000686645508" y2="193.112" stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2359" x1="262.0666758219401" y1="187.112"
                                              x2="262.0666758219401" y2="193.112" stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2360" x1="327.58334477742517" y1="187.112"
                                              x2="327.58334477742517" y2="193.112" stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2361" x1="393.1000137329102" y1="187.112"
                                              x2="393.1000137329102" y2="193.112" stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2362" x1="458.61668268839526" y1="187.112"
                                              x2="458.61668268839526" y2="193.112" stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2363" x1="524.1333516438802" y1="187.112"
                                              x2="524.1333516438802" y2="193.112" stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2364" x1="589.6500205993652" y1="187.112"
                                              x2="589.6500205993652" y2="193.112" stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2365" x1="655.1666895548502" y1="187.112"
                                              x2="655.1666895548502" y2="193.112" stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2366" x1="720.6833585103352" y1="187.112"
                                              x2="720.6833585103352" y2="193.112" stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2367" x1="786.2000274658202" y1="187.112"
                                              x2="786.2000274658202" y2="193.112" stroke="#e0e0e0" stroke-dasharray="0"
                                              class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2375" x1="0" y1="186.112" x2="786.2000274658203" y2="186.112"
                                              stroke="transparent" stroke-dasharray="0"></line>
                                        <line id="SvgjsLine2374" x1="0" y1="1" x2="0" y2="186.112" stroke="transparent"
                                              stroke-dasharray="0"></line>
                                    </g>
                                    <g id="SvgjsG2271" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG2272" class="apexcharts-series" seriesName="Actual" rel="1"
                                           data:realIndex="0">
                                            <path id="SvgjsPath2274"
                                                  d="M 26.20666758219401 186.112L 26.20666758219401 125.62559999999999L 37.310001373291016 125.62559999999999L 37.310001373291016 125.62559999999999L 37.310001373291016 186.112L 37.310001373291016 186.112z"
                                                  fill="rgba(250,103,103,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 26.20666758219401 186.112L 26.20666758219401 125.62559999999999L 37.310001373291016 125.62559999999999L 37.310001373291016 125.62559999999999L 37.310001373291016 186.112L 37.310001373291016 186.112z"
                                                  pathFrom="M 26.20666758219401 186.112L 26.20666758219401 186.112L 37.310001373291016 186.112L 37.310001373291016 186.112L 37.310001373291016 186.112L 26.20666758219401 186.112"
                                                  cy="125.62559999999999" cx="90.72333653767905" j="0" val="65"
                                                  barHeight="60.486399999999996" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2275"
                                                  d="M 91.72333653767905 186.112L 91.72333653767905 131.20896L 102.82667032877606 131.20896L 102.82667032877606 131.20896L 102.82667032877606 186.112L 102.82667032877606 186.112z"
                                                  fill="rgba(250,103,103,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 91.72333653767905 186.112L 91.72333653767905 131.20896L 102.82667032877606 131.20896L 102.82667032877606 131.20896L 102.82667032877606 186.112L 102.82667032877606 186.112z"
                                                  pathFrom="M 91.72333653767905 186.112L 91.72333653767905 186.112L 102.82667032877606 186.112L 102.82667032877606 186.112L 102.82667032877606 186.112L 91.72333653767905 186.112"
                                                  cy="131.20896" cx="156.24000549316406" j="1" val="59"
                                                  barHeight="54.90304" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2276"
                                                  d="M 157.24000549316406 186.112L 157.24000549316406 111.6672L 168.34333928426108 111.6672L 168.34333928426108 111.6672L 168.34333928426108 186.112L 168.34333928426108 186.112z"
                                                  fill="rgba(250,103,103,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 157.24000549316406 186.112L 157.24000549316406 111.6672L 168.34333928426108 111.6672L 168.34333928426108 111.6672L 168.34333928426108 186.112L 168.34333928426108 186.112z"
                                                  pathFrom="M 157.24000549316406 186.112L 157.24000549316406 186.112L 168.34333928426108 186.112L 168.34333928426108 186.112L 168.34333928426108 186.112L 157.24000549316406 186.112"
                                                  cy="111.6672" cx="221.7566744486491" j="2" val="80"
                                                  barHeight="74.4448" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2277"
                                                  d="M 222.7566744486491 186.112L 222.7566744486491 110.73664L 233.86000823974612 110.73664L 233.86000823974612 110.73664L 233.86000823974612 186.112L 233.86000823974612 186.112z"
                                                  fill="rgba(250,103,103,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 222.7566744486491 186.112L 222.7566744486491 110.73664L 233.86000823974612 110.73664L 233.86000823974612 110.73664L 233.86000823974612 186.112L 233.86000823974612 186.112z"
                                                  pathFrom="M 222.7566744486491 186.112L 222.7566744486491 186.112L 233.86000823974612 186.112L 233.86000823974612 186.112L 233.86000823974612 186.112L 222.7566744486491 186.112"
                                                  cy="110.73664" cx="287.27334340413415" j="3" val="81"
                                                  barHeight="75.37536" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2278"
                                                  d="M 288.27334340413415 186.112L 288.27334340413415 134.00064L 299.37667719523114 134.00064L 299.37667719523114 134.00064L 299.37667719523114 186.112L 299.37667719523114 186.112z"
                                                  fill="rgba(250,103,103,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 288.27334340413415 186.112L 288.27334340413415 134.00064L 299.37667719523114 134.00064L 299.37667719523114 134.00064L 299.37667719523114 186.112L 299.37667719523114 186.112z"
                                                  pathFrom="M 288.27334340413415 186.112L 288.27334340413415 186.112L 299.37667719523114 186.112L 299.37667719523114 186.112L 299.37667719523114 186.112L 288.27334340413415 186.112"
                                                  cy="134.00064" cx="352.7900123596192" j="4" val="56"
                                                  barHeight="52.11136" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2279"
                                                  d="M 353.7900123596192 186.112L 353.7900123596192 103.29216L 364.8933461507162 103.29216L 364.8933461507162 103.29216L 364.8933461507162 186.112L 364.8933461507162 186.112z"
                                                  fill="rgba(250,103,103,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 353.7900123596192 186.112L 353.7900123596192 103.29216L 364.8933461507162 103.29216L 364.8933461507162 103.29216L 364.8933461507162 186.112L 364.8933461507162 186.112z"
                                                  pathFrom="M 353.7900123596192 186.112L 353.7900123596192 186.112L 364.8933461507162 186.112L 364.8933461507162 186.112L 364.8933461507162 186.112L 353.7900123596192 186.112"
                                                  cy="103.29216" cx="418.30668131510424" j="5" val="89"
                                                  barHeight="82.81984" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2280"
                                                  d="M 419.30668131510424 186.112L 419.30668131510424 148.8896L 430.41001510620123 148.8896L 430.41001510620123 148.8896L 430.41001510620123 186.112L 430.41001510620123 186.112z"
                                                  fill="rgba(250,103,103,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 419.30668131510424 186.112L 419.30668131510424 148.8896L 430.41001510620123 148.8896L 430.41001510620123 148.8896L 430.41001510620123 186.112L 430.41001510620123 186.112z"
                                                  pathFrom="M 419.30668131510424 186.112L 419.30668131510424 186.112L 430.41001510620123 186.112L 430.41001510620123 186.112L 430.41001510620123 186.112L 419.30668131510424 186.112"
                                                  cy="148.8896" cx="483.8233502705893" j="6" val="40"
                                                  barHeight="37.2224" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2281"
                                                  d="M 484.8233502705893 186.112L 484.8233502705893 156.33408L 495.9266840616863 156.33408L 495.9266840616863 156.33408L 495.9266840616863 186.112L 495.9266840616863 186.112z"
                                                  fill="rgba(250,103,103,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 484.8233502705893 186.112L 484.8233502705893 156.33408L 495.9266840616863 156.33408L 495.9266840616863 156.33408L 495.9266840616863 186.112L 495.9266840616863 186.112z"
                                                  pathFrom="M 484.8233502705893 186.112L 484.8233502705893 186.112L 495.9266840616863 186.112L 495.9266840616863 186.112L 495.9266840616863 186.112L 484.8233502705893 186.112"
                                                  cy="156.33408" cx="549.3400192260743" j="7" val="32"
                                                  barHeight="29.777919999999998" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2282"
                                                  d="M 550.3400192260743 186.112L 550.3400192260743 125.62559999999999L 561.4433530171714 125.62559999999999L 561.4433530171714 125.62559999999999L 561.4433530171714 186.112L 561.4433530171714 186.112z"
                                                  fill="rgba(250,103,103,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 550.3400192260743 186.112L 550.3400192260743 125.62559999999999L 561.4433530171714 125.62559999999999L 561.4433530171714 125.62559999999999L 561.4433530171714 186.112L 561.4433530171714 186.112z"
                                                  pathFrom="M 550.3400192260743 186.112L 550.3400192260743 186.112L 561.4433530171714 186.112L 561.4433530171714 186.112L 561.4433530171714 186.112L 550.3400192260743 186.112"
                                                  cy="125.62559999999999" cx="614.8566881815593" j="8" val="65"
                                                  barHeight="60.486399999999996" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2283"
                                                  d="M 615.8566881815593 186.112L 615.8566881815593 131.20896L 626.9600219726564 131.20896L 626.9600219726564 131.20896L 626.9600219726564 186.112L 626.9600219726564 186.112z"
                                                  fill="rgba(250,103,103,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 615.8566881815593 186.112L 615.8566881815593 131.20896L 626.9600219726564 131.20896L 626.9600219726564 131.20896L 626.9600219726564 186.112L 626.9600219726564 186.112z"
                                                  pathFrom="M 615.8566881815593 186.112L 615.8566881815593 186.112L 626.9600219726564 186.112L 626.9600219726564 186.112L 626.9600219726564 186.112L 615.8566881815593 186.112"
                                                  cy="131.20896" cx="680.3733571370443" j="9" val="59"
                                                  barHeight="54.90304" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2284"
                                                  d="M 681.3733571370443 186.112L 681.3733571370443 111.6672L 692.4766909281414 111.6672L 692.4766909281414 111.6672L 692.4766909281414 186.112L 692.4766909281414 186.112z"
                                                  fill="rgba(250,103,103,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 681.3733571370443 186.112L 681.3733571370443 111.6672L 692.4766909281414 111.6672L 692.4766909281414 111.6672L 692.4766909281414 186.112L 692.4766909281414 186.112z"
                                                  pathFrom="M 681.3733571370443 186.112L 681.3733571370443 186.112L 692.4766909281414 186.112L 692.4766909281414 186.112L 692.4766909281414 186.112L 681.3733571370443 186.112"
                                                  cy="111.6672" cx="745.8900260925293" j="10" val="80"
                                                  barHeight="74.4448" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2285"
                                                  d="M 746.8900260925293 186.112L 746.8900260925293 110.73664L 757.9933598836263 110.73664L 757.9933598836263 110.73664L 757.9933598836263 186.112L 757.9933598836263 186.112z"
                                                  fill="rgba(250,103,103,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 746.8900260925293 186.112L 746.8900260925293 110.73664L 757.9933598836263 110.73664L 757.9933598836263 110.73664L 757.9933598836263 186.112L 757.9933598836263 186.112z"
                                                  pathFrom="M 746.8900260925293 186.112L 746.8900260925293 186.112L 757.9933598836263 186.112L 757.9933598836263 186.112L 757.9933598836263 186.112L 746.8900260925293 186.112"
                                                  cy="110.73664" cx="811.4066950480143" j="11" val="81"
                                                  barHeight="75.37536" barWidth="13.103333791097008"></path>
                                        </g>
                                        <g id="SvgjsG2286" class="apexcharts-series" seriesName="Projection" rel="2"
                                           data:realIndex="1">
                                            <path id="SvgjsPath2288"
                                                  d="M 26.20666758219401 125.62559999999999L 26.20666758219401 42.80575999999999L 37.310001373291016 42.80575999999999L 37.310001373291016 42.80575999999999L 37.310001373291016 125.62559999999999L 37.310001373291016 125.62559999999999z"
                                                  fill="rgba(227,234,239,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 26.20666758219401 125.62559999999999L 26.20666758219401 42.80575999999999L 37.310001373291016 42.80575999999999L 37.310001373291016 42.80575999999999L 37.310001373291016 125.62559999999999L 37.310001373291016 125.62559999999999z"
                                                  pathFrom="M 26.20666758219401 125.62559999999999L 26.20666758219401 125.62559999999999L 37.310001373291016 125.62559999999999L 37.310001373291016 125.62559999999999L 37.310001373291016 125.62559999999999L 26.20666758219401 125.62559999999999"
                                                  cy="42.80575999999999" cx="90.72333653767905" j="0" val="89"
                                                  barHeight="82.81984" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2289"
                                                  d="M 91.72333653767905 131.20896L 91.72333653767905 93.98656L 102.82667032877606 93.98656L 102.82667032877606 93.98656L 102.82667032877606 131.20896L 102.82667032877606 131.20896z"
                                                  fill="rgba(227,234,239,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 91.72333653767905 131.20896L 91.72333653767905 93.98656L 102.82667032877606 93.98656L 102.82667032877606 93.98656L 102.82667032877606 131.20896L 102.82667032877606 131.20896z"
                                                  pathFrom="M 91.72333653767905 131.20896L 91.72333653767905 131.20896L 102.82667032877606 131.20896L 102.82667032877606 131.20896L 102.82667032877606 131.20896L 91.72333653767905 131.20896"
                                                  cy="93.98656" cx="156.24000549316406" j="1" val="40"
                                                  barHeight="37.2224" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2290"
                                                  d="M 157.24000549316406 111.6672L 157.24000549316406 81.88928L 168.34333928426108 81.88928L 168.34333928426108 81.88928L 168.34333928426108 111.6672L 168.34333928426108 111.6672z"
                                                  fill="rgba(227,234,239,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 157.24000549316406 111.6672L 157.24000549316406 81.88928L 168.34333928426108 81.88928L 168.34333928426108 81.88928L 168.34333928426108 111.6672L 168.34333928426108 111.6672z"
                                                  pathFrom="M 157.24000549316406 111.6672L 157.24000549316406 111.6672L 168.34333928426108 111.6672L 168.34333928426108 111.6672L 168.34333928426108 111.6672L 157.24000549316406 111.6672"
                                                  cy="81.88928" cx="221.7566744486491" j="2" val="32"
                                                  barHeight="29.777919999999998" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2291"
                                                  d="M 222.7566744486491 110.73664L 222.7566744486491 50.25024L 233.86000823974612 50.25024L 233.86000823974612 50.25024L 233.86000823974612 110.73664L 233.86000823974612 110.73664z"
                                                  fill="rgba(227,234,239,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 222.7566744486491 110.73664L 222.7566744486491 50.25024L 233.86000823974612 50.25024L 233.86000823974612 50.25024L 233.86000823974612 110.73664L 233.86000823974612 110.73664z"
                                                  pathFrom="M 222.7566744486491 110.73664L 222.7566744486491 110.73664L 233.86000823974612 110.73664L 233.86000823974612 110.73664L 233.86000823974612 110.73664L 222.7566744486491 110.73664"
                                                  cy="50.25024" cx="287.27334340413415" j="3" val="65"
                                                  barHeight="60.486399999999996" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2292"
                                                  d="M 288.27334340413415 134.00064L 288.27334340413415 79.0976L 299.37667719523114 79.0976L 299.37667719523114 79.0976L 299.37667719523114 134.00064L 299.37667719523114 134.00064z"
                                                  fill="rgba(227,234,239,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 288.27334340413415 134.00064L 288.27334340413415 79.0976L 299.37667719523114 79.0976L 299.37667719523114 79.0976L 299.37667719523114 134.00064L 299.37667719523114 134.00064z"
                                                  pathFrom="M 288.27334340413415 134.00064L 288.27334340413415 134.00064L 299.37667719523114 134.00064L 299.37667719523114 134.00064L 299.37667719523114 134.00064L 288.27334340413415 134.00064"
                                                  cy="79.0976" cx="352.7900123596192" j="4" val="59"
                                                  barHeight="54.90304" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2293"
                                                  d="M 353.7900123596192 103.29216L 353.7900123596192 28.847359999999995L 364.8933461507162 28.847359999999995L 364.8933461507162 28.847359999999995L 364.8933461507162 103.29216L 364.8933461507162 103.29216z"
                                                  fill="rgba(227,234,239,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 353.7900123596192 103.29216L 353.7900123596192 28.847359999999995L 364.8933461507162 28.847359999999995L 364.8933461507162 28.847359999999995L 364.8933461507162 103.29216L 364.8933461507162 103.29216z"
                                                  pathFrom="M 353.7900123596192 103.29216L 353.7900123596192 103.29216L 364.8933461507162 103.29216L 364.8933461507162 103.29216L 364.8933461507162 103.29216L 353.7900123596192 103.29216"
                                                  cy="28.847359999999995" cx="418.30668131510424" j="5" val="80"
                                                  barHeight="74.4448" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2294"
                                                  d="M 419.30668131510424 148.8896L 419.30668131510424 73.51424L 430.41001510620123 73.51424L 430.41001510620123 73.51424L 430.41001510620123 148.8896L 430.41001510620123 148.8896z"
                                                  fill="rgba(227,234,239,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 419.30668131510424 148.8896L 419.30668131510424 73.51424L 430.41001510620123 73.51424L 430.41001510620123 73.51424L 430.41001510620123 148.8896L 430.41001510620123 148.8896z"
                                                  pathFrom="M 419.30668131510424 148.8896L 419.30668131510424 148.8896L 430.41001510620123 148.8896L 430.41001510620123 148.8896L 430.41001510620123 148.8896L 419.30668131510424 148.8896"
                                                  cy="73.51424" cx="483.8233502705893" j="6" val="81"
                                                  barHeight="75.37536" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2295"
                                                  d="M 484.8233502705893 156.33408L 484.8233502705893 104.22272000000001L 495.9266840616863 104.22272000000001L 495.9266840616863 104.22272000000001L 495.9266840616863 156.33408L 495.9266840616863 156.33408z"
                                                  fill="rgba(227,234,239,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 484.8233502705893 156.33408L 484.8233502705893 104.22272000000001L 495.9266840616863 104.22272000000001L 495.9266840616863 104.22272000000001L 495.9266840616863 156.33408L 495.9266840616863 156.33408z"
                                                  pathFrom="M 484.8233502705893 156.33408L 484.8233502705893 156.33408L 495.9266840616863 156.33408L 495.9266840616863 156.33408L 495.9266840616863 156.33408L 484.8233502705893 156.33408"
                                                  cy="104.22272000000001" cx="549.3400192260743" j="7" val="56"
                                                  barHeight="52.11136" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2296"
                                                  d="M 550.3400192260743 125.62559999999999L 550.3400192260743 42.80575999999999L 561.4433530171714 42.80575999999999L 561.4433530171714 42.80575999999999L 561.4433530171714 125.62559999999999L 561.4433530171714 125.62559999999999z"
                                                  fill="rgba(227,234,239,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 550.3400192260743 125.62559999999999L 550.3400192260743 42.80575999999999L 561.4433530171714 42.80575999999999L 561.4433530171714 42.80575999999999L 561.4433530171714 125.62559999999999L 561.4433530171714 125.62559999999999z"
                                                  pathFrom="M 550.3400192260743 125.62559999999999L 550.3400192260743 125.62559999999999L 561.4433530171714 125.62559999999999L 561.4433530171714 125.62559999999999L 561.4433530171714 125.62559999999999L 550.3400192260743 125.62559999999999"
                                                  cy="42.80575999999999" cx="614.8566881815593" j="8" val="89"
                                                  barHeight="82.81984" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2297"
                                                  d="M 615.8566881815593 131.20896L 615.8566881815593 93.98656L 626.9600219726564 93.98656L 626.9600219726564 93.98656L 626.9600219726564 131.20896L 626.9600219726564 131.20896z"
                                                  fill="rgba(227,234,239,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 615.8566881815593 131.20896L 615.8566881815593 93.98656L 626.9600219726564 93.98656L 626.9600219726564 93.98656L 626.9600219726564 131.20896L 626.9600219726564 131.20896z"
                                                  pathFrom="M 615.8566881815593 131.20896L 615.8566881815593 131.20896L 626.9600219726564 131.20896L 626.9600219726564 131.20896L 626.9600219726564 131.20896L 615.8566881815593 131.20896"
                                                  cy="93.98656" cx="680.3733571370443" j="9" val="40"
                                                  barHeight="37.2224" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2298"
                                                  d="M 681.3733571370443 111.6672L 681.3733571370443 51.1808L 692.4766909281414 51.1808L 692.4766909281414 51.1808L 692.4766909281414 111.6672L 692.4766909281414 111.6672z"
                                                  fill="rgba(227,234,239,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 681.3733571370443 111.6672L 681.3733571370443 51.1808L 692.4766909281414 51.1808L 692.4766909281414 51.1808L 692.4766909281414 111.6672L 692.4766909281414 111.6672z"
                                                  pathFrom="M 681.3733571370443 111.6672L 681.3733571370443 111.6672L 692.4766909281414 111.6672L 692.4766909281414 111.6672L 692.4766909281414 111.6672L 681.3733571370443 111.6672"
                                                  cy="51.1808" cx="745.8900260925293" j="10" val="65"
                                                  barHeight="60.486399999999996" barWidth="13.103333791097008"></path>
                                            <path id="SvgjsPath2299"
                                                  d="M 746.8900260925293 110.73664L 746.8900260925293 55.8336L 757.9933598836263 55.8336L 757.9933598836263 55.8336L 757.9933598836263 110.73664L 757.9933598836263 110.73664z"
                                                  fill="rgba(227,234,239,1)" fill-opacity="1" stroke="transparent"
                                                  stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                  stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                  clip-path="url(#gridRectMask2tmuae5f)"
                                                  pathTo="M 746.8900260925293 110.73664L 746.8900260925293 55.8336L 757.9933598836263 55.8336L 757.9933598836263 55.8336L 757.9933598836263 110.73664L 757.9933598836263 110.73664z"
                                                  pathFrom="M 746.8900260925293 110.73664L 746.8900260925293 110.73664L 757.9933598836263 110.73664L 757.9933598836263 110.73664L 757.9933598836263 110.73664L 746.8900260925293 110.73664"
                                                  cy="55.8336" cx="811.4066950480143" j="11" val="59"
                                                  barHeight="54.90304" barWidth="13.103333791097008"></path>
                                            <g id="SvgjsG2287" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <g id="SvgjsG2273" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine2376" x1="0" y1="0" x2="786.2000274658203" y2="0"
                                          stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                          class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2377" x1="0" y1="0" x2="786.2000274658203" y2="0"
                                          stroke-dasharray="0" stroke-width="0"
                                          class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2378" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2379" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2380" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG2338" class="apexcharts-yaxis" rel="0"
                                   transform="translate(7.7999725341796875, 0)">
                                    <g id="SvgjsG2339" class="apexcharts-yaxis-texts-g">
                                        <text id="SvgjsText2340" font-family="Helvetica, Arial, sans-serif" x="20"
                                              y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                              font-weight="400" fill="#373d3f"
                                              class="apexcharts-text apexcharts-yaxis-label "
                                              style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2341">200k</tspan>
                                        </text>
                                        <text id="SvgjsText2342" font-family="Helvetica, Arial, sans-serif" x="20"
                                              y="68.7224" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                              font-weight="400" fill="#373d3f"
                                              class="apexcharts-text apexcharts-yaxis-label "
                                              style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2343">160k</tspan>
                                        </text>
                                        <text id="SvgjsText2344" font-family="Helvetica, Arial, sans-serif" x="20"
                                              y="105.94479999999999" text-anchor="end" dominant-baseline="auto"
                                              font-size="11px" font-weight="400" fill="#373d3f"
                                              class="apexcharts-text apexcharts-yaxis-label "
                                              style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2345">120k</tspan>
                                        </text>
                                        <text id="SvgjsText2346" font-family="Helvetica, Arial, sans-serif" x="20"
                                              y="143.16719999999998" text-anchor="end" dominant-baseline="auto"
                                              font-size="11px" font-weight="400" fill="#373d3f"
                                              class="apexcharts-text apexcharts-yaxis-label "
                                              style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2347">80k</tspan>
                                        </text>
                                        <text id="SvgjsText2348" font-family="Helvetica, Arial, sans-serif" x="20"
                                              y="180.38959999999997" text-anchor="end" dominant-baseline="auto"
                                              font-size="11px" font-weight="400" fill="#373d3f"
                                              class="apexcharts-text apexcharts-yaxis-label "
                                              style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2349">40k</tspan>
                                        </text>
                                        <text id="SvgjsText2350" font-family="Helvetica, Arial, sans-serif" x="20"
                                              y="217.61199999999997" text-anchor="end" dominant-baseline="auto"
                                              font-size="11px" font-weight="400" fill="#373d3f"
                                              class="apexcharts-text apexcharts-yaxis-label "
                                              style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2351">0k</tspan>
                                        </text>
                                    </g>
                                </g>
                                <g id="SvgjsG2260" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                                                                   style="background-color: rgb(250, 103, 103);"></span>
                                    <div class="apexcharts-tooltip-text"
                                         style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-label"></span><span
                                                class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                                                                   style="background-color: rgb(227, 234, 239);"></span>
                                    <div class="apexcharts-tooltip-text"
                                         style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-label"></span><span
                                                class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>

                    <!-- <div style="height: 263px;" class="chartjs-chart">
                        <canvas id="high-performing-product"></canvas>
                    </div> -->
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 876px; height: 345px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>

@endsection
