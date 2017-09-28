'use strict';

define(function () {
  // Khmer
  return {
    errorLoading: function errorLoading() {
      return 'មិនអាចទាញយកទិន្នន័យ';
    },
    inputTooLong: function inputTooLong(args) {
      var overChars = args.input.length - args.maximum;

      var message = 'សូមលុបចេញ  ' + overChars + ' អក្សរ';

      return message;
    },
    inputTooShort: function inputTooShort(args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'សូមបញ្ចូល' + remainingChars + ' អក្សរ រឺ ច្រើនជាងនេះ';

      return message;
    },
    loadingMore: function loadingMore() {
      return 'កំពុងទាញយកទិន្នន័យបន្ថែម...';
    },
    maximumSelected: function maximumSelected(args) {
      var message = 'អ្នកអាចជ្រើសរើសបានតែ ' + args.maximum + ' ជម្រើសប៉ុណ្ណោះ';

      return message;
    },
    noResults: function noResults() {
      return 'មិនមានលទ្ធផល';
    },
    searching: function searching() {
      return 'កំពុងស្វែងរក...';
    }
  };
});
//# sourceMappingURL=km.js.map