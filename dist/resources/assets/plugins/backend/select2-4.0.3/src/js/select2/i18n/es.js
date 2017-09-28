'use strict';

define(function () {
  // Spanish
  return {
    errorLoading: function errorLoading() {
      return 'La carga falló';
    },
    inputTooLong: function inputTooLong(args) {
      var remainingChars = args.input.length - args.maximum;

      var message = 'Por favor, elimine ' + remainingChars + ' car';

      if (remainingChars == 1) {
        message += 'ácter';
      } else {
        message += 'acteres';
      }

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Por favor, introduzca ' + remainingChars + ' car';

      if (remainingChars == 1) {
        message += 'ácter';
      } else {
        message += 'acteres';
      }

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Cargando más resultados…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Sólo puede seleccionar ' + args.maximum + ' elemento';

      if (args.maximum != 1) {
        message += 's';
      }

      return message;
    },
    noResults: function noResults() {
      return 'No se encontraron resultados';
    },
    searching: function searching() {
      return 'Buscando…';
    }
  };
});
//# sourceMappingURL=es.js.map