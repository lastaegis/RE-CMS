'use strict';

define(function () {
  // Croatian
  function character(n) {
    var message = ' ' + n + ' znak';

    if (n % 10 < 5 && n % 10 > 0 && (n % 100 < 5 || n % 100 > 19)) {
      if (n % 10 > 1) {
        message += 'a';
      }
    } else {
      message += 'ova';
    }

    return message;
  }

  return {
    errorLoading: function errorLoading() {
      return 'Preuzimanje nije uspjelo.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      return 'Unesite ' + character(overChars);
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      return 'Unesite još ' + character(remainingChars);
    },
    loadingMore: function loadingMore() {
      return 'Učitavanje rezultata…';
    },
    maximumSelected: function maximumSelected(args) {
      return 'Maksimalan broj odabranih stavki je ' + args.maximum;
    },
    noResults: function noResults() {
      return 'Nema rezultata';
    },
    searching: function searching() {
      return 'Pretraga…';
    }
  };
});
//# sourceMappingURL=hr.js.map