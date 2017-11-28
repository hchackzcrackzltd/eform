let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.styles([
  'resources/assets/css/bootstrap.min.css',
  'resources/assets/css/font-awesome.min.css',
  'resources/assets/css/ace.min.css',
  'resources/assets/css/ace-skins.min.css',
  'resources/assets/css/ace-rtl.min.css',
  'resources/assets/css/ace-extra.min.css',
  'resources/assets/css/bootstrap-datepicker3.min.css',
  'resources/assets/css/chosen.min.css',
  'resources/assets/css/select2.min.css',
  'resources/assets/css/animate.css',
], 'public/css/all.min.css');*/

/*mix.scripts([
  'resources/assets/form/js/jquery-2.1.4.min.js',
  'resources/assets/form/js/ace.min.js',
  'resources/assets/form/js/moment.min.js',
  'resources/assets/form/js/bootstrap.min.js',
  'resources/assets/form/js/chosen.jquery.min.js',
  'resources/assets/form/js/bootstrap-datepicker.min.js',
  'resources/assets/form/js/bootstrap-datetimepicker.min.js',
  'resources/assets/form/js/autosize.min.js',
  'resources/assets/form/js/input/jquery.inputmask.bundle.min.js',
  'resources/assets/form/js/input/bindings/inputmask.binding.min.js',
  'resources/assets/form/js/bootstrap-tag.min.js',
  'resources/assets/form/js/wizard.min.js',
  'resources/assets/form/js/ace-elements.min.js',
  'resources/assets/form/js/jquery-ui.custom.min.js',
  'resources/assets/form/js/select2.full.min.js',
  'node_modules/parsleyjs/dist/parsley.js'
],'public/js/all.min.js');*/

mix.styles(['resources/assets/form/css/animate.css','resources/assets/login/index.css'],'public/css/login.min.css');

/*mix.scripts([
  'resources/assets/form/js/jquery-2.1.4.min.js',
  'resources/assets/form/js/input/jquery.inputmask.bundle.min.js',
  'resources/assets/form/js/input/bindings/inputmask.binding.min.js',
  'node_modules/parsleyjs/dist/parsley.js'
],'public/js/login.min.js');*/

/*mix.scripts([
  'resources/assets/form/app.min.js',
],'public/js/app.min.js');*/

/*mix.styles([
  'resources/assets/admin/bootstrap/dist/css/bootstrap.css',
  'resources/assets/admin/datatables.net-bs/css/dataTables.bootstrap.min.css',
  'resources/assets/admin/datatables.net-buttons-bs/css/buttons.bootstrap.min.css',
  'resources/assets/admin/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css',
  'resources/assets/admin/datatables.net-responsive-bs/css/responsive.bootstrap.min.css',
  'resources/assets/admin/datatables.net-scroller-bs/css/scroller.bootstrap.min.css',
  'resources/assets/admin/font-awesome/css/font-awesome.css',
  'resources/assets/admin/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css',
  'resources/assets/admin/gentelella/custom.min.css',
  'resources/assets/admin/PrintArea-master/css/jquery.printarea.css',
],'public/css/admin_all.min.css');*/

/*mix.scripts([
  'resources/assets/admin/jquery/dist/jquery.js',
  'resources/assets/admin/bootstrap/dist/js/bootstrap.js',
  'resources/assets/admin/fastclick/lib/fastclick.js',
  'resources/assets/admin/nprogress/nprogress.js',
  'resources/assets/admin/datatables.net/js/jquery.dataTables.min.js',
  'resources/assets/admin/datatables.net-bs/js/dataTables.bootstrap.min.js',
  'resources/assets/admin/datatables.net-buttons/js/dataTables.buttons.min.js',
  'resources/assets/admin/datatables.net-buttons/js/buttons.colVis.min.js',
  'resources/assets/admin/datatables.net-buttons/js/buttons.flash.min.js',
  'resources/assets/admin/datatables.net-buttons/js/buttons.html5.min.js',
  'resources/assets/admin/datatables.net-buttons/js/buttons.print.min.js',
  'resources/assets/admin/datatables.net-buttons-bs/js/buttons.bootstrap.min.js',
  'resources/assets/admin/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js',
  'resources/assets/admin/datatables.net-keytable/js/dataTables.keyTable.min.js',
  'resources/assets/admin/datatables.net-responsive/js/dataTables.responsive.min.js',
  'resources/assets/admin/datatables.net-responsive-bs/js/responsive.bootstrap.js',
  'resources/assets/admin/datatables.net-scroller/js/dataTables.scroller.min.js',
  'resources/assets/admin/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.js',
  'resources/assets/admin/gentelella/custom.min.js',
  'resources/assets/form/js/input/jquery.inputmask.bundle.min.js',
  'resources/assets/form/js/input/bindings/inputmask.binding.min.js',
  'node_modules/parsleyjs/dist/parsley.js',
  'resources/assets/admin/PrintArea-master/js/jquery.printarea.js',
],'public/js/admin_all.min.js');*/
