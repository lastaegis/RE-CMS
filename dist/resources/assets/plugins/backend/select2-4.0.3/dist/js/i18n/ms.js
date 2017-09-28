"use strict";

/*! Select2 4.0.3 | https://github.com/select2/select2/blob/master/LICENSE.md */

(function () {
  if (jQuery && jQuery.fn && jQuery.fn.select2 && jQuery.fn.select2.amd) var e = jQuery.fn.select2.amd;return e.define("select2/i18n/ms", [], function () {
    return { errorLoading: function errorLoading() {
        return "Keputusan tidak berjaya dimuatkan.";
      }, inputTooLong: function inputTooLong(e) {
        var t = e.input.length - e.maximum;return "Sila hapuskan " + t + " aksara";
      }, inputTooShort: function inputTooShort(e) {
        var t = e.minimum - e.input.length;return "Sila masukkan " + t + " atau lebih aksara";
      }, loadingMore: function loadingMore() {
        return "Sedang memuatkan keputusan…";
      }, maximumSelected: function maximumSelected(e) {
        return "Anda hanya boleh memilih " + e.maximum + " pilihan";
      }, noResults: function noResults() {
        return "Tiada padanan yang ditemui";
      }, searching: function searching() {
        return "Mencari…";
      } };
  }), { define: e.define, require: e.require };
})();
//# sourceMappingURL=ms.js.map