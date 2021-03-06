<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  <!-- CSS Files -->
  <link href={{ asset('assets/admin/css/material-dashboard.css?v=2.1.2') }} rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href={{ asset('assets/admin/demo/demo.css') }} rel="stylesheet" />
  <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>

</head>

<body class="">

  <div class="wrapper">
    @include('admin.includes.sidebar')
    <div class="main-panel">
      @include('admin.includes.navbar')
      {{-- @include('admin.includes.sessions') --}}
      <div class="content">
        <div class="container-fluid">
            {{-- ADD CATEGORY --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="add-categories">
                <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Add Categories</h4>
                      <p class="card-category">Add some Categories</p>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('admin.insertion.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">Category Name</label>
                                <input type="text" name="cat_name" class="form-control" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                {{-- <label class="bmd-label-floating">Category Image</label> --}}
                                <input type="file" name="cat_img" class="form-control" />
                              </div>
                            </div>
                          </div>
                        <button type="submit" class="btn btn-primary">Add Categories</button>
                        {{-- <div class="clearfix"></div> --}}
                      </form>
                    </div>
                  </div>
            </div> 
            {{--END OF ADD CATEGORY --}}
            <div class="add-sub-categories">
                <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Add sub-categories</h4>
                      <p class="card-category">Add sub-categories</p>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('admin.subcatinsert.store') }}" method="post">
                        @csrf
                        <div style="align-items: center;" class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">sub-categories</label>
                                <input type="text" name="sub_cat_name" class="form-control" />
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="cat_id" class="selectpicker sub-cat-form" data-live-search="true">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" data-tokens="{{ $category->cat_name }}">{{ $category->cat_name }}</option>
                                        @endforeach
                                    </select>                                      
                                </div>
                            </div>
                          </div>
                        <button type="submit" class="btn btn-primary">Add sub-categories</button>
                      </form>
                    </div>
                  </div>
            </div> 
            {{--END OF ADD SUB-CATEGORY --}}
            <div class="add-products">
                <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Add Products</h4>
                      <p class="card-category">Add Products</p>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div style="align-items: center;" class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Product Name</label>
                                <input type="text" name="product_name" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Product Description</label>
                                <textarea name="product_description" class="form-control" cols="30" rows="5"></textarea>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select id="cat_product" name="cat_id" class="selectpicker sub-cat-form" data-live-search="true">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" data-tokens="{{ $category->cat_name }}">{{ $category->cat_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <select class="selectpicker sub-cat-form" id="append_select_sub_cat" name="sub_cat_id">
                                    
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <select name="product_status" class="selectpicker">
                                      <option value="In Stock">In Stock</option> 
                                      <option value="Hors Stock">Hors Stock</option> 
                                  </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  {{-- <label for="product_offers" class="bmd-label-floating">Is Offer</label>
                                  <input id="product_offers" type="radio" name="product_offers" class="form-control" /> --}}
                                  <select name="product_offers" class="selectpicker">
                                    <option value="Not_Offer">Not_Offer</option> 
                                    <option value="Offer">Offer</option> 
                                  </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">Product Price</label>
                                <input style="width:71% !important" type="text" class="form-control" name="product_price" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">old Price</label>
                                <input style="width:71% !important" type="text" class="form-control" name="old_price" />
                              </div>
                            </div>
                            <div class="col-md-12">
                              {{-- <div class="form-group"> --}}
                                <label class="bmd-label-floating">Product Images</label>
                                <input type="file" name="imgs_product[]" multiple="multiple" />
                              {{-- </div> --}}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Add Product</button>
                        <div class="clearfix"></div>
                      </form>
                    </div>
                  </div>
            </div> 
            {{--END OF ADD PRODUCTS --}}
        </div>
      </div>
    </div>
  </div>



  <!--   Core JS Files   -->
  <script src={{ asset('assets/admin/js/core/jquery.min.js') }}></script>
  <script src={{ asset('assets/admin/js/core/popper.min.js') }}></script>
  <script src={{ asset("assets/admin/js/core/bootstrap-material-design.min.js") }}></script>
  <script src={{ asset("assets/admin/js/plugins/perfect-scrollbar.jquery.min.js") }}></script>
  <!-- Plugin for the momentJs  -->
  <script src={{ asset("assets/admin/js/plugins/moment.min.js") }}></script>
  <!--  Plugin for Sweet Alert -->
  <script src={{ asset("assets/admin/js/plugins/sweetalert2.js") }}></script>
  <!-- Forms Validations Plugin -->
  <script src={{ asset("assets/admin/js/plugins/jquery.validate.min.js") }}></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src={{ asset("assets/admin/js/plugins/jquery.bootstrap-wizard.js") }}></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src={{ asset("assets/admin/js/plugins/bootstrap-selectpicker.js") }}></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src={{ asset("assets/admin/js/plugins/bootstrap-datetimepicker.min.js") }}></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src={{ asset("assets/admin/js/plugins/jquery.dataTables.min.js") }}></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src={{ asset("assets/admin/js/plugins/bootstrap-tagsinput.js") }}></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src={{ asset("assets/admin/js/plugins/jasny-bootstrap.min.js") }}></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src={{ asset("assets/admin/js/plugins/fullcalendar.min.js") }}></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src={{ asset("assets/admin/js/plugins/jquery-jvectormap.js") }}></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src={{ asset("assets/admin/js/plugins/nouislider.min.js") }}></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src={{ asset("assets/admin/js/plugins/arrive.min.js") }}></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src={{ asset("assets/admin/js/plugins/chartist.min.js") }}></script>
  <!--  Notifications Plugin    -->
  <script src={{ asset("assets/admin/js/plugins/bootstrap-notify.js") }}></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src={{ asset("assets/admin/js/material-dashboard.js?v=2.1.2")}} type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src={{ asset('assets/admin/demo/demo.js') }}></script>
  




  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
  <script>
    $(document).ready(function(){
      
      $('#cat_product').change(function(){
        id_cat=$(this).val();
        // alert($(this).val());
        $.ajax({
          url:"{{ route('admin.ajax_sub_cat')}}",
          type:"POST",
          dataType:"json",
          data:{
            "_token": "{{ csrf_token() }}",
            id_cat:id_cat
          },
          success:function(data) {
              console.log(data.output);
              $('#append_select_sub_cat').html(data.output).selectpicker('refresh');
          },
          error:function(error) {
              console.log(error);
          }
        })
      })
    })
  </script>

  
</body>

</html>