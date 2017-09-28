'use strict';

/* jshint -W100 */
/* jslint maxlen: 86 */
define(function () {
  // Farsi (Persian)
  return {
    errorLoading: function errorLoading() {
      return 'امکان بارگذاری نتایج وجود ندارد.';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'لطفاً ' + overChars + ' کاراکتر را حذف نمایید';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'لطفاً تعداد ' + remainingChars + ' کاراکتر یا بیشتر وارد نمایید';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'در حال بارگذاری نتایج بیشتر...';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'شما تنها می‌توانید ' + args.maximum + ' آیتم را انتخاب نمایید';

      return message;
    },
    noResults: function noResults() {
      return 'هیچ نتیجه‌ای یافت نشد';
    },
    searching: function searching() {
      return 'در حال جستجو...';
    }
  };
});
//# sourceMappingURL=fa.js.map