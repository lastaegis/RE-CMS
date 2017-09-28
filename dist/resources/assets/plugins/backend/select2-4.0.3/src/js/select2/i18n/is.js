'use strict';

define(function () {
  // Icelandic
  return {
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Vinsamlegast styttið texta um ' + overChars + ' staf';

      if (overChars <= 1) {
        return message;
      }

      return message + 'i';
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Vinsamlegast skrifið ' + remainingChars + ' staf';

      if (remainingChars > 1) {
        message += 'i';
      }

      message += ' í viðbót';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Sæki fleiri niðurstöður…';
    },
    maximumSelected: function maximumSelected(args) {
      return 'Þú getur aðeins valið ' + args.maximum + ' atriði';
    },
    noResults: function noResults() {
      return 'Ekkert fannst';
    },
    searching: function searching() {
      return 'Leita…';
    }
  };
});
//# sourceMappingURL=is.js.map