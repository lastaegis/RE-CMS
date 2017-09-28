'use strict';

define(function () {
  // Hebrew
  return {
    errorLoading: function errorLoading() {
      return 'שגיאה בטעינת התוצאות';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'נא למחוק ';

      if (overChars === 1) {
        message += 'תו אחד';
      } else {
        message += overChars + ' תווים';
      }

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'נא להכניס ';

      if (remainingChars === 1) {
        message += 'תו אחד';
      } else {
        message += remainingChars + ' תווים';
      }

      message += ' או יותר';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'טוען תוצאות נוספות…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'באפשרותך לבחור עד ';

      if (args.maximum === 1) {
        message += 'פריט אחד';
      } else {
        message += args.maximum + ' פריטים';
      }

      return message;
    },
    noResults: function noResults() {
      return 'לא נמצאו תוצאות';
    },
    searching: function searching() {
      return 'מחפש…';
    }
  };
});
//# sourceMappingURL=he.js.map