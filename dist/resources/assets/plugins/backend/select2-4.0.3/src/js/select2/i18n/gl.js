'use strict';

define(function () {
  // Galician
  return {
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Elimine ';

      if (overChars === 1) {
        message += 'un carácter';
      } else {
        message += overChars + ' caracteres';
      }

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Engada ';

      if (remainingChars === 1) {
        message += 'un carácter';
      } else {
        message += remainingChars + ' caracteres';
      }

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Cargando máis resultados…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Só pode ';

      if (args.maximum === 1) {
        message += 'un elemento';
      } else {
        message += args.maximum + ' elementos';
      }

      return message;
    },
    noResults: function noResults() {
      return 'Non se atoparon resultados';
    },
    searching: function searching() {
      return 'Buscando…';
    }
  };
});
//# sourceMappingURL=gl.js.map