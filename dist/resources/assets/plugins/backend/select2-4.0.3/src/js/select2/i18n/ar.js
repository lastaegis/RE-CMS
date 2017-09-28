'use strict';

define(function () {
  // Arabic
  return {
    errorLoading: function errorLoading() {
      return 'لا يمكن تحميل النتائج';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'الرجاء حذف ' + overChars + ' عناصر';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'الرجاء إضافة ' + remainingChars + ' عناصر';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'جاري تحميل نتائج إضافية...';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'تستطيع إختيار ' + args.maximum + ' بنود فقط';

      return message;
    },
    noResults: function noResults() {
      return 'لم يتم العثور على أي نتائج';
    },
    searching: function searching() {
      return 'جاري البحث…';
    }
  };
});
//# sourceMappingURL=ar.js.map