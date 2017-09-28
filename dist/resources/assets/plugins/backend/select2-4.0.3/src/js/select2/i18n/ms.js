'use strict';

define(function () {
  // Malay
  return {
    errorLoading: function errorLoading() {
      return 'Keputusan tidak berjaya dimuatkan.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      return 'Sila hapuskan ' + overChars + ' aksara';
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      return 'Sila masukkan ' + remainingChars + ' atau lebih aksara';
    },
    loadingMore: function loadingMore() {
      return 'Sedang memuatkan keputusan…';
    },
    maximumSelected: function maximumSelected(args) {
      return 'Anda hanya boleh memilih ' + args.maximum + ' pilihan';
    },
    noResults: function noResults() {
      return 'Tiada padanan yang ditemui';
    },
    searching: function searching() {
      return 'Mencari…';
    }
  };
});
//# sourceMappingURL=ms.js.map