
@extends('layouts.master')
@section('css')
@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">empty</h4>
        </div>
    </div><br>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->



        <div class="container-fluid">
            <div class="row">
                <!-- Left Sidebar -->
                <div class="side-menu-fixed">
                    <div class="scrollbar side-menu-bg">
                        <ul class="nav navbar-nav side-menu" id="sidebarnav">
                            <!-- menu item Dashboard-->
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                                    <li> <a href="index.html">Dashboard 01</a> </li>
                                    <li> <a href="index-02.html">Dashboard 02</a> </li>
                                    <li> <a href="index-03.html">Dashboard 03</a> </li>
                                    <li> <a href="index-04.html">Dashboard 04</a> </li>
                                    <li> <a href="index-05.html">Dashboard 05</a> </li>
                                </ul>
                            </li>
                            <!-- menu title -->
                            <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>
                            <!-- menu item Elements-->
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                                    <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">Elements</span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="elements" class="collapse" data-parent="#sidebarnav">
                                    <li><a href="accordions.html">Accordions</a></li>
                                    <li><a href="alerts.html">Alerts</a></li>
                                    <li><a href="button.html">Button</a></li>
                                    <li><a href="colorpicker.html">Colorpicker</a></li>
                                    <li><a href="dropdown.html">Dropdown</a></li>
                                    <li><a href="lists.html">lists</a></li>
                                    <li><a href="modal.html">modal</a></li>
                                    <li><a href="nav.html">nav</a></li>
                                    <li><a href="nicescroll.html">nicescroll</a></li>
                                    <li><a href="pricing-table.html">pricing table</a></li>
                                    <li><a href="ratings.html">ratings</a></li>
                                    <li><a href="date-picker.html">date picker</a></li>
                                    <li><a href="tabs.html">tabs</a></li>
                                    <li><a href="typography.html">typography</a></li>
                                    <li><a href="popover-tooltips.html">Popover tooltips</a></li>
                                    <li><a href="progress.html">progress</a></li>
                                    <li><a href="switch.html">switch</a></li>
                                    <li><a href="sweetalert2.html">sweetalert2</a></li>
                                    <li><a href="touchspin.html">touchspin</a></li>
                                </ul>
                            </li>
                            <!-- menu item calendar-->
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                                    <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">calendar</span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                                    <li> <a href="calendar.html">Events Calendar </a> </li>
                                    <li> <a href="calendar-list.html">List Calendar</a> </li>
                                </ul>
                            </li>
                            <!-- menu item todo-->
                            <li>
                                <a href="todo-list.html"><i class="ti-menu-alt"></i><span class="right-nav-text">Todo list</span> </a>
                            </li>
                            <!-- menu item chat-->
                            <li>
                                <a href="chat-page.html"><i class="ti-comments"></i><span class="right-nav-text">Chat </span></a>
                            </li>
                            <!-- menu item mailbox-->
                            <li>
                                <a href="mail-box.html"><i class="ti-email"></i><span class="right-nav-text">Mail box</span> <span class="badge badge-pill badge-warning float-right mt-1">HOT</span> </a>
                            </li>
                            <!-- menu item Charts-->
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
                                    <div class="pull-left"><i class="ti-pie-chart"></i><span class="right-nav-text">Charts</span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="chart" class="collapse" data-parent="#sidebarnav">
                                    <li> <a href="chart-js.html">Chart.js</a> </li>
                                    <li> <a href="chart-morris.html">Chart morris </a> </li>
                                    <li> <a href="chart-sparkline.html">Chart Sparkline</a> </li>
                                </ul>
                            </li>
                            <!-- menu font icon-->
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
                                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">font icon</span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
                                    <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                                    <li> <a href="themify-icons.html">Themify icons</a> </li>
                                    <li> <a href="weather-icon.html">Weather icons</a> </li>
                                </ul>
                            </li>
                            <!-- menu title -->
                            <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Widgets, Forms & Tables </li>
                            <!-- menu item Widgets-->
                            <li>
                                <a href="widgets.html"><i class="ti-blackboard"></i><span class="right-nav-text">Widgets</span> <span class="badge badge-pill badge-danger float-right mt-1">59</span> </a>
                            </li>
                            <!-- menu item Form-->
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
                                    <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Form & Editor</span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="Form" class="collapse" data-parent="#sidebarnav">
                                    <li> <a href="editor.html">Editor</a> </li>
                                    <li> <a href="editor-markdown.html">Editor Markdown</a> </li>
                                    <li> <a href="form-input.html">Form input</a> </li>
                                    <li> <a href="form-validation-jquery.html">form validation jquery</a> </li>
                                    <li> <a href="form-wizard.html">form wizard</a> </li>
                                    <li> <a href="form-repeater.html">form repeater</a> </li>
                                    <li> <a href="input-group.html">input group</a> </li>
                                    <li> <a href="toastr.html">toastr</a> </li>
                                </ul>
                            </li>
                            <!-- menu item table -->
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
                                    <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">data table</span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="table" class="collapse" data-parent="#sidebarnav">
                                    <li> <a href="data-html-table.html">Data html table</a> </li>
                                    <li> <a href="data-local.html">Data local</a> </li>
                                    <li> <a href="data-table.html">Data table</a> </li>
                                </ul>
                            </li>
                            <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">More Pages</li>
                            <!-- menu item Custom pages-->
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">
                                    <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">Custom pages</span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="custom-page" class="collapse" data-parent="#sidebarnav">
                                    <li> <a href="projects.html">projects</a> </li>
                                    <li> <a href="project-summary.html">Projects summary</a> </li>
                                    <li> <a href="profile.html">profile</a> </li>
                                    <li> <a href="app-contacts.html">App contacts</a> </li>
                                    <li> <a href="contacts.html">Contacts</a> </li>
                                    <li> <a href="file-manager.html">file manager</a> </li>
                                    <li> <a href="invoice.html">Invoice</a> </li>
                                    <li> <a href="blank.html">Blank page</a> </li>
                                    <li> <a href="layout-container.html">layout container</a> </li>
                                    <li> <a href="error.html">Error</a> </li>
                                    <li> <a href="faqs.html">faqs</a> </li>
                                </ul>
                            </li>
                            <!-- menu item Authentication-->
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">
                                    <div class="pull-left"><i class="ti-id-badge"></i><span class="right-nav-text">Authentication</span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="authentication" class="collapse" data-parent="#sidebarnav">
                                    <li> <a href="login.html">login</a> </li>
                                    <li> <a href="register.html">register</a> </li>
                                    <li> <a href="lockscreen.html">Lock screen</a> </li>
                                </ul>
                            </li>
                            <!-- menu item maps-->
                            <li>
                                <a href="maps.html"><i class="ti-location-pin"></i><span class="right-nav-text">maps</span> <span class="badge badge-pill badge-success float-right mt-1">06</span></a>
                            </li>
                            <!-- menu item timeline-->
                            <li>
                                <a href="timeline.html"><i class="ti-panel"></i><span class="right-nav-text">timeline</span> </a>
                            </li>
                            <!-- menu item Multi level-->
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level">
                                    <div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">Multi level Menu</span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="multi-level" class="collapse" data-parent="#sidebarnav">
                                    <li>
                                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth">Level item 1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                                        <ul id="auth" class="collapse">
                                            <li>
                                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#login">Level item 1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                                                <ul id="login" class="collapse">
                                                    <li>
                                                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice">level item 1.1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                                                        <ul id="invoice" class="collapse">
                                                            <li> <a href="#">level item 1.1.1.1</a> </li>
                                                            <li> <a href="#">level item 1.1.1.2</a> </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#">level item 1.2</a> </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#error">level item 2<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                                        <ul id="error" class="collapse">
                                            <li> <a href="#">level item 2.1</a> </li>
                                            <li> <a href="#">level item 2.2</a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Left Sidebar End-->
                <!--=================================
 Main content -->
                <!--=================================
