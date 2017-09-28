'use strict';

define(function () {
  // Hungarian
  return {
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      return 'Túl hosszú. ' + overChars + ' karakterrel több, mint kellene.';
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      return 'Túl rövid. Még ' + remainingChars + ' karakter hiányzik.';
    },
    loadingMore: function loadingMore() {
      return 'Töltés…';
    },
    maximumSelected: function maximumSelected(args) {
      return 'Csak ' + args.maximum + ' elemet lehet kiválasztani.';
    },
    noResults: function noResults() {
      return 'Nincs találat.';
    },
    searching: function searching() {
      return 'Keresés…';
    }
  };
});
//# sourceMappingURL=hu.js.map