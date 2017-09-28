'use strict';

define(function () {
  // Latvian
  function ending(count, eleven, singular, other) {
    if (count === 11) {
      return eleven;
    }

    if (count % 10 === 1) {
      return singular;
    }

    return other;
  }

  return {
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Lūdzu ievadiet par  ' + overChars;

      message += ' simbol' + ending(overChars, 'iem', 'u', 'iem');

      return message + ' mazāk';
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Lūdzu ievadiet vēl ' + remainingChars;

      message += ' simbol' + ending(remainingChars, 'us', 'u', 'us');

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Datu ielāde…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Jūs varat izvēlēties ne vairāk kā ' + args.maximum;

      message += ' element' + ending(args.maximum, 'us', 'u', 'us');

      return message;
    },
    noResults: function noResults() {
      return 'Sakritību nav';
    },
    searching: function searching() {
      return 'Meklēšana…';
    }
  };
});
//# sourceMappingURL=lv.js.map