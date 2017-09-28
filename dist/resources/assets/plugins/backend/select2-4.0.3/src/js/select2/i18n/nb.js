'use strict';

define(function () {
  // Norwegian (Bokmål)
  return {
    errorLoading: function errorLoading() {
      return 'Kunne ikke hente resultater.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      return 'Vennligst fjern ' + overChars + ' tegn';
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Vennligst skriv inn ';

      if (remainingChars > 1) {
        message += ' flere tegn';
      } else {
        message += ' tegn til';
      }

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Laster flere resultater…';
    },
    maximumSelected: function maximumSelected(args) {
      return 'Du kan velge maks ' + args.maximum + ' elementer';
    },
    noResults: function noResults() {
      return 'Ingen treff';
    },
    searching: function searching() {
      return 'Søker…';
    }
  };
});
//# sourceMappingURL=nb.js.map