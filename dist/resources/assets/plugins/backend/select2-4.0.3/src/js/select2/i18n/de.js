'use strict';

define(function () {
  // German
  return {
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      return 'Bitte ' + overChars + ' Zeichen weniger eingeben';
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      return 'Bitte ' + remainingChars + ' Zeichen mehr eingeben';
    },
    loadingMore: function loadingMore() {
      return 'Lade mehr Ergebnisse…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Sie können nur ' + args.maximum + ' Eintr';

      if (args.maximum === 1) {
        message += 'ag';
      } else {
        message += 'äge';
      }

      message += ' auswählen';

      return message;
    },
    noResults: function noResults() {
      return 'Keine Übereinstimmungen gefunden';
    },
    searching: function searching() {
      return 'Suche…';
    }
  };
});
//# sourceMappingURL=de.js.map