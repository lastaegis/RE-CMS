'use strict';

define(function () {
  // Indonesian
  return {
    errorLoading: function errorLoading() {
      return 'Data tidak boleh diambil.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      return 'Hapuskan ' + overChars + ' huruf';
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      return 'Masukkan ' + remainingChars + ' huruf lagi';
    },
    loadingMore: function loadingMore() {
      return 'Mengambil data…';
    },
    maximumSelected: function maximumSelected(args) {
      return 'Anda hanya dapat memilih ' + args.maximum + ' pilihan';
    },
    noResults: function noResults() {
      return 'Tidak ada data yang sesuai';
    },
    searching: function searching() {
      return 'Mencari…';
    }
  };
});
//# sourceMappingURL=id.js.map