wrapper -->
                <div class="content-wrapper">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="mb-0"> Button</h4>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                                    <li class="breadcrumb-item active">Button</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- main body -->
                    <div class="row">
                        <div class="col-xl-6 mb-30">
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Button</h5>
                                    <a class="button x-small" href="#">x small </a>
                                    <a class="button small" href="#">small</a>
                                    <a class="button" href="#">default</a>
                                    <a class="button medium" href="#">medium</a>
                                    <a class="button large" href="#"> large button</a>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Black Button</h5>
                                    <a class="button black x-small" href="#">x small </a>
                                    <a class="button black small" href="#">small</a>
                                    <a class="button black" href="#">default</a>
                                    <a class="button black medium" href="#">medium</a>
                                    <a class="button black large" href="#"> large button</a>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Gray Button</h5>
                                    <a class="button gray x-small" href="#">x small </a>
                                    <a class="button gray small" href="#">small</a>
                                    <a class="button gray" href="#">default</a>
                                    <a class="button gray medium" href="#">medium</a>
                                    <a class="button gray large" href="#"> large button</a>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template border Button</h5>
                                    <a class="button button-border x-small" href="#">x small </a>
                                    <a class="button button-border small" href="#">small</a>
                                    <a class="button button-border" href="#">default</a>
                                    <a class="button button-border medium" href="#">medium</a>
                                    <a class="button button-border large" href="#"> large button</a>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template border gray Button</h5>
                                    <a class="button button-border gray x-small" href="#">x small </a>
                                    <a class="button button-border gray small" href="#">small</a>
                                    <a class="button button-border gray" href="#">default</a>
                                    <a class="button button-border gray medium" href="#">medium</a>
                                    <a class="button button-border gray large" href="#"> large button</a>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template black border Button</h5>
                                    <a class="button button-border black x-small" href="#">x small </a>
                                    <a class="button button-border black small" href="#">small</a>
                                    <a class="button button-border black" href="#">default</a>
                                    <a class="button button-border black medium" href="#">medium</a>
                                    <a class="button button-border black large" href="#"> large button</a>
                                </div>
                            </div>
                            <div class="card card-statistics theme-bg mb-30">
                                <div class="card-body">
                                    <h5 class="card-title border-white text-white">Template white Button</h5>
                                    <a class="button button-border white x-small" href="#">x small </a>
                                    <a class="button button-border white small" href="#">small</a>
                                    <a class="button button-border white" href="#">default</a>
                                    <a class="button button-border white medium" href="#">medium</a>
                                    <a class="button button-border white large" href="#"> large button</a>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Border Gray Icon Button</h5>
                                    <a class="button button-border gray icon x-small" href="#"> x small  <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button button-border gray icon small" href="#"> small <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button button-border gray icon" href="#"> default <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button button-border gray icon medium" href="#"> medium <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button button-border gray icon large" href="#"> large button <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Border Black Icon Button</h5>
                                    <a class="button button-border black icon x-small" href="#"> x small  <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button button-border black icon small" href="#"> small <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button button-border black icon" href="#"> default <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button button-border black icon medium" href="#"> medium <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button button-border black icon large" href="#"> large button <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Border Icon Button</h5>
                                    <a class="button button-border icon x-small" href="#"> x small  <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button button-border icon small" href="#"> small <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button button-border icon" href="#"> default <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button button-border icon medium" href="#"> medium <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button button-border icon large" href="#"> large button <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Icon Button</h5>
                                    <a class="button icon x-small" href="#"> x small  <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button icon small" href="#"> small <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button icon" href="#"> default <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button icon medium" href="#"> medium <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button icon large" href="#"> large button <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <h5 class="card-title">Template Black Icon Button</h5>
                                    <a class="button black icon x-small" href="#"> x small  <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button black icon small" href="#"> small <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button black icon" href="#"> default <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button black icon medium" href="#"> medium <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button black icon large" href="#"> large button <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 mb-30">
                          
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Gray Icon Button</h5>
                                    <a class="button gray icon x-small" href="#"> x small  <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button gray icon small" href="#"> small <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button gray icon" href="#"> default <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button gray icon medium" href="#"> medium <i class="fa fa-long-arrow-right"></i> </a>
                                    <a class="button gray icon large" href="#"> large button <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                          <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Big Button</h5>
                                    <a class="button big-button mb-20" href="#"> Webmin big button <span> Lorem ipsum dolor sit.</span> </a>
                                    <a class="button gray big-button mb-20" href="#"> Webmin big button <span> Lorem ipsum dolor sit.</span> </a>
                                    <a class="button black big-button  mb-20" href="#"> Webmin big button <span> Lorem ipsum dolor sit.</span> </a>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Btn Block Button</h5>
                                    <a class="button btn-block" href="#"> btn block  </a>
                                    <a class="button black btn-block" href="#"> btn block </a>
                                    <a class="button gray btn-block" href="#"> btn block </a>
                                    <a class="button button-border btn-block" href="#"> btn block </a>
                                    <a class="button button-border black btn-block" href="#"> btn block </a>
                                    <a class="button button-border gray btn-block" href="#"> btn block </a>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Icon Color Button</h5>
                                    <a class="button icon-color" href="#">button icon <i class="fa fa-angle-right"></i></a>
                                    <a class="button icon-color" href="#">button icon <i class="fa fa-angle-right"></i></a>
                                    <a class="button icon-color" href="#">button icon <i class="fa fa-angle-right"></i></a>
                                    <a class="button icon-color" href="#">button icon <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Bootstrap Button</h5>
                                    <button type="button" class="btn">Basic</button>
                                    <button type="button" class="btn btn-secondary">Default</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button type="button" class="btn btn-link">Link</button>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Template Bootstrap Size Button</h5>
                                    <button type="button" class="btn btn-primary btn-lg">Large</button>
                                    <button type="button" class="btn btn-primary btn-sm">Small</button>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Basic example</h5>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-secondary">Left</button>
                                        <button type="button" class="btn btn-secondary">Middle</button>
                                        <button type="button" class="btn btn-secondary">Right</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-statistics mb-30">
                                <div class="card-body">
                                    <h5 class="card-title">Button toolbar</h5>
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-secondary">1</button>
                                            <button type="button" class="btn btn-secondary">2</button>
                                            <button type="button" class="btn btn-secondary">3</button>
                                            <button type="button" class="btn btn-secondary">4</button>
                                        </div>
                                        <div class="btn-group mr-2" role="group" aria-label="Second group">
                                            <button type="button" class="btn btn-secondary">5</button>
                                            <button type="button" class="btn btn-secondary">6</button>
                                            <button type="button" class="btn btn-secondary">7</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Third group">
                                            <button type="button" class="btn btn-secondary">8</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <h5 class="card-title">Nesting</h5>
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-secondary">1</button>
                                        <button type="button" class="btn btn-secondary">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
            <!--=================================
 wrapper -->
            <!--=================================
 footer -->
            <footer class="bg-white p-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-center text-md-left">
                            <p class="mb-0"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>. <a href="#"> Webmin </a> All Rights Reserved. </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="text-center text-md-right">
                            <li class="list-inline-item"><a href="#">Terms & Conditions </a> </li>
                            <li class="list-inline-item"><a href="#">API Use Policy </a> </li>
                            <li class="list-inline-item"><a href="#">Privacy Policy </a> </li>
                        </ul>
                    </div>
                </div>
            </footer>
            </div>
    </div>
    </div>
    </div>
   
   

<!-- row closed -->
@endsection
@section('js')
@endsection














