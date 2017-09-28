'use strict';

define(function () {
  // Hindi
  return {
    errorLoading: function errorLoading() {
      return 'परिणामों को लोड नहीं किया जा सका।';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = overChars + ' अक्षर को हटा दें';

      if (overChars > 1) {
        message = overChars + ' अक्षरों को हटा दें ';
      }

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'कृपया ' + remainingChars + ' या अधिक अक्षर दर्ज करें';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'अधिक परिणाम लोड हो रहे है...';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'आप केवल ' + args.maximum + ' आइटम का चयन कर सकते हैं';
      return message;
    },
    noResults: function noResults() {
      return 'कोई परिणाम नहीं मिला';
    },
    searching: function searching() {
      return 'खोज रहा है...';
    }
  };
});
//# sourceMappingURL=hi.js.map