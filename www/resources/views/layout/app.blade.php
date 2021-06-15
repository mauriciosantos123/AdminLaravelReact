<!DOCTYPE html>
<html lang="en" class="color-sidebar sidebarcolor3">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="/img/favicon.png">

  @yield('title')

  <!--favicon-->
  <link rel="icon" href="/images/logos/logoMcsys.png" type="image/png" />
  <!--plugins-->



  <link href="/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

  <!--Filtro e paginação em database-->
  <link href="/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

  <!--enviar imagens -->
  <link href="/assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />
  <link href="/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />

  @yield('script_inicial')


  <!--Selecionar mais de um no select e filtros no select-->
  <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="/assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />


  <link href="/assets/plugins/smart-wizard/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
  <!--step by step-->

  <!-- loader-->
  <link href="/assets/css/pace.min.css" rel="stylesheet" />
  <script src="/assets/js/pace.min.js"></script>
  <!-- Bootstrap CSS -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link href="/assets/css/app.css" rel="stylesheet">
  <link href="/assets/css/icons.css" rel="stylesheet">
  <!-- Theme Style CSS -->

  <link rel="stylesheet" href="/assets/css/dark-theme.css" />
  <link rel="stylesheet" href="/assets/css/semi-dark.css" />
  <link rel="stylesheet" href="/assets/css/header-colors.css" />
</head>

<body>
  <!--wrapper-->
  <div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <a href="{{route('home.index')}}" class=""> <img src="/images/logos/logoMcsys.png" class="logo-icon w-75" alt="logo icon"> </a>
        </div>

        <div class="toggle-icon ms-auto">
          <i class='bx bx-arrow-to-left'></i>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">

        <li class="{{ (request()->is('home*')) ? 'mm-active' : '' }}">
          <a href="{{route('home.index')}}" class="">
            <div class="parent-icon"><i class='bx bx-home-circle'></i>
            </div>
            <div class="menu-title " aria-expanded="true">Dashboard</div>
          </a>
        </li>
        <li class="{{ (request()->is('contact*')) ? 'mm-active' : '' }}">
          <a href="{{route('contact.index')}}" class="">
            <div class="parent-icon"><i class='bx bx-comment-detail'></i>
            </div>
            <div class="menu-title">Contato</div>
          </a>
        </li>

        <li>
          <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-user-circle'></i>
            </div>
            <div class="menu-title">Clientes</div>
          </a>
          <ul>
            <li> <a href="{{route('client.index')}}"><i class="bx bx-right-arrow-alt"></i>Listar</a>
            </li>
            <!-- <li> <a href="{{route('portifolio.index')}}"><i class="bx bx-right-arrow-alt"></i>Portfólios</a>
            </li> -->
            <li> <a href="{{route('manutenceService.index')}}"><i class="bx bx-right-arrow-alt"></i>Ordem de Serviços</a>
            </li>
          </ul>
        </li>

        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bx bx-menu"></i>
            </div>
            <div class="menu-title">Categorias</div>
          </a>
          <ul>
            <li> <a class="" href="{{route('categoryPortfolio.index')}}"><i class="bx bx-right-arrow-alt"></i>Portfólios</a>

            </li>
            <li> <a class="" href="{{route('categoryService.index')}}"><i class="bx bx-right-arrow-alt"></i>Serviços</a>

            </li>
            <li> <a class="" href="{{route('categoryOrder.index')}}"><i class="bx bx-right-arrow-alt"></i>Ordem de serviço</a>

            </li>
          </ul>
        </li>
      </ul>
      <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
      <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
          <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
          </div>
          <div class="search-bar flex-grow-1">
            <div class="position-relative search-bar-box">
              <input type="text" class="form-control search-control" placeholder="Procurar"> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
              <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
            </div>
          </div>
          <div class="top-menu ms-auto">
            <ul class="navbar-nav align-items-center">
              <li class="nav-item mobile-search-icon">
                <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                </a>
              </li>

              <li class="nav-item dropdown dropdown-large">
                <div class="dropdown-menu dropdown-menu-end">

                  <div class="header-notifications-list">

                  </div>


                </div>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-comment'></i> -->
                <!-- </a> -->
                <div class="dropdown-menu dropdown-menu-end">

                  <div class="header-message-list">
                    <!-- SE APAGAR AQUI QUEBRE O MENU  
  AQUI FICA A CAIXA DE MSG RECEBIDAS -->
                  </div>

                </div>
              </li>
              <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <!-- <img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar"> -->
                  <div class="user-info ps-3">
                    <p class="user-name mb-0">Bem Vindo</p>
                    <!-- <p class="designattion mb-0">Web Designer</p> -->
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Perfil</span></a>
                  </li>
                  <li>
                    <div class="dropdown-divider mb-0"></div>
                  </li>
                  <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Sair</span></a>
                  </li>
                </ul>
              </div>
            </ul>
          </div>

        </nav>
      </div>
    </header>
    <!--end header -->
    <!--start page wrapper -->
    <div class="page-wrapper">
      <div class="page-content">
        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        @yield('content')
      </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
      @yield('footer')
    </footer>
  </div>
  <!--end wrapper-->



  <!--end switcher-->
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="/assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

  <!-- Bootstrap JS -->


  <script src="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <script src="/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
  <script src="/assets/plugins/jquery-knob/excanvas.js"></script>
  <script src="/assets/plugins/jquery-knob/jquery.knob.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

  <script>
    $(document).ready(function() {
      $('.date').mask('00/00/0000');
      $('.time').mask('00:00:00');
      $('.date_time').mask('00/00/0000 00:00:00');
      $('.cep').mask('00000-000');
      $('.phone').mask('00000-0000');
      $('.phone_with_ddd').mask('(00) 00000-0000');
      $('.phone_us').mask('(000) 000-0000');
      $('.mixed').mask('AAA 000-S0S');
      $('.cpf').mask('000.000.000-00', {
        reverse: true
      });
      $('.cnpj').mask('00.000.000/0000-00', {
        reverse: true
      });

      var options = {
        onKeyPress: function(cpfcnpj, e, field, options) {
          var masks = ['000.000.000-000', '00.000.000/0000-00'];
          var mask = (cpfcnpj.length > 14) ? masks[1] : masks[0];
          $('.cpfcnpj').mask(mask, options);
        }
      };

      $('.cpfcnpj').mask('000.000.000-000', options);

      $('.money').mask('000.000.000.000.000,00', {
        reverse: true
      });
      $('.money2').mask("#.##0,00", {
        reverse: true
      });
      $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
          'Z': {
            pattern: /[0-9]/,
            optional: true
          }
        }
      });
      $('.ip_address').mask('099.099.099.099');
      $('.percent').mask('##0,00%', {
        reverse: true
      });
      $('.clear-if-not-match').mask("00/00/0000", {
        clearIfNotMatch: true
      });
      $('.placeholder').mask("00/00/0000", {
        placeholder: "__/__/____"
      });
      $('.fallback').mask("00r00r0000", {
        translation: {
          'r': {
            pattern: /[\/]/,
            fallback: '/'
          },
          placeholder: "__/__/____"
        }
      });
      $('.selectonfocus').mask("00/00/0000", {
        selectOnFocus: true
      });
    });
  </script>

  @yield('script')

  <!--app JS-->
  <script src="/assets/js/app.js"></script>

</body>

</html>