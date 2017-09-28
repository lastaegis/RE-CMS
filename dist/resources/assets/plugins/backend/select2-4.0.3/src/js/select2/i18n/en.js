'use strict';

define(function () {
  // English
  return {
    errorLoading: function errorLoading() {
      return 'The results could not be loaded.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Please delete ' + overChars + ' character';

      if (overChars != 1) {
        message += 's';
      }

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Please enter ' + remainingChars + ' or more characters';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Loading more results…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'You can only select ' + args.maximum + ' item';

      if (args.maximum != 1) {
        message += 's';
      }

      return message;
    },
    noResults: function noResults() {
      return 'No results found';
    },
    searching: function searching() {
      return 'Searching…';
    }
  };
});
//# sourceMappingURL=en.js.map