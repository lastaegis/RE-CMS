'use strict';

define(function () {
  // Greek (el)
  return {
    errorLoading: function errorLoading() {
      return 'Τα αποτελέσματα δεν μπόρεσαν να φορτώσουν.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Παρακαλώ διαγράψτε ' + overChars + ' χαρακτήρ';

      if (overChars == 1) {
        message += 'α';
      }
      if (overChars != 1) {
        message += 'ες';
      }

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Παρακαλώ συμπληρώστε ' + remainingChars + ' ή περισσότερους χαρακτήρες';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Φόρτωση περισσότερων αποτελεσμάτων…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Μπορείτε να επιλέξετε μόνο ' + args.maximum + ' επιλογ';

      if (args.maximum == 1) {
        message += 'ή';
      }

      if (args.maximum != 1) {
        message += 'ές';
      }

      return message;
    },
    noResults: function noResults() {
      return 'Δεν βρέθηκαν αποτελέσματα';
    },
    searching: function searching() {
      return 'Αναζήτηση…';
    }
  };
});
//# sourceMappingURL=el.js.map