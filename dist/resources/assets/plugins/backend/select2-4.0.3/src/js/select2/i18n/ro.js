'use strict';

define(function () {
  // Romanian
  return {
    errorLoading: function errorLoading() {
      return 'Rezultatele nu au putut fi incărcate.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Vă rugăm să ștergeți' + overChars + ' caracter';

      if (overChars !== 1) {
        message += 'e';
      }

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Vă rugăm să introduceți ' + remainingChars + 'sau mai multe caractere';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Se încarcă mai multe rezultate…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Aveți voie să selectați cel mult ' + args.maximum;
      message += ' element';

      if (args.maximum !== 1) {
        message += 'e';
      }

      return message;
    },
    noResults: function noResults() {
      return 'Nu au fost găsite rezultate';
    },
    searching: function searching() {
      return 'Căutare…';
    }
  };
});
//# sourceMappingURL=ro.js.map