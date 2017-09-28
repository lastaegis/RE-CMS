'use strict';

define(function () {
  // Basque
  return {
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Idatzi ';

      if (overChars == 1) {
        message += 'karaktere bat';
      } else {
        message += overChars + ' karaktere';
      }

      message += ' gutxiago';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Idatzi ';

      if (remainingChars == 1) {
        message += 'karaktere bat';
      } else {
        message += remainingChars + ' karaktere';
      }

      message += ' gehiago';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Emaitza gehiago kargatzen…';
    },
    maximumSelected: function maximumSelected(args) {
      if (args.maximum === 1) {
        return 'Elementu bakarra hauta dezakezu';
      } else {
        return args.maximum + ' elementu hauta ditzakezu soilik';
      }
    },
    noResults: function noResults() {
      return 'Ez da bat datorrenik aurkitu';
    },
    searching: function searching() {
      return 'Bilatzen…';
    }
  };
});
//# sourceMappingURL=eu.js.map