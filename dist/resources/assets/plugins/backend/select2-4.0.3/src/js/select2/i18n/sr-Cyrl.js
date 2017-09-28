'use strict';

define(function () {
  // Serbian Cyrilic
  function ending(count, one, some, many) {
    if (count % 10 == 1 && count % 100 != 11) {
      return one;
    }

    if (count % 10 >= 2 && count % 10 <= 4 && (count % 100 < 12 || count % 100 > 14)) {
      return some;
    }

    return many;
  }

  return {
    errorLoading: function errorLoading() {
      return 'Преузимање није успело.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Обришите ' + overChars + ' симбол';

      message += ending(overChars, '', 'а', 'а');

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Укуцајте бар још ' + remainingChars + ' симбол';

      message += ending(remainingChars, '', 'а', 'а');

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Преузимање још резултата…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Можете изабрати само ' + args.maximum + ' ставк';

      message += ending(args.maximum, 'у', 'е', 'и');

      return message;
    },
    noResults: function noResults() {
      return 'Ништа није пронађено';
    },
    searching: function searching() {
      return 'Претрага…';
    }
  };
});
//# sourceMappingURL=sr-Cyrl.js.map