'use strict';

define(function () {
  // Finnish
  return {
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      return 'Ole hyvä ja anna ' + overChars + ' merkkiä vähemmän';
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      return 'Ole hyvä ja anna ' + remainingChars + ' merkkiä lisää';
    },
    loadingMore: function loadingMore() {
      return 'Ladataan lisää tuloksia…';
    },
    maximumSelected: function maximumSelected(args) {
      return 'Voit valita ainoastaan ' + args.maximum + ' kpl';
    },
    noResults: function noResults() {
      return 'Ei tuloksia';
    },
    searching: function searching() {}
  };
});
//# sourceMappingURL=fi.js.map