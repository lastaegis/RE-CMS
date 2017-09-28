'use strict';

define(function () {
  // European Portuguese
  return {
    errorLoading: function errorLoading() {
      return 'Os resultados não puderam ser carregados.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Por favor apague ' + overChars + ' ';

      message += overChars != 1 ? 'caracteres' : 'carácter';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Introduza ' + remainingChars + ' ou mais caracteres';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'A carregar mais resultados…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Apenas pode seleccionar ' + args.maximum + ' ';

      message += args.maximum != 1 ? 'itens' : 'item';

      return message;
    },
    noResults: function noResults() {
      return 'Sem resultados';
    },
    searching: function searching() {
      return 'A procurar…';
    }
  };
});
//# sourceMappingURL=pt.js.map