'use strict';

define(function () {
  // Danish
  return {
    errorLoading: function errorLoading() {
      return 'Resultaterne kunne ikke indlæses.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Angiv venligst ' + overChars + ' tegn mindre';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Angiv venligst ' + remainingChars + ' tegn mere';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Indlæser flere resultater…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Du kan kun vælge ' + args.maximum + ' emne';

      if (args.maximum != 1) {
        message += 'r';
      }

      return message;
    },
    noResults: function noResults() {
      return 'Ingen resultater fundet';
    },
    searching: function searching() {
      return 'Søger…';
    }
  };
});
//# sourceMappingURL=da.js.map