'use strict';

define(function () {
  // Dutch
  return {
    errorLoading: function errorLoading() {
      return 'De resultaten konden niet worden geladen.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Gelieve ' + overChars + ' karakters te verwijderen';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Gelieve ' + remainingChars + ' of meer karakters in te voeren';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Meer resultaten laden…';
    },
    maximumSelected: function maximumSelected(args) {
      var verb = args.maximum == 1 ? 'kan' : 'kunnen';
      var message = 'Er ' + verb + ' maar ' + args.maximum + ' item';

      if (args.maximum != 1) {
        message += 's';
      }
      message += ' worden geselecteerd';

      return message;
    },
    noResults: function noResults() {
      return 'Geen resultaten gevonden…';
    },
    searching: function searching() {
      return 'Zoeken…';
    }
  };
});
//# sourceMappingURL=nl.js.map