'use strict';

define(function () {
  // Ukranian
  function ending(count, one, couple, more) {
    if (count % 100 > 10 && count % 100 < 15) {
      return more;
    }
    if (count % 10 === 1) {
      return one;
    }
    if (count % 10 > 1 && count % 10 < 5) {
      return couple;
    }
    return more;
  }

  return {
    errorLoading: function errorLoading() {
      return 'Неможливо завантажити результати';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;
      return 'Будь ласка, видаліть ' + overChars + ' ' + ending(args.maximum, 'літеру', 'літери', 'літер');
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;
      return 'Будь ласка, введіть ' + remainingChars + ' або більше літер';
    },
    loadingMore: function loadingMore() {
      return 'Завантаження інших результатів…';
    },
    maximumSelected: function maximumSelected(args) {
      return 'Ви можете вибрати лише ' + args.maximum + ' ' + ending(args.maximum, 'пункт', 'пункти', 'пунктів');
    },
    noResults: function noResults() {
      return 'Нічого не знайдено';
    },
    searching: function searching() {
      return 'Пошук…';
    }
  };
});
//# sourceMappingURL=uk.js.map