'use strict';

define(function () {
  // Brazilian Portuguese
  return {
    errorLoading: function errorLoading() {
      return 'Os resultados não puderam ser carregados.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Apague ' + overChars + ' caracter';

      if (overChars != 1) {
        message += 'es';
      }

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Digite ' + remainingChars + ' ou mais caracteres';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Carregando mais resultados…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Você só pode selecionar ' + args.maximum + ' ite';

      if (args.maximum == 1) {
        message += 'm';
      } else {
        message += 'ns';
      }

      return message;
    },
    noResults: function noResults() {
      return 'Nenhum resultado encontrado';
    },
    searching: function searching() {
      return 'Buscando…';
    }
  };
});
//# sourceMappingURL=pt-BR.js.map