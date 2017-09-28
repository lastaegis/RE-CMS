'use strict';

define(function () {
  // French
  return {
    errorLoading: function errorLoading() {
      return 'Les résultats ne peuvent pas être chargés.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Supprimez ' + overChars + ' caractère';

      if (overChars !== 1) {
        message += 's';
      }

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Saisissez ' + remainingChars + ' caractère';

      if (remainingChars !== 1) {
        message += 's';
      }

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Chargement de résultats supplémentaires…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Vous pouvez seulement sélectionner ' + args.maximum + ' élément';

      if (args.maximum !== 1) {
        message += 's';
      }

      return message;
    },
    noResults: function noResults() {
      return 'Aucun résultat trouvé';
    },
    searching: function searching() {
      return 'Recherche en cours…';
    }
  };
});
//# sourceMappingURL=fr.js.map