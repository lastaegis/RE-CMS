'use strict';

define(function () {
  // Azerbaijani
  return {
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      return overChars + ' simvol silin';
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      return remainingChars + ' simvol daxil edin';
    },
    loadingMore: function loadingMore() {
      return 'Daha çox nəticə yüklənir…';
    },
    maximumSelected: function maximumSelected(args) {
      return 'Sadəcə ' + args.maximum + ' element seçə bilərsiniz';
    },
    noResults: function noResults() {
      return 'Nəticə tapılmadı';
    },
    searching: function searching() {
      return 'Axtarılır…';
    }
  };
});
//# sourceMappingURL=az.js.map