'use strict';

define(function () {
  // Italian
  return {
    errorLoading: function errorLoading() {
      return 'I risultati non possono essere caricati.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Per favore cancella ' + overChars + ' caratter';

      if (overChars !== 1) {
        message += 'i';
      } else {
        message += 'e';
      }

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Per favore inserisci ' + remainingChars + ' o più caratteri';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Caricando più risultati…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Puoi selezionare solo ' + args.maximum + ' element';

      if (args.maximum !== 1) {
        message += 'i';
      } else {
        message += 'o';
      }

      return message;
    },
    noResults: function noResults() {
      return 'Nessun risultato trovato';
    },
    searching: function searching() {
      return 'Sto cercando…';
    }
  };
});
//# sourceMappingURL=it.js.map