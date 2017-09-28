'use strict';

define(function () {
  // Estonian
  return {
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Sisesta ' + overChars + ' täht';

      if (overChars != 1) {
        message += 'e';
      }

      message += ' vähem';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Sisesta ' + remainingChars + ' täht';

      if (remainingChars != 1) {
        message += 'e';
      }

      message += ' rohkem';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'Laen tulemusi…';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'Saad vaid ' + args.maximum + ' tulemus';

      if (args.maximum == 1) {
        message += 'e';
      } else {
        message += 't';
      }

      message += ' valida';

      return message;
    },
    noResults: function noResults() {
      return 'Tulemused puuduvad';
    },
    searching: function searching() {
      return 'Otsin…';
    }
  };
});
//# sourceMappingURL=et.js.map