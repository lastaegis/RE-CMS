"use strict";

window.baseUrl = window.location.origin + "/re-cms/";

/**
 * Core Backend CSS Dependency
 */
require("./plugins/backend/bootstrap-3.3.7-dist 2/css/bootstrap.css");
require("./plugins/backend/AdminLTE/css/AdminLTE.css");
require("./plugins/backend/AdminLTE/css/skins/_all-skins.css");
require("./plugins/backend/DataTables-1.10.16/media/css/dataTables.bootstrap.css");
require("./css/backend-re-cms.css");
require("./plugins/backend/dropzone-master/website/css/dropzone.scss");
require("./plugins/backend/select2-4.0.3/dist/css/select2.css");

/**
 * Core Backend JS Dependency
 */
require("jquery");
require("./plugins/backend/bootstrap-3.3.7-dist 2/js/bootstrap");
require("./plugins/backend/AdminLTE/js/adminlte");
require("./plugins/backend/AdminLTE/js/app");
require("./plugins/backend/DataTables-1.10.16/media/js/jquery.dataTables");
require("./plugins/backend/DataTables-1.10.16/media/js/dataTables.bootstrap");
require("./plugins/backend/dropzone-master/website/js/dropzone");
require("./plugins/backend/select2-4.0.3/dist/js/select2");

/**
 * Datatable Config
 */
require("./js/backend/datatables/country");
require("./js/backend/datatables/province");
require("./js/backend/datatables/city");
require("./js/backend/datatables/district");
require("./js/backend/datatables/cafe");

/**
 * Select Ajax Select Helper
 */
require("./js/backend/select/location");

/**
 * CKEditor Init
 */
require("./js/backend/ckeditor/cafe");

/**
 * Dropzone
 */
require("./js/backend/dropzone/init");

/**
 * Modal File
 */
require("./js/backend/file/modal-file");

/**
 * Select2 Init
 */
require("./js/backend/select2/init");
//# sourceMappingURL=app-backend.js.map