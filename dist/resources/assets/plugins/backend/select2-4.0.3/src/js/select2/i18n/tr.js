'use strict';

define(function () {
  // Turkish
  return {
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = overChars + ' karakter daha girmelisiniz';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'En az ' + remainingChars + ' karakter daha girmelisiniz';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Daha fazla…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Sadece ' + args.maximum + ' seçim yapabilirsiniz';

      return message;
    },
    noResults: function noResults() {
      return 'Sonuç bulunamadı';
    },
    searching: function searching() {
      return 'Aranıyor…';
    }
  };
});
//# sourceMappingURL=tr.js.map