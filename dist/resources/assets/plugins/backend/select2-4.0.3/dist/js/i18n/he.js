"use strict";

/*! Select2 4.0.3 | https://github.com/select2/select2/blob/master/LICENSE.md */

(function () {
  if (jQuery && jQuery.fn && jQuery.fn.select2 && jQuery.fn.select2.amd) var e = jQuery.fn.select2.amd;return e.define("select2/i18n/he", [], function () {
    return { errorLoading: function errorLoading() {
        return "שגיאה בטעינת התוצאות";
      }, inputTooLong: function inputTooLong(e) {
        var t = e.input.length - e.maximum,
            n = "נא למחוק ";return t === 1 ? n += "תו אחד" : n += t + " תווים", n;
      }, inputTooShort: function inputTooShort(e) {
        var t = e.minimum - e.input.length,
            n = "נא להכניס ";return t === 1 ? n += "תו אחד" : n += t + " תווים", n += " או יותר", n;
      }, loadingMore: function loadingMore() {
        return "טוען תוצאות נוספות…";
      }, maximumSelected: function maximumSelected(e) {
        var t = "באפשרותך לבחור עד ";return e.maximum === 1 ? t += "פריט אחד" : t += e.maximum + " פריטים", t;
      }, noResults: function noResults() {
        return "לא נמצאו תוצאות";
      }, searching: function searching() {
        return "מחפש…";
      } };
  }), { define: e.define, require: e.require };
})();
//# sourceMappingURL=he.js.map