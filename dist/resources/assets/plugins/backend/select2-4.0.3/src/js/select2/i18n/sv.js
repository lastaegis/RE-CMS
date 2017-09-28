'use strict';

define(function () {
  // Swedish
  return {
    errorLoading: function errorLoading() {
      return 'Resultat kunde inte laddas.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Vänligen sudda ut ' + overChars + ' tecken';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Vänligen skriv in ' + remainingChars + ' eller fler tecken';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Laddar fler resultat…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Du kan max välja ' + args.maximum + ' element';

      return message;
    },
    noResults: function noResults() {
      return 'Inga träffar';
    },
    searching: function searching() {
      return 'Söker…';
    }
  };
});
//# sourceMappingURL=sv.js.map