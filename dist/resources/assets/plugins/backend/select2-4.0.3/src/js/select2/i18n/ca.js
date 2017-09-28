'use strict';

define(function () {
  // Catalan
  return {
    errorLoading: function errorLoading() {
      return 'La càrrega ha fallat';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Si us plau, elimina ' + overChars + ' car';

      if (overChars == 1) {
        message += 'àcter';
      } else {
        message += 'àcters';
      }

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Si us plau, introdueix ' + remainingChars + ' car';

      if (remainingChars == 1) {
        message += 'àcter';
      } else {
        message += 'àcters';
      }

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Carregant més resultats…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Només es pot seleccionar ' + args.maximum + ' element';

      if (args.maximum != 1) {
        message += 's';
      }

      return message;
    },
    noResults: function noResults() {
      return 'No s\'han trobat resultats';
    },
    searching: function searching() {
      return 'Cercant…';
    }
  };
});
//# sourceMappingURL=ca.js.map